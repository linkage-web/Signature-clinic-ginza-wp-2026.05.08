<?php 
/**
 * Template Name: 施術内容 - リデンシティ(メソセラピー)
 */
?>
<?php get_header(); ?>
<main id="menu-treatment">
    <section id="page-mainvisual-treatment">
        <h1>リデンシティ<span class="wraptext">(メソセラピー)</span></h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>リデンシティ(メソセラピー)</li>
            </ul>
        </div>
    </section>
    <section id="treatment-description">
        <div class="container">
            <div class="treatment-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_treatment_redensity.webp<?= strTimeStamp(); ?>" alt="リデンシティー(メソセラピー)" loading="lazy">
            </div>
            <div class="title">
                <h2>リデンシティ(メソセラピー)<span class="wraptext">に関して</span></h2>
            </div>
            <div class="txt">
                <p>ヒアルロン酸やビタミン、ミネラル、アミノ酸を配合した成分を肌の表層にダイレクトに注入する施術です。お肌の水分量が増し、毛穴やくすみも改善しお肌の弾力がよみがえります。患者様のご希望やお肌の状態に合わせて薬剤をお選び致します。</p>
                <p><span style="font-weight: bold;">コラーゲンが増加し潤いのある肌へ</span><br>皮膚の再構築と細胞の再生により、真皮や表皮のコラーゲンが増加し潤いのある肌へ導きます。 引き締め効果も見込めますので肌にハリが出ます。肌の老化を予防、キメの改善、くすみの解消、ハリ感アップ、小ジワの改善など</p>
            </div>
        </div>
    </section>
    <section id="treatment-description3">
        <div class="container">
            <div class="sub-title">
                <h3>治療期間と持続期間</h3>
            </div>
            <div class="context">
                <p>3週間おきに3回。3～4ヶ月に1回のペースでの繰り返しがおすすめです。</p>
            </div>
        </div>
    </section>
    <section id="treatment-price" class="bg-w">
        <div class="container">
            <div class="title">
                <h2>料金表</h2>
            </div>
            <div class="contents">
                <div class="price-tbl pattern3">
                    <div class="p-ttl">リデンシティーⅠ</div>
                    <div class="p-data">¥69,000<span class="tax-lbl wraptext">(税込¥75,900)</span></div>
                </div>
                <div class="notes">
                    <p>※当製品は未承認医薬品です。</p>
                    <p>※医師の責任の下、 PRSS.JAPAN株式会社より、医師が個人輸入しております。</p>
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