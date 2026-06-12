<?php 
/**
 * Template Name: 施術内容 - 光治療
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>光治療</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>光治療</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatmanet_phototherapy.webp<?= strTimeStamp(); ?>" alt="光治療" loading="lazy">
            </div>
            <div class="title">
                <h2>光治療に関して</h2>
            </div>
            <div class="txt">
                <p>これ以上薄くならないとあきらめていたシミやくすみに効果的です。</p>
                <p>さらに、深い部分にあるシミ予備軍さえも改善します。コラーゲン造成作用もあり、みずみずしい肌を蘇らせることができます。また、ルクセアの光は水分に吸収される波長部分をカットしてあるので、火傷の心配もなく、安全性が高いのも特徴です。</p>
                <p>色素の濃い部分に反応した場合かさぶたになって浮き上がりますがメイクでカバーして頂けます。かさぶたは数日から1週間ほどで自然にはがれ落ちます。くり返しの施術で内側から自然に美しい素肌が作られていきます。</p>
            </div>
        </div>
    </section>
    <section id="treatment-description3">
        <div class="container">
            <div class="sub-title">
                <h3>治療期間と持続期間</h3>
            </div>
            <div class="context">
                <p>4週間おきに1回、3回1クールがおすすめです。くり返し照射する事により肌のハリや透明感を維持して頂く事ができます。肝斑が出現した場合は治療の中止をおすすめすることがあります。</p>
            </div>
        </div>
    </section>
    <section id="treatment-machine" class="bg-w">
        <div class="container">
            <div class="title">
                <h2>使用機器</h2>
            </div>
            <a href="<?php bloginfo('url'); ?>/menu/luxcear" class="machine-wrap">
                <p>ルクセア</p>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_luxcear.webp<?= strTimeStamp(); ?>" alt="ルクセア" loading="lazy">
            </a>
        </div>
    </section>
    <section id="treatment-price">
        <div class="container">
            <div class="title">
                <h2>料金表</h2>
            </div>
            <div class="contents">
                <div class="price-tbl pattern1">
                    <div class="p-ttl">ルクセア<span class="wraptext">(フォトIPL)</span></div>
                    <div class="p-row">
                        <div class="p-head">初回<span class="brackets">(頬のみ)</span></div>
                        <div class="p-data">¥24,000<span class="tax-lbl wraptext">(税込¥26,400)</span></div>
                    </div>
                    <div class="p-row">
                        <div class="p-head">初回<span class="brackets">(頬＋鼻)</span></div>
                        <div class="p-data">¥27,000<span class="tax-lbl wraptext">(税込¥29,700)</span></div>
                    </div>
                    <div class="p-row">
                        <div class="p-head">全顔1回</div>
                        <div class="p-data">¥39,000<span class="tax-lbl wraptext">(税込¥42,900)</span></div>
                    </div>
                    <div class="p-row">
                        <div class="p-head">3回コース</div>
                        <div class="p-data">¥99,000<span class="tax-lbl wraptext">(税込¥108,900)</span></div>
                    </div>
                </div>
                <div class="notes">
                    <p>※フォトシルクプラスは日本国内では医薬品医療機器等法で未承認の治療です。 そのため、当院では医師の責任の下、厚生労働省から輸入許可申請を得た上で イタリアのDEKA社より個人輸入を行い、治療を行っております。</p>
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