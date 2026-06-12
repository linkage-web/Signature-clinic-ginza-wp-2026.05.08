<?php 
/**
 * Template Name: 施術内容 - 眉下切開
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>眉下切開</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>眉下切開</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_eyebrow-lift.webp<?= strTimeStamp(); ?>" alt="眉下切開" loading="lazy">
            </div>
            <div class="title">
                <h2>眉下切開</h2>
            </div>
            <div class="txt">
                <p>眉毛の下を切開し加齢によってたるんだ上眼瞼の皮膚を切除する事で、上まぶたのたるみを取り除く治療です。<br>目元付近の薄い皮膚が上方に引き上げるためとても自然な仕上がりとなります。手術後の傷跡は、眉毛と一体化するため目立ちにくくなります。<br>必要であれば、上まぶたの余分な脂肪も同時に切除したり、二重術などとの組み合わせも可能です。</p>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>年齢とともにまぶたのたるみが気になるようになった</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>もともとの二重のラインは変えたくない</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>自然に若返りたい</span></li>
            </ul>
        </div>
    </section>
    <section id="treatment-risk">
        <div class="container">
            <div class="sub-title">
                <h2>リスク・副作用</h2>
            </div>
            <div class="contents">
                <p>疼痛・腫れ、内出血、感染・左右差・瘢痕</p>
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
                        <div class="p-head">眉下切開</div>
                        <div class="p-data">¥300,000<span class="tax-lbl wraptext">(税込¥330,000)</span></div>
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