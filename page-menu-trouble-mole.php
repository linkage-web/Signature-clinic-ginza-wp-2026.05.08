<?php 
/**
 * Template Name: 悩み − ホクロ
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>ホクロ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − ホクロ</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>ホクロ</h2>
                </div>
                <div class="txt">
                    <p>ほくろとは、母斑細胞(ぼはんさいぼう)という細胞が増殖することで生じる良性の腫瘍です。</p>
                    <p>口元、目元にあるほくろがチャームポイントと表現される事があるように、小さいものでも意外と人の印象に残りやすく位置によってはマイナスイメージに繋がることもあります。</p>
                    <p>こうした気になるほくろやいぼを除去する事で、肌や表情が明るく見えるようになったり、メイクをより楽しめるようになったり、若々しい印象なったりといったメリットがあります。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_mole.webp<?= strTimeStamp(); ?>" alt="ホクロに関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="#"><span>切開（手術）</span></a>
                <a href="#"><span>電気メス</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>