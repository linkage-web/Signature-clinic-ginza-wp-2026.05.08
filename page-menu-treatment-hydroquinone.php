<?php 
/**
 * Template Name: 施術内容 - ハイドロキノン
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>ハイドロキノン</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>ハイドロキノン</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_hydroquinone.webp<?= strTimeStamp(); ?>" alt="ハイドロキノン" loading="lazy">
            </div>
            <div class="title">
                <h2>ハイドロキノン</h2>
            </div>
            <div class="txt">
                <p>シミの原因となるメラニン色素は、肌が紫外線を浴びた際にそのダメージから肌を守るために作り出されます。メラニン色素は、「メラノサイト」と呼ばれる細胞によって日々生成されていますが、通常はターンオーバー（肌の新陳代謝）によって排出されています。ところが、紫外線を浴びすぎたり、ターンオーバーのサイクルが乱れたりすると、過剰に蓄積されてシミの原因となってしまうのです。</p>
                <p>このような仕組みで作られるシミですが、ハイドロキノンにはメラノサイトの働きを抑制し、メラニン色素の生成を阻害する効果が認められています。さらに、メラニン色素の生成に関わる「チロシナーゼ」という酵素の働きを抑制する作用があります。このような働きから、ハイドロキノンにはシミを予防したり、目立ちにくくする効果が期待されているのです</p>
            </div>
        </div>
    </section>
    <section id="treatment-description3">
        <div class="container">
            <div class="sub-title">
                <h3>治療期間と持続期間</h3>
            </div>
            <div class="context">
                <p>1日1回、夜。色素の濃い部分に塗布。効果出現まで早い方で、数週間～。2～3ヶ月でいったん終了します。</p>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>肝斑</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>老人性色素斑</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>日光性色素斑</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>炎症後色素沈着</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>黒ずみ</span></li>
            </ul>
        </div>
    </section>
    <section id="treatment-risk">
        <div class="container">
            <div class="sub-title">
                <h2>リスク・副作用</h2>
            </div>
            <div class="contents">
                <p>赤み、かぶれ、白斑</p>
            </div>
        </div>
    </section>
    <section id="treatment-price" class="bg-w">
        <div class="container">
            <div class="title">
                <h2>料金表</h2>
            </div>
            <div class="contents">
                <div class="price-tbl pattern1">
                    <div class="p-ttl">外用薬</div>
                    <div class="p-row">
                        <div class="p-head">ハイドロキノン<span class="brackets">（5g）</span></div>
                        <div class="p-data">¥2,000<span class="tax-lbl wraptext">(税込¥2,200)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="treatment-flow">
        <div class="container">
            <div class="title">
                <h2>施術完了までの流れ</h2>
            </div>
            <div class="contents">
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">01</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_01.webp" alt="受付/カウンセリング" loading="lazy">
                    <h3 class="flow-title">受付 / カウンセリング</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">02</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_02.webp" alt="診察" loading="lazy">
                    <h3 class="flow-title">診察</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">03</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_03.webp" alt="処置" loading="lazy">
                    <h3 class="flow-title">処置</h3>
                </div>
                <div class="flow">
                    <div class="step-lbl">STEP<span class="num">04</span></div>
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_treatment_flow_04.webp" alt="お会計/予約/ケア説明" loading="lazy">
                    <h3 class="flow-title">お会計/予約/ケア説明</h3>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>