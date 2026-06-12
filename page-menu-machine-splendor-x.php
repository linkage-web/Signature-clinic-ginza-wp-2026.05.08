<?php 
/**
 * Template Name: 使用機器 − スプレンダーX
 */
?>
<?php get_header(); ?>
<main id="menu-machine">
    <section id="page-mainvisual-machine">
        <h1>スプレンダーX</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − スプレンダーX</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_splendor-x.webp<?= strTimeStamp(); ?>" alt="スプレンダーX" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>スプレンダーXに関して</h2>
                </div>
                <div class="txt">
                    <p>当院ではルミナス社製のスプレンダーXという国内承認機初の2種類の波長がでる（アレキサンドライトレーザー755nm+Nd:Yag1064nm）を使用しています。</p>
                    <p>照射されたレーザーが毛と毛包を焼くことで脱毛が行えます。脱毛時にゴムで弾かれたような痛みがありますが、レーザー照射時に2種類のクーリングシステムで皮膚を冷却します。火傷のリスクが減り、痛みを緩和します。またジェルを塗らずに施術を受けられます。個人差はありますが、照射後に皮膚が赤くなることがあります。これについては外用薬を塗布したり、冷却することで早期に改善されます。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <section id="machine-available-treatments">
            <div class="container">
                <div class="sub-title">
                    <h3>対応可能な施術</h3>
                </div>
                <div class="contents">
                    <div class="treatment">脱毛</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">脱毛</div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>