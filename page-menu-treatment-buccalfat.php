<?php 
/**
 * Template Name: 施術内容 - バッカルファット除去
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>バッカルファット除去</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>バッカルファット除去</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_buccalfat.webp<?= strTimeStamp(); ?>" alt="バッカルファット除去" loading="lazy">
            </div>
            <div class="title">
                <h2>バッカルファット除去</h2>
            </div>
            <div class="txt">
                <p>バッカルファットと呼ばれる頬の内側の深い層にある脂肪を除去する手術です。20～30代と若いうちからバッカルファットを除去しておくのもおすすめであり、小顔効果をもたらすだけでなく、将来の加齢に伴うたるみやほうれい線を予防することができます。<br>手術は、口腔内から行うため傷跡が目立ちにくく、外から見えることがありません。切開するのは粘膜部分になるため、傷の治りも比較的短い期間で済みます。</p>
            </div>
        </div>
    </section>
    <section id="treatment-price">
        <div class="container">
            <div class="title">
                <h2>料金表</h2>
            </div>
            <div class="contents">
                <div class="price-tbl pattern1">
                    <div class="p-ttl">口元</div>
                    <div class="p-row">
                        <div class="p-head">バッカルファット</div>
                        <div class="p-data">¥290,000<span class="tax-lbl wraptext">(税込¥319,000)</span></div>
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