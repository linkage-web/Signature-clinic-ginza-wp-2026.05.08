<?php
// ID14を含むそれ以下の子ページと孫ページすべてに表示する条件分岐
$current_page_id = get_the_ID();
$parent_id = wp_get_post_parent_id($current_page_id);
$grandparent_id = wp_get_post_parent_id($parent_id);

// ID14のページ、またはID14の子ページ、またはID14の孫ページの場合に表示
$should_show = false;

if ($current_page_id == 14) {
    // ID14のページ自体
    $should_show = true;
} elseif ($parent_id == 14) {
    // ID14の子ページ
    $should_show = true;
} elseif ($grandparent_id == 14) {
    // ID14の孫ページ
    $should_show = true;
}

if ($should_show) :
?>
<section class="c-writer">
    <div class="c-writer-inner">
    <h2 class="c-writer-title">この記事を監修したドクター</h2>
    <div class="c-writer-wrapper">
        <figure class="c-writer-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_page_aboutus_hospital_director.webp<?= strTimeStamp(); ?>" alt="院長 鈴木"></figure>
        <div class="c-writer-textbox">
        <p class="c-writer-clinic-name">SIGNATURE CLINIC 銀座</p>
        <p class="c-writer-name">院長 鈴木</p>
        <p class="c-writer-text">
            <span>経歴</span>
            帝京大学 医学部 卒業<br>
            国立病院機構埼玉病院 外科研修医<br>
            帝京大学板橋病院 外科入局<br>
            都内 美容クリニック院長歴任<br>
            銀座小町クリニック 勤務<br>
            SIGNATURE CLINIC銀座 開業 院長就任
        </p>
        <div class="c-writer-link"><a href="<?php bloginfo('url'); ?>/aboutus/#hospital-director">詳しい院長紹介はこちら</a></div>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>

<section id="parts-contact">
    <div class="container">
        <div class="title">
            <div class="en">CONTACT</div>
            <h2 class="jp">お問い合わせ</h2>
        </div>
        <div class="contents">
            <a href="tel:0362639086" class="tel-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_tel_icon_w.webp<?= strTimeStamp(); ?>" alt="tel icon" loading="lazy">
                <div class="inner">
                    <div class="tel-no">03-6263-9086</div>
                    <div class="addinfo">受付時間 11:00〜19:30</div>
                </div>
            </a>
            <div class="wrap">
                <a href="https://connect.kireipass.jp/clinics/signature-clinic-ginza/menus?kc_source=HP" class="booking-area" target="_blank" rel="noopener noreferrer">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_calendar_icon2.webp<?= strTimeStamp(); ?>" alt="calender icon" loading="lazy">
                    <div>WEB予約</div>
                </a>
                <a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer" class="line-area">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_mid-under_line_icon.webp<?= strTimeStamp(); ?>" alt="line icon">
                    <div>LINE予約</div>
                </a>
            </div>
        </div>
    </div>
</section>