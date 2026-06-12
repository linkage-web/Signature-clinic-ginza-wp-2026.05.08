<?php 
/**
 * Template Name: 悩み − 口元
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>口元</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 口元</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description" class="is-clm">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>口元</h2>
                </div>
                <div class="txt">
                    <p>加齢とともに鼻下の距離は長く間延びした口元に、治療をすることで顔が引き締まり若々しい印象になります。</p>
                    <p>患者様それぞれの今のご状態に合わせた提案をさせて頂きます。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_lip-lift.webp<?= strTimeStamp(); ?>" alt="二重に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/lip-lift/"><span>人中短縮(リップリフト)</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>