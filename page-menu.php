<?php get_header(); ?>
<main id="page-menu">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>MENU</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">MENU</div>
                <h1 class="jp">施術内容</h1>
            </div>
        </div>
    </section>
    <section id="page-menu-trouble">
        <div class="container">
            <div class="sub-title">
                <h2>「悩み」から探す</h2>
            </div>
            <div id="menu-skin" class="page-menu-trouble-each">
                <div class="menu-ttl">
                    <h3 class="jp">お肌の悩み</h3>
                    <div class="en">SKIN</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_menu_01.webp<?= strTimeStamp(); ?>" alt="悩みから探す - お肌の悩み" loading="lazy">
                </div>
                <div class="contents">
                    <a href="<?php bloginfo('url'); ?>/menu/skin/">しみ・そばかす・肝斑<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/tarumi/">たるみ<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/acne/">ニキビ<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/pore/">ニキビ痕・毛穴<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/mole/">ホクロ<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/hair-removal/">脱毛<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="menu-face" class="page-menu-trouble-each">
                <div class="menu-ttl">
                    <h3 class="jp">お顔の悩み</h3>
                    <div class="en">FACE</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_menu_02.webp<?= strTimeStamp(); ?>" alt="悩みから探す - お顔の悩み" loading="lazy">
                </div>
                <div class="contents">
                    <a href="<?php bloginfo('url'); ?>/menu/rinkaku/">輪郭<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/shiwa/">シワ<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/ruddy-face/">赤ら顔<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/eyes">目元<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/mouth">口元<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="menu-body" class="page-menu-trouble-each">
                <div class="menu-ttl">
                    <h3 class="jp">お身体の悩み</h3>
                    <div class="en">BODY</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_menu_03.webp<?= strTimeStamp(); ?>" alt="悩みから探す - お身体の悩み" loading="lazy">
                </div>
                <div class="contents">
                    <a href="<?php bloginfo('url'); ?>/menu/bodymake/">ダイエット・ボディメイク<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="#">インナービューティー<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="<?php bloginfo('url'); ?>/menu/underarm-sweating">ワキ汗<i class="fa-solid fa-chevron-right"></i></a>
					<a href="<?php bloginfo('url'); ?>/menu/yonirf/">フェムケア<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="page-menu-machine">
        <div class="container">
            <div class="sub-title">
                <h2>「機器」から探す</h2>
            </div>
            <div class="page-menu-machine-each">
                <div class="menu-ttl">
                    <h3 class="jp">機器</h3>
                    <div class="en">MACHINE</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_menu_04.webp<?= strTimeStamp(); ?>" alt="機器から探す" loading="lazy">
                </div>
                <div class="contents">
                    <select name="select-machine" id="select-machine" onChange="location.href=value;">
                        <option value="">機器を選択</option>
						<option value="<?php bloginfo('url'); ?>/menu/yonirf/">ヨニRF</option>
                        <option value="<?php bloginfo('url'); ?>/menu/ultracel-zi/">ウルトラセル：Zi</option>
                        <option value="<?php bloginfo('url'); ?>/menu/luxcear/">ルクセア</option>
                        <option value="<?php bloginfo('url'); ?>/menu/enlighten/">ピコレーザー（エンライトンSR）</option>
                        <option value="<?php bloginfo('url'); ?>/menu/splendor-x/">スプレンダーX</option>
                        <option value="<?php bloginfo('url'); ?>/menu/force-cutter/">フォースカッター</option>
                        <option value="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン4</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <section id="page-menu-treatment">
        <div class="container">
            <div class="sub-title">
                <h2>「施術内容」から探す</h2>
            </div>
            <div class="page-menu-treatment-each">
                <div class="menu-ttl">
                    <h3 class="jp">施術内容</h3>
                    <div class="en">TREATMENT</div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_menu_05.webp<?= strTimeStamp(); ?>" alt="施術内容から探す" loading="lazy">
                </div>
                <div class="contents">
                    <select name="select-treatment" id="select-treatment" onChange="location.href=value;">
                        <option value="">施術内容を選択</option>
                        <option value="<?php bloginfo('url'); ?>/menu/hyaluronic">ヒアルロン酸リフトアップ(Vシェイプ)</option>
                        <option value="<?php bloginfo('url'); ?>/menu/hyaluronidase/">ヒアルロニダーゼ</option>
                        <option value="<?php bloginfo('url'); ?>/menu/thread-lift/">スレッドリフト</option>
                        <option value="<?php bloginfo('url'); ?>/menu/hifu/">ハイフ</option>
                        <option value="<?php bloginfo('url'); ?>/menu/botox/">ボトックス</option>
                        <option value="<?php bloginfo('url'); ?>/menu/pico-laser">ピコレーザー</option>
                        <option value="<?php bloginfo('url'); ?>/menu/idebae/">イデバエ(肌育注射)</option>
                        <option value="<?php bloginfo('url'); ?>/menu/whitein/">ホワイトイン(肌育注射)</option>
                        <!-- <option value="<?php bloginfo('url'); ?>/menu/redensity/">リデンシティ(肌育注射)</option> -->
                        <option value="<?php bloginfo('url'); ?>/menu/upgrade/">アップグレード(肌育注射)</option>
                        <option value="<?php bloginfo('url'); ?>/menu/phototherapy/">光治療</option>
                        <option value="<?php bloginfo('url'); ?>/menu/peeling/">ピーリング</option>
                        <option value="<?php bloginfo('url'); ?>/menu/internal-medicine/">内服薬</option>
                        <option value="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/">ドクターズコスメ</option>
                        <option value="<?php bloginfo('url'); ?>/menu/laser-hairremoval/">レーザー脱毛</option>
                        <option value="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン</option>
                        <option value="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/">二重 埋没法</option>
                        <option value="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/">二重 切開法</option>
                        <option value="<?php bloginfo("url"); ?>/menu/lower-eyelid-dasshi/">下眼瞼脱脂</option>
                        <option value="<?php bloginfo('url'); ?>/menu/bodymake/">ボディメイク</option>
                        <option value="<?php bloginfo('url'); ?>/menu/artmake/">アートメイク</option>
                        <option value="<?php bloginfo('url'); ?>/menu/drip-injection/">点滴・注射</option>
                        <option value="<?php bloginfo('url'); ?>/menu/profhilo/">プロファイロ</option>
                        <option value="<?php bloginfo('url'); ?>/menu/ion-introduction/">イオン導入</option>
                        <option value="<?php bloginfo('url'); ?>/menu/hydroquinone/">ハイドロキノン</option>
                        <!-- <option value="<?php bloginfo('url'); ?>/menu/glp1/">GLP1</option> -->
                        <option value="<?php bloginfo('url'); ?>/menu/lip-lift/">人中短縮(リップリフト)</option>
                        <option value="<?php bloginfo('url'); ?>/menu/buccalfat/">バッカルファット除去</option>
                        <option value="<?php bloginfo('url'); ?>/menu/eyebrow-lift/">眉下切開</option>
                        <option value="<?php bloginfo('url'); ?>/menu/drooping-upper-eyelid/">眼瞼下垂</option>
                        <option value="<?php bloginfo('url'); ?>/menu/megashira-sekkai/">目頭切開法</option>
                        <option value="<?php bloginfo('url'); ?>/menu/mejiri-sekkai/">目尻切開法</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>