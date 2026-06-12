<?php 
/**
 * Template Name: 悩み − 輪郭
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>輪郭</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 輪郭</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>輪郭</h2>
                </div>
                <div class="txt">
                    <p>美の基準といわれる｢黄金比｣、｢ハートシェイプ｣、｢Eライン｣、｢オージーカーヴ｣・・・これらはみな輪郭と大きく関係したキーワードです。</p>
                    <p>当院では自然で美しいお顔づくりのためスタッフ一人一人がこのキーワードを評価の基準としております。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_rinkaku.webp<?= strTimeStamp(); ?>" alt="輪郭に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/hyaluronic/"><span>ヒアルロン酸</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/thread-lift/"><span>糸リフト</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/hifu/"><span>HIFU</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/botox/"><span>ボトックス</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/buccalfat/"><span>バッカルファット</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>