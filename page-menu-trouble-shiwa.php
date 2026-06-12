<?php 
/**
 * Template Name: 悩み − シワ
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>シワ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − シワ</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>シワ</h2>
                </div>
                <div class="txt">
                    <p>しわの種類は表情筋の動きによるものや脂肪の減少、乾燥、老化など皮膚の弾力が失われ生じるものなどさまざまです。またそれらが複合的に作用している場合も多いため、場所やシワの状態により最適な治療をご提案いたします。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_shiwa.webp<?= strTimeStamp(); ?>" alt="シワに関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-target">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>乾燥によりカサカサする、ちりめんジワが気になる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>加齢とともに深く刻まれたシワが戻らない</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>目尻の笑いジワや眉間のシワなど、表情ジワが気になる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>ボトックス注入により表情がこわばってしまった</span></li>
            </ul>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/botox/"><span>ボトックス</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/upgrade/"><span>アップグレード<span class="wraptext">（メソセラピー）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/redensity/"><span>リデンシティ<span class="wraptext">（メソセラピー）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/profhilo/"><span>プロファイロ</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/phototherapy/"><span>光治療（IPL）</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/"><span>ドクターズコスメ</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>