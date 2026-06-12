<?php get_header(); ?>
<main id="page-clinic-info">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>アクセス・クリニック情報</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">CLINIC INFO</div>
                <h1 class="jp">アクセス・クリニック情報</h1>
            </div>
        </div>
    </section>
    <section id="clinic-description">
        <div class="container">
            <div class="c-tbl">
                <div class="c-row">
                    <div class="c-head">クリニック名</div>
                    <div class="c-data">SIGNATURE CLINIC 銀座</div>
                </div>
                <div class="c-row">
                    <div class="c-head">所在地</div>
                    <div class="c-data">東京都中央区銀座6-6-5 HULIC &New GINZA NAMIKI 6 10F</div>
                </div>
                <div class="c-row">
                    <div class="c-head">TEL</div>
                    <div class="c-data">03-6263-9086</div>
                </div>
                <div class="c-row">
                    <div class="c-head">FAX</div>
                    <div class="c-data">03-6263-9087</div>
                </div>
                <div class="c-row">
                    <div class="c-head">診療時間</div>
                    <div class="c-data">11:00〜19:30(日曜 11:00〜18:00)</div>
                </div>
                <div class="c-row">
                    <div class="c-head">WEBサイト</div>
                    <div class="c-data">https://signature-clinic-ginza.com</div>
                </div>
            </div>
        </div>
    </section>
    <section id="clinic-access">
        <div class="container">
            <div class="title">
                <h2>アクセス</h2>
            </div>
            <div class="contents">
                <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/img_clinicinfo_access.webp<?= strTimeStamp(); ?>" alt="アクセス" loading="lazy"></figure>
            </div>
        </div>
    </section>
    <section id="clinic-map">
        <div class="container">
            <div class="title">
                <h2>マップ</h2>
            </div>
            <div class="contents">
                <a href="https://maps.app.goo.gl/Eon4BUdStk3xTem97" class="address" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot"></i><span>東京都中央区銀座6-6-5 HULIC &New GINZA NAMIKI 6 10F</span></a>
                <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/img_clinicinfo_map.webp<?= strTimeStamp(); ?>" alt="マップ" loading="lazy"></figure>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>