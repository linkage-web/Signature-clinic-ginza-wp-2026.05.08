<?php 
/**
 * Template Name: 悩み − 二重
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>二重</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 二重</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description" class="is-clm">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>二重</h2>
                </div>
                <div class="txt">
                    <p>二重整形とは、メスを使用して切開を行う切開法と、糸をまぶたに埋め込む埋没法という方法があります。</p>
                    <p>【埋没法】<br>まぶたを糸でとめるだけでメスを使用しない二重手術です。埋没法では、目を開ける時に動く筋肉と皮膚を、糸でつなげます。手術時間は、両目合わせて15分〜20分程度という短時間で、痛みも比較的少なく、負担が軽い手術法です。</p>
                    <p>【切開法】<br>まぶたをメスで切開して二重まぶたを作る手術法です。脂肪や筋肉などを調整しての二重の構造の再構築をし、半永久的な二重を作るというのが基本的な目的です。まぶたはとても腫れやすく、内出血が出やすい部位です。強い腫れや内出血は術後2週間程度でかなり改善しますが、完全に消えるまでには通常2〜3ヶ月程度の期間を要します。 ダウンタイムは埋没法と比べると長いですが、時間の経過とともになじんでいきます。</p>
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
                <a href="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/"><span>埋没法</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/"><span>切開法</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>