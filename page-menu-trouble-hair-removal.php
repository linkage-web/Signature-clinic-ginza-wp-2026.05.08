<?php 
/**
 * Template Name: 悩み − 脱毛
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>脱毛</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − 脱毛</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>脱毛</h2>
                </div>
                <div class="txt">
                    <p>薬剤やシェーバー、毛抜きなどを使ったムダ毛処理後の肌はバリア機能が障害され、刺激を受けたり、細菌や異物が侵入したりしやすい状態にあります。</p>
                    <p>その状態で起こりやすい肌荒れとしては、肌の炎症・乾燥のほか、傷ついた毛穴から細菌が侵入することによる毛嚢炎、脱毛剤やシェーバーなどの物理的刺激により表皮内のメラニン細胞が活性化されて起こる色素沈着などが挙げられます。</p>
                    <p>また、毛抜きや脱毛剤で毛を抜くと、皮膚やかさぶたが毛穴を覆い、毛が皮膚の中で伸びてしまう埋没毛が起こる場合もあります。確実な効果、仕上がりの美しさ、脱毛後の肌トラブルを防ぐには医療脱毛を検討してみてはいかがでしょうか。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_hairremoval.webp<?= strTimeStamp(); ?>" alt="脱毛に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/laser-hairremoval/"><span>レーザー脱毛</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>