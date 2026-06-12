<?php 
/**
 * Template Name: 悩み − インナービューティー
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>インナービューティー</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − インナービューティー</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>インナービューティー</h2>
                </div>
                <div class="txt">
                    <p>インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①</p>
                    <p>インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①インナービューティー①</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_skin.webp<?= strTimeStamp(); ?>" alt="インナービューティー" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="#"><span>点滴</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>