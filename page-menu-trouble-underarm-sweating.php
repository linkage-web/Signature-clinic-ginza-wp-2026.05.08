<?php 
/**
 * Template Name: 悩み − ワキ汗
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>ワキ汗</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − ワキ汗</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>ワキ汗</h2>
                </div>
                <div class="txt">
                    <p>夏場の気温の上昇や精神的なストレスによるワキ汗を大幅に減らすことができる治療です。ブラウスの汗染みや臭いの防止にも効果的です。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_underarm_sweating.webp<?= strTimeStamp(); ?>" alt="ワキ汗に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/botox/"><span>ボトックス</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>