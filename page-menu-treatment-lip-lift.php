<?php 
/**
 * Template Name: 施術内容 - 人中短縮(リップリフト)
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>人中短縮(リップリフト)</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>人中短縮(リップリフト)</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_lip-lift.webp<?= strTimeStamp(); ?>" alt="人中短縮(リップリフト)" loading="lazy">
            </div>
            <div class="title">
                <h2>人中短縮(リップリフト)</h2>
            </div>
            <div class="txt">
                <p>鼻と唇の距離を手術によって短くする治療です。鼻の下を切開し、余分な皮膚を切除して上唇を持ち上げ、細かく縫合します。<br>人中短縮術において重要なのはデザインと縫合です。患者様それぞれの今のご状態に合わせたデザインをご提案させて頂き、出来る限り傷跡が目立たないように細かく縫合を行います。 ブロック麻酔を行う事で痛みも最小限です。</p>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>何となく間延びした印象がある</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>鼻の下が長く感じる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>鼻の下が長いことで面長が気になる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>加齢により鼻下が伸びてきた</span></li>
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
                    <div class="p-ttl">口元</div>
                    <div class="p-row">
                        <div class="p-head">人中短縮</div>
                        <div class="p-data">¥300,000<span class="tax-lbl wraptext">(税込¥330,000)</span></div>
                    </div>
                </div>
                <div class="notes">
                    <p>※個人輸入に関しては厚生労働省ホームページに掲載された「<a style="text-decoration: underline;" href="https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/" target="_blank" rel="noopener noreferrer">個人輸入において注意すべき医薬品等について</a>」をご参考にお願いいたします。</p>
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