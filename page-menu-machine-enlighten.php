<?php 
/**
 * Template Name: 使用機器 − ピコレーザー（エンライトン）
 */
?>
<?php get_header(); ?>
<main id="menu-machine">
    <section id="page-mainvisual-machine">
        <h1>ピコレーザー<span class="wraptext">（エンライトン）</span></h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − ピコレーザー（エンライトン）</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_enlighten.webp<?= strTimeStamp(); ?>" alt="ピコレーザー（エンライトン）" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>ピコレーザー（エンライトン）に関して</h2>
                </div>
                <div class="txt">
                    <p>厚生労働省に安全性が認められた最新鋭の医療レーザー機器です。 エンライトンSRは、ピコレーザーの中でも、最新にバージョンアップされたピコレーザーです。</p>
                    <p> ピコ（1兆分の1）秒という驚異的に短い周期でレーザーを照射するため、熱による肌へのダメージを与えずにシミなどの原因となるメラニン色素などを短時間で破壊し除症状を改善します。痛みや炎症後色素沈着のリスクが軽減されるほか、ダウンタイムの心配もほとんどありません。また、肌の若返りやあらゆる年齢肌の悩みを改善することも可能です。 </p>
                    <p>優しいアプローチでダウンタイムを抑えつつ浅い層のシミを改善。美肌治療では真皮から輝きを取り戻し、本来のお肌の美しさを蘇らせます。日本人の肌質のために改良されていますので、繊細な肌質の方にも安心です。</p>
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
                    <div class="treatment">PICOトーニング</div>
                    <div class="treatment">PICOフラクショナル</div>
                    <div class="treatment">PICOスポット</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">しみ</div>
                    <div class="trouble">毛穴</div>
                    <div class="trouble">肝斑</div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>