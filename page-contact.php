<?php
session_start();

$mode = !empty($_POST['mode']) ? $_POST['mode'] : '';

date_default_timezone_set('Asia/Tokyo');
$now = date("YmdHis");

$requirements = "";
$namefull = "";
$email = "";
$phonenumber = "";
$inquiry = "";
$files = [];
$chkconsent = "";

$error = "";
$error_requirements = "";
$error_namefull = "";
$error_email = "";
$error_phonenumber = "";
$error_inquiry = "";
$error_consent = "";
$error_file = "";

if ($mode) {
    if (empty($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {
        die('不正な遷移です。');
    }

    if ($_POST['requirements'] === "-") {
        // 未選択状態チェック
        $error_requirements = "(!)用件を選択してください\n";
    } else {
        $requirements = h($_POST['requirements']);
    }

    if (empty($_POST['namefull'])) {
        $error_namefull = "(!)お名前を入力してください\n";
    } else {
        $namefull = h($_POST['namefull']);
    }

    if (empty($_POST['email'])) {
        $error_email = "(!)メールアドレスを入力してください\n";
    } elseif(!isEmail($_POST['email'])) {
        $email = h($_POST['email']);
        $error_email = "(!)メールアドレスを正しい形式で入力してください\n";
    } else {
        $email = h($_POST['email']);
    }

    if (empty($_POST['phonenumber'])) {
        $error_phonenumber = "(!)電話番号を入力してください\n";
    } elseif (!preg_match( '/^0[0-9]{9,10}\z/', $_POST['phonenumber'] )) {
        $phonenumber = h($_POST['phonenumber']);
        $error_phonenumber = "(!)電話番号を正しい形式で入力してください\n";
    } else {
        $phonenumber = h($_POST['phonenumber']);
    }

    if (empty($_POST['inquiry'])) {
        $error_inquiry = "(!)お問い合わせ内容を入力してください。\n";
    } else {
        $inquiry = h($_POST['inquiry']);
    }

    // チェック「プライバシーポリシーの同意」
    if (empty($_POST['chkconsent'])) {
        $error_consent = "(!)プライバシーポリシーに同意の上、<span class='wraptext'>確認ボタンを押してください</span>\n";
    } else {
        $chkconsent = $_POST['chkconsent'];
    }

    if ($mode == "input") {
        // 戻るボタンを押した際に、一時保存中のファイルを削除する
        if (!empty($_POST["input_file"])) {
            for ($i = 0; $i < count($_POST["input_file"]); $i++) {
                if (!empty($_POST['input_file'][$i]['name'])) {
                    if (!unlink($_POST['input_file'][$i]['tmpdir'])) {
                        $mode = 'error';
                        $error = 'ファイル削除に失敗しました';
                        die('ファイル削除に失敗しました');
                    }
                }
            }
        }
    } elseif ($mode == "confirm") {
        // 入力ファイルのチェック＆移動
        $arrayFile = $_FILES["input_file"];

        // 添付ファイル必須チェック
        for ($i = 0; $i < count($arrayFile["name"]); $i++) {
            // ファイルのバリデーション
            // 任意入力なので、ファイルが入っていたらチェック
            if (!empty($arrayFile["name"][$i])) {
                // 入力ファイルのエラーコードチェック
                $error_file = chkFileError($arrayFile["error"][$i]);
                if (!empty($error_file)) {
                    break;
                };

                // ファイルサイズ
                if ($arrayFile['size'][$i] > 31457280) {
                    $error_file = "(!)ファイルサイズは30M未満にしてください。\n";
                    break;
                }
    
                // 拡張子チェック
                $allow_ext = array('docx', 'doc', 'xlsx', 'xls', 'pdf');
                $file_ext = pathinfo($arrayFile['name'][$i], PATHINFO_EXTENSION);
                if (!in_array(strtolower($file_ext), $allow_ext)) {
                    $error_file = "(!)WORD / EXCEL / PDFファイルを添付してください。\n";
                    break;
                }
    
                // エラーがない場合、ファイルをtmpフォルダに移動する
                if (!$error_file) {
                    $fileTmpPath = __DIR__ . '/assets/tmp/' . $now . '_' . substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 8) . '_' . $arrayFile['name'][$i];
                    $success = move_uploaded_file($arrayFile['tmp_name'][$i], $fileTmpPath);
                    if ($success) {
                        array_push($files, ['name' => $arrayFile['name'][$i], 'tmpdir' => $fileTmpPath]);
                    } else {
                        $error_file = "(!)添付ファイルを見直してください。\n";
                    }
                }
            }
        }
    }

    if ($error_requirements || $error_namefull || $error_email || $error_file || $error_phonenumber || $error_inquiry) {
        $mode = 'input';
    }

    if ($mode == 'submit') {
        session_destroy();

        mb_language("ja");
        mb_internal_encoding("UTF-8");

        $convertStr = requirementsConvert($requirements);

        // ヘッダー設定
        $header = '';
        $header .= "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
        $header .= "From: contact-form" . " \n";
        $header .= 'Bcc: kanri.web@acc-linkage.com';

        // $to = 'kyohei.fushimi@acc-linkage.com';
        $to = 'otoiawase@signature-clinic-ginza.com';
        $subject = 'お問合せがありました【signature-clinic-ginza.com】';

        $message =
            "--__BOUNDARY__\n"
            . "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n"
            . '****** お問い合わせフォームから送信しています。 ******' . "\n" . "\n"
            . '【ご用件】' . "\n" . $convertStr . "\n" . "\n"
            . '【お名前】' . "\n" . $namefull . "\n" . "\n"
            . '【メールアドレス】' . "\n" . $email . "\n" . "\n"
            . '【電話番号】' . "\n" . $phonenumber . "\n" . "\n"
            . '【お問い合わせ内容】' . "\n" . $inquiry . "\n" . "\n"
            . "--__BOUNDARY__\n";

        // ファイルを添付
        if (!empty($_POST["input_file"])) {
            for ($i = 0; $i < count($_POST["input_file"]); $i++) {
                if (!empty($_POST['input_file'][$i]['name'])) {
                    // ファイルパスのチェック
                    $readFile = file_get_contents($_POST['input_file'][$i]['tmpdir']);
                    if ($readFile == false) {
                        $mode = 'error';
                        $error = 'ファイル読み込みに失敗しました';
                        die('ファイル読み込みに失敗しました');
                    }

                    $filename = mb_encode_mimeheader($_POST['input_file'][$i]['name'], "UTF-8");
                    $message .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\n";
                    $message .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\n";
                    $message .= "Content-Transfer-Encoding: base64\n";
                    $message .= "\n";
                    $message .= chunk_split(base64_encode($readFile));
                    $message .= "--__BOUNDARY__\n";
                }
            }
        }

        // メール送信
        $result = mb_send_mail($to, $subject, $message, $header);

        if ($result) {
            if (!empty($_POST["input_file"])) {
                for ($i = 0; $i < count($_POST["input_file"]); $i++) {
                    if (!empty($_POST['input_file'][$i]['name'])) {
                        if (!unlink($_POST['input_file'][$i]['tmpdir'])) {
                            $mode = 'error';
                            $error = 'ファイル削除に失敗しました';
                            die('ファイル削除に失敗しました');
                        }
                    }
                }
            }

            header('Location: /thanks');
            exit;

        } else {
            $mode = 'error';
            $error = 'メール送信に失敗しました';
        }
    }
} else {
    $mode = 'input';
    $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
}

/**
 * ファイルアップロードエラーを判定する
 * @param type $upfile
 * @return string $error
 */
function chkFileError($errCode)
{
    $err = '';

	switch ($errCode) {
		// case UPLOAD_ERR_OK:
		// 	return $err;
		case UPLOAD_ERR_INI_SIZE:
			// $err = '(!)アップロードされたファイルは、php.ini の upload_max_filesize ディレクティブの値を超えています。';
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_INI_SIZE . ' ファイルサイズは30M未満にしてください。';
			break;
		case UPLOAD_ERR_FORM_SIZE:
			// $err = '(!)アップロードされたファイルは、HTML フォームで指定された MAX_FILE_SIZE を超えています。';
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_FORM_SIZE . ' ファイルサイズは30M未満にしてください。';
			break;
		case UPLOAD_ERR_PARTIAL:
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_PARTIAL . ' アップロードされたファイルは一部のみしかアップロードされていません。';
			break;
		case UPLOAD_ERR_NO_FILE:
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_NO_FILE . ' ファイルはアップロードされませんでした。';
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_NO_TMP_DIR . ' テンポラリフォルダがありません。';
			break;
		case UPLOAD_ERR_CANT_WRITE:
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_CANT_WRITE . ' ディスクへの書き込みに失敗しました。';
			break;
		case UPLOAD_ERR_EXTENSION:
			$err = '(!)ERR-CODE:' . UPLOAD_ERR_EXTENSION . ' PHP の拡張モジュールがファイルのアップロードを中止しました。';
			break;
	}

    return $err;
}

/**
 * 確認画面から戻ってきたときの選択状態をチェックする
 * 元々選択されていたら、Trueを返す
 */ 
function chkBackSelect($target, $requirements)
{
    return $requirements === $target ? true : false;
}

/**
 * 複数選択ドロップダウンリストのValue値から日本語名を返す
 */
function requirementsConvert($requirements)
{
    $convertStr = "";

    // value値を変換する 
    switch ($requirements) {
        case 'treatment':
            $convertStr .= '施術について';
            break;
        case 'booking':
            $convertStr .= '予約について';
            break;
        case 'recruit':
            $convertStr .= '採用について';
            break;
        case 'media':
            $convertStr .= '取材・メディアの方';
            break;
        case 'sales':
            $convertStr .= '営業の方';
            break;
        case 'other':
            $convertStr .= 'その他';
            break;
        default:
            $convertStr = 'error';
    }

    return $convertStr;
}

/**
 * 正しいメールアドレスであるかの判定
 * @param $email メールアドレス
 * @return bool
 */
function isEmail($email)
{
	//大抵のメールアドレスはこれで問題なし
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}

	//RFC違反のメールアドレスがあるdocomoとauだけ、救済チェックを行う
	if(strpos($email, '@docomo.ne.jp') !== false || strpos($email, '@ezweb.ne.jp') !== false) {
		$pattern = '/^([a-zA-Z])+([a-zA-Z0-9\._-])*@(docomo\.ne\.jp|ezweb\.ne\.jp)$/';
		if(preg_match($pattern, $email, $matches) === 1) {
			return true;
		}
	}

	return false;
}
?>
<?php get_header(); ?>
<main id="page-contact">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>お問い合わせ</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">CONTACT</div>
                <h1 class="jp">お問い合わせ</h1>
            </div>
        </div>
    </section>
    <section id="contact-input">
        <div class="main-wrapper">
            <?php if ($mode == 'input') : ?>
                <div id="input-form">
                    <div class="container">
                        <div class="sub-title">
                            <h2>お問い合わせフォーム</h2>
                            <p class="explanation">お問い合わせの際は、<br>下記の入力項目を入力後、<span class="wraptext">「確認する」を押してください。</span></p>
                        </div>
                        <form action="<?php bloginfo('url'); ?>/contact" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="mode" value="confirm">
                            <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    
                            <div class="box">
                                <div class="label">
                                    <p>ご用件</p>
                                    <span class="required">*</span>
                                </div>
                                <div class="input-txt">
                                    <select name="requirements">
                                        <option value="-">ご用件を選択してください</option>
                                        <option value="treatment" <?= chkBackSelect('treatment', $requirements) ? 'selected' : ''; ?>>施術について</option>
                                        <option value="booking" <?= chkBackSelect('booking', $requirements) ? 'selected' : ''; ?>>予約について</option>
                                        <option value="recruit" <?= chkBackSelect('recruit', $requirements) ? 'selected' : ''; ?>>採用について</option>
                                        <option value="media" <?= chkBackSelect('media', $requirements) ? 'selected' : ''; ?>>取材・メディアの方</option>
                                        <option value="sales" <?= chkBackSelect('sales', $requirements) ? 'selected' : ''; ?>>営業の方</option>
                                        <option value="other" <?= chkBackSelect('other', $requirements) ? 'selected' : ''; ?>>その他</option>
                                    </select>
                                    <?php if ($error_requirements) : ?>
                                        <div class="error">
                                            <?php echo $error_requirements; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <div class="box">
                                <div class="label">
                                    <p>お名前</p>
                                    <span class="required">*</span>
                                </div>
                                <div class="input-txt">
                                    <input type="text" name="namefull" placeholder="お名前" maxlength='15' value="<?= $namefull; ?>">
                                    <?php if ($error_namefull) : ?>
                                        <div class="error">
                                            <?php echo $error_namefull; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <div class="box">
                                <div class="label">
                                    <p>メールアドレス</p>
                                    <span class="required">*</span>
                                </div>
                                <div class="input-txt">
                                    <input type="text" name="email" placeholder="メールアドレス" maxlength='60' value="<?= $email; ?>">
                                    <?php if ($error_email) : ?>
                                        <div class="error">
                                            <?php echo $error_email; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <div class="box">
                                <div class="label">
                                    <p>電話番号</p>
                                    <span class="required">*</span>
                                </div>
                                <div class="input-txt">
                                    <input type="text" name="phonenumber" placeholder="電話番号（ハイフンなし）" maxlength="14" value="<?= $phonenumber; ?>">
                                    <?php if ($error_phonenumber) : ?>
                                        <div class="error">
                                            <?php echo $error_phonenumber; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <div class="box">
                                <div class="label">
                                    <p>お問い合わせ内容</p>
                                    <span class="required">*</span>
                                </div>
                                <div class="input-txt">
                                    <textarea name="inquiry" cols="50" rows="10" placeholder="お問い合わせ" maxlength="1000"><?= $inquiry; ?></textarea>
                                    <?php if ($error_inquiry) : ?>
                                        <div class="error">
                                            <?php echo $error_inquiry; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                            <div class="box">
                                <div class="label">
                                    <p>プライバシーポリシー</p>
                                </div>
                                <div class="input-txt">
                                    <div class="privacypolicy">
                                        <p class="pp-title">個人情報保護方針</p>
                                        <p>SIGNATURE CLINIC(以下、当院といいます)では個人情報保護法に関する法令を遵守し、お客様からご提供頂く個人情報を、細心の注意を払って取り扱っています。このプライバシーポリシーでは、当院におけるお客様の個人情報の取扱についてご説明いたしております。</p><br>

                                        <p class="pp-title">個人情報の定義</p>
                                        <p>個人情報は以下のように個人を特定できる情報のことをいいます。</p>
                                        <p>氏名、住所、電話番号、メールアドレス等</p>
                                        <p>その情報のみでは特定の個人を識別しえないが、他の情報と容易に照会することができ、それにより特定の個人を識別する事ができる情報</p><br>

                                        <p class="pp-title">個人情報取扱事業者の氏名又は名称</p>
                                        <p>SIGNATURE CLINIC</p><br>

                                        <p class="pp-title">個人情報の利用目的</p>
                                        <p>お客様から集めた個人情報は次の利用目的の他、以下の目的でも利用致します。</p>
                                        <p>・当院サービスの提供/運営のため</p>
                                        <p>・お客様からのお問い合わせに回答するため(本人確認を行うことを含む)</p><br>

                                        <p class="pp-title">個人情報の安全対策</p>
                                        <p>お客様の個人情報を安全に管理、運営するよう鋭意努力しており、個人情報への外部からの不正なアクセス、個人情報の紛失、毀損、破壊、改ざん、漏えい、社外への不正な流出などへの危険防止に対する合理的かつ適切な安全対策を行っております。</p>
                                        <p>また個人情報を取り扱う部門ごとに情報管理責任者を置き、個人情報の適切な管理を勤めるとともに情報セキュリティーに関する規定を設けて社員への周知徹底を実施しています。</p><br>

                                        <p class="pp-title">第三者への提供</p>
                                        <p>個人情報は、以下のいずれかに該当する場合を除いて、いかなる第三者にも開示、提供を致しません。</p>
                                        <p>・お客様の同意がある場合</p>
                                        <p>・業務を円滑に進める等の理由で外部業者の取扱いを委託する場合(この場合には、十分な保護水準を備えている委託先を選定し、漏えいや再提供を防止する為に契約により義務付ける等の方法により、適切な管理を実施します。)</p>
                                        <p>・法令等により開示を要求された場合</p>
                                        <p>・人の生命、身体又は財産の保護のために必要であって、お客様の同意を求めることが困難な場合</p>
                                        <p>・国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、お客様の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがある場合</p><br>

                                        <p class="pp-title">個人情報開示の手続き</p>
                                        <p>(1)開示請求が出来る方・ご本人・法定代理人・任意代理人(開示請求について委託された代理人)</p>
                                        <p>(2)ご本人が請求される場合の証明書・運転免許証・パスポート・健康保険証・年金手帳・外国人証明書(本人以外が請求される場合の証明書)開示請求されるご本人の本人確認書類・代理人の本人確認書類・代理権を証明する書類・任意代理人例)開示請求をされるご本人が署名され実印が押された印鑑証明添付の委任状など・法定代理人例)戸籍謄本、住民票など</p>
                                        <p>(3)保有個人データの開示手続きは、下記当院情報管理部が担当致します。上記開示手続きには金5,000円の手数料が発生致しますので予めご了承ください。</p><br>

                                        <p class="pp-title">情報の訂正等</p>
                                        <p>前項の開示手続きにより、当院が保有する保有個人データの内容に事実と異なる記載がある場合には、訂正、変更、追加の手続きをとらせて頂きます。</p><br>

                                        <p class="pp-title">個人情報の利用停止等</p>
                                        <p>当院が公示した利用目的の範囲外でお客様の個人情報を利用した場合、当院がお客様の個人情報を不正な手段で取得し利用している場合、当院が公示している者以外の第三者にお客様の個人情報を提供した場合にはお客様から求めにより利用停止、消去の手続きをとらせて頂きます。</p>
                                        <p>当院が保有する保有個人データの開示請求、訂正、利用停止等を希望される方は下記情報管理部宛てにお問い合わせください。また開示の手続き、個人情報の訂正等の実施、不実施については、御請求のあったお客様に対して遅滞なくご連絡いたします。</p>
                                        <p>なお不実施の場合は、その旨を説明するように努めます。</p><br>

                                        <p class="pp-title">苦情の処理</p>
                                        <p>当院の個人情報取扱いの苦情処理につきましては、下記部門が対応させて頂きます。受付時間は当院営業日の10時半から18時までとなります。</p>
                                        <p>窓口：SIGNATURE CLINIC(03-6263-9086)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box attachment-file">
                                <div class="label">
                                    <p>添付ファイル <span class="supplement">(WORD / EXCEL / PDFのみ)</span></p>
                                </div>
                                <div class="input-txt">
                                    <?php for ($i = 0; $i < 2; $i++) : ?>
                                        <input type="hidden" name="MAX_FILE_SIZE" value="31457280" />
                                        <input type="file" name="input_file[]" value="">
                                    <?php endfor; ?>
                                    <?php if ($error_file) : ?>
                                        <div class="error">
                                            <?php echo $error_file; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="box chk-area">
                                <div class="input-txt">
                                    <input type="hidden" name="chkconsent">
                                    <input type="checkbox" id="consent" name="chkconsent" value="1" <?php if ($chkconsent == "1") { echo 'checked'; } ?>>
                                    <label for="consent">プライバシーポリシーに<span class="wraptext">同意する</span></label>
                                    <?php if ($error_consent) : ?>
                                    <div class="error">
                                        <?php echo $error_consent; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="btn-region">
                                <button type="submit" id="btn-confirm">確認する</button>
                            </div>
                        </form>
                    </div>
                </div>
    
            <?php elseif ($mode == 'confirm') : ?>
                <div id="confirm-form">
                    <div class="container">
                        <div class="sub-title">
                            <h2>確認フォーム</h2>
                            <p class="explanation">下記の内容でよろしければ、<span class="wraptext">「送信」ボタンを押してください。</span></p>
                        </div>
                        <div class="confirm-tbl">
                            <div class="t-row">
                                <div class="c-head">ご用件</div>
                                <div class="c-data"><?= requirementsConvert($requirements); ?></div>
                            </div>
                            <div class="t-row">
                                <div class="c-head">お名前</div>
                                <div class="c-data"><?= $namefull; ?></div>
                            </div>
                            <div class="t-row">
                                <div class="c-head">メール<span class="wraptext">アドレス</span></div>
                                <div class="c-data"><?= $email; ?></div>
                            </div>
                            <div class="t-row">
                                <div class="c-head">電話番号</div>
                                <div class="c-data"><?= $phonenumber; ?></div>
                            </div>
                            <div class="t-row">
                                <div class="c-head">お問い合わせ内容</div>
                                <div class="c-data"><?= nl2br($inquiry); ?></div>
                            </div>
                            <div class="t-row">
                                <div class="c-head">添付ファイル</div>
                                <div class="c-data">
                                    <?php 
                                        for ($i = 0; $i < count($_FILES["input_file"]["name"]); $i++) {
                                            if (empty(!$_FILES['input_file']['name'][$i])) {
                                                echo '<p>' . $_FILES['input_file']['name'][$i] . '</p>';
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
    
                        <div class="btn-form">
                            <form action="<?php bloginfo('url'); ?>/contact" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" value="submit">
                                <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
                                <input type="hidden" name="requirements" value="<?= $requirements; ?>">
                                <input type="hidden" name="namefull" value="<?= $namefull; ?>">
                                <input type="hidden" name="email" value="<?= $email; ?>">
                                <input type="hidden" name="phonenumber" value="<?= $phonenumber; ?>">
                                <input type="hidden" name="chkconsent" value="<?= $chkconsent; ?>">
                                <input type="hidden" name="inquiry" value="<?= $inquiry; ?>">
                                <?php
                                foreach ($files as $number => $file) {
                                    foreach ($file as $num => $value) {
                                        echo '<input type="hidden" name="input_file[' . $number . '][' . $num . ']" value="' . $value . '">';
                                    }
                                }
                                ?>
                                <div class="btn-wrap">
                                    <button class="btn-send" type="submit">送信する</button>
                                </div>
                            </form>
    
                            <form action="<?php bloginfo('url'); ?>/contact" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="mode" value="input">
                                <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
                                <input type="hidden" name="requirements" value="<?= $requirements; ?>">
                                <input type="hidden" name="namefull" value="<?= $namefull; ?>">
                                <input type="hidden" name="email" value="<?= $email; ?>">
                                <input type="hidden" name="phonenumber" value="<?= $phonenumber; ?>">
                                <input type="hidden" name="inquiry" value="<?= $inquiry; ?>">
                                <input type="hidden" name="chkconsent" value="<?= $chkconsent; ?>">
                                <?php
                                foreach ($files as $number => $file) {
                                    foreach ($file as $num => $value) {
                                        echo '<input type="hidden" name="input_file[' . $number . '][' . $num . ']" value="' . $value . '">';
                                    }
                                }
                                ?>
                                <div class="btn-wrap">
                                    <button class="btn-back" type="submit">戻る</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
    
            <?php else : ?>
    
                <p>エラーが発生しました。</p>
                <?php if ($error) : ?><p><em><?= $error; ?></em></p><?php endif; ?>
    
            <?php endif; ?>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>