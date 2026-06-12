<?php 
/**
 * Template Name: 悩み − 赤ら顔
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>赤ら顔</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 赤ら顔</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>赤ら顔</h2>
                </div>
                <div class="txt">
                    <p>肌が赤くなるのは「炎症によって肌が赤みを帯びている」もしくは「毛細血管が拡張して、血液が透けて見えている」などの理由が考えられます。</p>
                    <ul>
                        <li>・ニキビ痕</li>
                        <li>・慢性的な肌荒れ</li>
                        <li>・肌への刺激による毛細血管の拡張</li>
                        <li>・肌のバリア機能の低下</li>
                        <li>・生まれつきの皮膚の薄さ  など</li>
                    </ul>
                    <p>一般的に「赤ら顔」と呼ばれる状態は、毛細血管の拡張が原因です。当院では血管やニキビの赤みを吸収分解することで赤ら顔の改善が期待できる光治療をおすすめします。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_ruddyface.webp<?= strTimeStamp(); ?>" alt="赤ら顔に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/phototherapy/"><span>光治療</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>