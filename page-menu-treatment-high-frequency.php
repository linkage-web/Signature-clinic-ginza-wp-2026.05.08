<?php 
/**
 * Template Name: 施術内容 - 高周波治療
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>高周波治療</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>高周波治療</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_skin.webp<?= strTimeStamp(); ?>" alt="高周波治療"  loading="lazy">
            </div>
            <div class="title">
                <h2>高周波治療に関して</h2>
            </div>
            <div class="txt">
                <p>高周波治療①高周波治療①高周波治療①高周波治療①</p>
                <p>高周波治療①高周波治療①高周波治療①高周波治療①</p>
                <p>高周波治療①高周波治療①高周波治療①高周波治療①</p>
                <p>高周波治療①高周波治療①高周波治療①高周波治療①</p>
            </div>
        </div>
    </section>
    <section id="treatment-description2">
        <div class="container">
            <div class="r-area">
                <div class="sub-title">
                    <h3>当院では...</h3>
                </div>
                <div class="context">
                    <p>高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②</p>
                    <p>高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②高周波治療②</p>
                </div>
            </div>
            <div class="l-area">
                <div class="sub-title">
                    <h3>治療期間と持続期間</h3>
                </div>
                <div class="context">
                    <p>高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③</p>
                    <p>高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③高周波治療③</p>
                </div>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>高周波治療④高周波治療④高周波治療④高周波治療④</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>高周波治療④高周波治療④高周波治療④高周波治療④</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>高周波治療④高周波治療④高周波治療④高周波治療④</span></li>
            </ul>
        </div>
    </section>
    <section id="treatment-price" class="bg-w">
        <div class="container">
            <div class="title">
                <h2>料金表</h2>
            </div>
            <div class="contents">
                <div class="price-tbl pattern1">
                    <div class="p-ttl">高周波治療⑥高周波治療⑥</div>
                    <div class="p-row">
                        <div class="p-head">高周波治療⑥</div>
                        <div class="p-data">値段が入ります。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="treatment-flow">
        <div class="container">
            <div class="title">
                <h2>施術完了までの流れ</h2>
            </div>
            <div class="contents">
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">01</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_01.webp" alt="受付/カウンセリング" loading="lazy">
                    <h3 class="flow-title">受付 / カウンセリング</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">02</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_02.webp" alt="診察" loading="lazy">
                    <h3 class="flow-title">診察</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">03</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_03.webp" alt="処置" loading="lazy">
                    <h3 class="flow-title">処置</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">04</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_04.webp" alt="お会計/予約/ケア説明" loading="lazy">
                    <h3 class="flow-title">お会計/予約/ケア説明</h3>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>