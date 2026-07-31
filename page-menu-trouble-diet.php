<?php 
/**
 * Template Name: 悩み − ダイエット・ボディメイク
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>ダイエット・ボディメイク</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − ダイエット・ボディメイク</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>ダイエット・ボディメイク</h2>
                </div>
                <div class="txt">
                    <p>ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①</p>
                    <p>ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①ダイエット・ボディメイク①</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_skin.webp<?= strTimeStamp(); ?>" alt="ダイエット・ボディメイク" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/bodymake/"><span>ボディメイク</span></a>
                <!-- <a href="<?php bloginfo('url'); ?>/menu/glp1/"><span>GLP1</span></a> -->
                <a href="<?php bloginfo('url'); ?>/menu/hifu/"><span>ハイフ『ウルトラセル:Zi』</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/internal-medicine/"><span>内服薬</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>