<div id="mid-under-menu">
    <div class="container">
        <a href="tel:0362639086" class="tel-area">
            <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/img_mid-under_tel_icon.webp<?= strTimeStamp(); ?>" alt="電話アイコン"></figure>
            <div class="inner">
                <div class="tel-no">03-6263-9086</div>
                <div class="addinfo">受付 11:00〜19:30</div>
            </div>
        </a>
        <a href="https://connect.kireipass.jp/clinics/signature-clinic-ginza/menus?kc_source=HP" class="booking-area" target="_blank" rel="noopener noreferrer">
            <p class="speech-bubble">24時間受付</p>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_mid-under_calendar_booking_icon.webp<?= strTimeStamp(); ?>" alt="calendar icon" loading="lazy">
            <div>WEB予約</div>
        </a>
        <a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer" class="line-area">
            <!-- <p class="speech-bubble">クーポン配信中</p> -->
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_mid-under_line_icon.webp<?= strTimeStamp(); ?>" alt="line icon">
            <div>LINE予約</div>
        </a>
        <div class="under-menu" id="under-menu">
            <div class="under-menu-icon">
                <span></span>
            </div>
            <div class="under-menu-lbl">menu</div>
        </div>
        <div class="under-menu-body" id="under-menu-body">
            <div class="inner">
                <?php 
                    $post_type = get_post_type();
                ?>
                <ul class="menu-grp">
                    <li <?= is_front_page() ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                    <li <?= is_page('aboutus') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/aboutus/">当院について</a></li>
                    <li <?= (is_archive() || is_single()) && $post_type === 'post' ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
                    <li <?= is_post_type_archive('case') || is_singular('case') || is_tax('cat_treatment') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/case/">症例写真</a></li>
                    <li <?= is_page('menu') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/menu/">施術メニュー</a></li>
                    <li <?= is_page('price') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/price/">料金表</a></li>
                    <li <?= is_post_type_archive('qa') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/qa/">Q&A</a></li>
                    <li <?= is_page('recruit') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a></li>
                    <li <?= is_page('clinic-info') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/clinic-info/">アクセス・クリニック情報</a></li>
                    <li <?= is_page('minors') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/minors/">未成年の方へ</a></li>
                    <li <?= is_page('cancel-policy') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/cancel-policy/">キャンセルポリシー</a></li>
                </ul>
                <ul class="sns-grp">
                    <li><a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_line_icon.webp<?= strTimeStamp(); ?>" alt="line icon" loading="lazy"></a></li>
                    <li><a href="https://www.instagram.com/signatureclinicginza/?utm_source=qr"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_insta_icon.webp<?= strTimeStamp(); ?>" alt="instagram icon" loading="lazy"></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_mail_icon.webp<?= strTimeStamp(); ?>" alt="mail icon" loading="lazy"></a></li>
                    <li class="hpb-icon"><a href="https://clinic.beauty.hotpepper.jp/H000693798/?cstt=17" target="_blank" rel="noopener noreferrer"><img class="hpb-icon" src="<?php bloginfo('template_url'); ?>/assets/img/img_hot_pepper_beauty_icon.webp<?= strTimeStamp(); ?>" alt="hot pepper beauty icon" loading="lazy"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>