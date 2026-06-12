<?php 
/**
 * Template Name: 施術内容 - GLP1
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>GLP1</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>GLP1</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_glp1.webp<?= strTimeStamp(); ?>" alt="GLP1" loading="lazy">
            </div>
            <div class="title">
                <h2>GLP1</h2>
            </div>
            <div class="txt">
                <p>GLP-1ダイエットとは、GLP-1ホルモン増加を促す薬を用いた医療機関によるダイエットです。食欲抑制や糖質吸収の抑制など体の内側からアプローチします。</p>
            </div>
        </div>
    </section>
    <section id="treatment-risk">
        <div class="container">
            <div class="sub-title">
                <h2>リスク・副作用</h2>
            </div>
            <div class="contents">
                <p>下痢、腹痛、吐き気</p>
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
                    <div class="p-ttl">GLP-1</div>
                    <div class="p-row">
                        <div class="p-head">1本</div>
                        <div class="p-data">¥40,000<span class="tax-lbl wraptext">(税込¥44,000)</span></div>
                    </div>
                    <div class="p-row">
                        <div class="p-head">5本以上<span class="brackets">(/本)</span></div>
                        <div class="p-data">¥30,000<span class="tax-lbl wraptext">(税込¥33,000)</span></div>
                    </div>
                </div>
                <div class="notes">
                    <p>※自由診療においては本国における未承認医薬品・医療機器が含まれます。</p>
                    <p>※治療に使用する医薬品・機器は当院医師の判断の元、個人輸入にて手続きを行っております。</p>
                    <p>※未承認医療機器については「<a style="text-decoration: underline;" href="https://www.yakubutsu.mhlw.go.jp/individualimport/healthhazard/" target="_blank" rel="noopener noreferrer">個人輸入において注意すべき医薬品等について</a>」もご参照ください。</p>
                    <p>※本治療に使用できる同一の性能を有する他の国内承認医薬品はありません。</p>
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