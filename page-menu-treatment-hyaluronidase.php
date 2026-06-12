<?php 
/**
 * Template Name: 施術内容 - ヒアルロニダーゼ
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>ヒアルロニダーゼ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>ヒアルロニダーゼ</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_hyaluronidase.webp<?= strTimeStamp(); ?>" alt="ヒアルロニダーゼ" loading="lazy">
            </div>
            <div class="title">
                <h2>ヒアルロニダーゼ</h2>
            </div>
            <div class="txt">
                <p>ヒアルロニダーゼとは、ヒアルロン酸を加水分解する酵素のことです。<br>ヒアルロン酸の分子と分子の間に働き、その結合を切断することで分解が行われます。<br>ヒアルロン酸を入れた場所にピンポイントで1回注入することで、ヒアルロン酸だけを分解することができます。<br>体内の他の物質には影響や害がない安全な成分です。</p>
            </div>
        </div>
    </section>
    <section id="treatment-target" class="bg-p">
        <div class="container">
            <div class="title">
                <h2>こんな方にオススメ！</h2>
            </div>
            <ul>
                <li><i class="fa-solid fa-square-check"></i><span>ヒアルロン酸注入したが、腫れぼったくなってしまった</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>皮膚の下にヒアルロン酸が青く透けてみえる</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>ヒアルロン酸注入したけど、不自然になってしまった</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>ヒアルロン酸を入れすぎてしまった</span></li>
                <li><i class="fa-solid fa-square-check"></i><span>手術するためにヒアルロン酸を溶かしたい</span></li>
            </ul>
        </div>
    </section>
    <section id="treatment-risk">
        <div class="container">
            <div class="sub-title">
                <h2>リスク・副作用</h2>
            </div>
            <div class="contents">
                <p>内出血、アレルギー、赤み、腫れ</p>
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
                    <div class="p-ttl">ヒアルロン酸</div>
                    <div class="p-row">
                        <div class="p-head">ヒアルロニダーゼ</div>
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