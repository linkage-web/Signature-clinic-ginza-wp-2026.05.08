<?php 
/**
 * Template Name: 悩み − 目元
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>目元</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 目元</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description" class="is-clm">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>目元</h2>
                </div>
                <div class="txt">
                    <p>二重やクマといった目元のお悩みにも様々な治療があります。</p>
                    <p>二重は、メスを使用して切開を行う切開法と、糸をまぶたに埋め込む埋没法という方法があります。</p>
                    <p>また、クマに関しては、根本的に取り除きたい人、どうしてもメスを入れたくない、すぐに効果を得たい、ダウンタイムなど仕事を休めないといった事情のある人向けの治療もあります。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_double-eyelid.webp<?= strTimeStamp(); ?>" alt="二重に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/"><span>二重 埋没法</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/"><span>二重 切開法</span></a>
                <a href="<?php bloginfo("url"); ?>/menu/lower-eyelid-dasshi/"><span>下眼瞼脱脂術</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/eyebrow-lift/"><span>眉下切開</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/megashira-sekkai/"><span>目頭切開</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/mejiri-sekkai/"><span>目尻切開</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/drooping-upper-eyelid/"><span>眼瞼下垂</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/hyaluronic/"><span>ヒアルロン酸</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/botox/"><span>ボトックス</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>