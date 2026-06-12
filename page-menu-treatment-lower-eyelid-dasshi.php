<?php 
/**
 * Template Name: 施術内容 - 下眼瞼脱脂
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>下眼瞼脱脂</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>下眼瞼脱脂</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_lower-eyelid-dasshi.webp<?= strTimeStamp(); ?>" alt="下眼瞼脱脂" loading="lazy">
            </div>
            <div class="title">
                <h2>下眼瞼脱脂</h2>
            </div>
            <div class="txt">
                <p>脂肪が原因となっている目の下のクマやたるみを改善する手術です。目の下のたるみは、加齢により筋肉や骨格に緩みが生じることによって目の奥の眼窩脂肪が突出することで発生し、突出した脂肪が影となってクマが生じます。このたるみの原因となっている眼窩脂肪を不要な分除去することで、若返った印象にすることができます。<br>下まぶたの裏側から切開し、脂肪を取り出すので肌表面に傷が残ることのない治療です。</p>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>目の下のふくらみが気になる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>目元をすっきり若返らせたい</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>脱脂を考えているが内出血や腫れが心配</span></li>
            </ul>
        </div>
    </section>
    <section id="treatment-risk">
        <div class="container">
            <div class="sub-title">
                <h2>リスク・副作用</h2>
            </div>
            <div class="contents">
                <p>疼痛、腫れ、内出血、感染、左右差、血腫、傷の赤み</p>
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
                    <div class="p-ttl">目元各種</div>
                    <div class="p-row">
                        <div class="p-head">下眼瞼脱脂</div>
                        <div class="p-data">¥250,000<span class="tax-lbl wraptext">(税込¥275,000)</span></div>
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