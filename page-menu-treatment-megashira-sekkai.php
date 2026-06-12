<?php 
/**
 * Template Name: 施術内容 - 目頭切開法
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>目頭切開法</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>目頭切開法</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_megashira-sekkai.webp<?= strTimeStamp(); ?>" alt="目頭切開法" loading="lazy">
            </div>
            <div class="title">
                <h2>目頭切開法</h2>
            </div>
            <div class="txt">
                <p>目頭にかぶさる蒙古ひだを切除することにより、目をぱっちりと大きく見せることができます。蒙古ひだはアジア人に多く見られる特徴の一つです。「蒙古ひだ」があると、目が小さく離れて見えてしまいます。<br>蒙古ひだを切開し、取り除くことにより目の横幅が広がり、目を大きく見せる効果があります。目頭はわずか1mm幅が広がることでも印象が変わります。当院ではデザインも患者様のご希望にあわせて行い、自然な目元になるよう心がけております。</p>
            </div>
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
                        <div class="p-head">目頭切開</div>
                        <div class="p-data">¥290,000<span class="tax-lbl wraptext">(税込¥319,000)</span></div>
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