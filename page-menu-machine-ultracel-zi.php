<?php 
/**
 * Template Name: 使用機器 − ウルトラセル : Zi
 */
?>
<?php get_header(); ?>
<main id="menu-machine">
    <section id="page-mainvisual-machine">
        <h1>ウルトラセル : Zi</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − ウルトラセル : Zi</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_ultracel-zi.webp<?= strTimeStamp(); ?>" alt="ウルトラセル : Zi" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>ウルトラセル:Ziに関して</h2>
                </div>
                <div class="txt">
                    <p>超音波を高密度に集束させてターゲットをピンポイント加熱することでコラーゲンや線維芽細胞等を新生・活性化するHIFU（高密度焦点式超音波）テクノロジーを搭載した治療機です。</p>
                    <p>最大の特長は、レーザー、IPL（光治療）、高周波、赤外線などのエネルギーベースの治療機では施術が難しかったSMAS（筋膜）まで非侵襲で効率よく熱を与えることができる点であり、従来は侵襲を伴うフェイスリフト（手術）や糸リフト治療でしか実現できなかった筋膜の引き上げが可能なことから「切らないフェイスリフト」とも呼ばれています。</p>
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
                    <div class="treatment">HIFU FACE</div>
                    <div class="treatment">HIFU BODY</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">たるみ</div>
                    <div class="trouble">しわ</div>
                    <div class="trouble">輪郭</div>
                    <div class="trouble">ボディメイク</div>
                </div>
            </div>
        </section>
    </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>