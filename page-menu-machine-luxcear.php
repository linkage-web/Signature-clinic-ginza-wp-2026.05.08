<?php 
/**
 * Template Name: 使用機器 − ルクセア
 */
?>
<?php get_header(); ?>
<main id="menu-machine">
    <section id="page-mainvisual-machine">
        <h1>ルクセア</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − ルクセア</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_luxcear.webp<?= strTimeStamp(); ?>" alt="ルクセア" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>ルクセアに関して</h2>
                </div>
                <div class="txt">
                    <p>ルクセアは、さまざまな肌トラブルの改善に有効な最新の光治療器です。</p>
                    <p>これ以上薄くならないとあきらめていたシミやくすみに効果的です。さらに、深い部分にあるシミ予備軍さえも改善します。コラーゲン造成作用もあり、みずみずしい肌を蘇らせることができます。また、フォトシルクプラスの光は水分に吸収される波長部分をカットしてあるので、火傷の心配もなく、安全性が高いのも特徴です。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <section id="machine-available-treatments">
            <div class="container">
                <div class="sub-title">
                    <h3>対応可能な施術</h3>
                </div>
                <div class="contents">
                    <div class="treatment">光治療</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">赤ら顔</div>
                    <div class="trouble">しみ</div>
                    <div class="trouble">そばかす</div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>