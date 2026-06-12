<?php 
/**
 * Template Name: 悩み − たるみ
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>たるみ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み −  たるみ</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>たるみ</h2>
                </div>
                <div class="txt">
                    <p>たるみの原因は皮膚の表面が加齢で緩むだけではなく、それを支えている深層の組織が変化することもにも大きく関係しています。</p>
                    <p>当院では骨、筋肉、脂肪などどの層に変化がおきているのかを見極め、効率的に症状を改善させることが大切であると考えます。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_tarumi.webp<?= strTimeStamp(); ?>" alt="たるみに関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/hyaluronic"><span>ヒアルロン酸リフトアップ<br>（Vシェイプ）</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/thread-lift/"><span>糸リフト</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/hifu/"><span>HIFU</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/idebae/"><span>イデバエ<span class="wraptext">（メソセラピー）</span></span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>