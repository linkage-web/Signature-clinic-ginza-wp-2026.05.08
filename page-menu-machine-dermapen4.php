<?php 
/**
 * Template Name: 使用機器 − ダーマペン４
 */
?>
<?php get_header(); ?>
<main id="menu-machine" class="dermapen4">
    <section id="page-mainvisual-machine">
        <h1>ダーマペン４</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − ダーマペン４</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_dermapen4.webp<?= strTimeStamp(); ?>" alt="ダーマペン４" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>ダーマペン４に関して</h2>
                </div>
                <div class="txt">
                    <p>ダーマペン4は、カートリッジ式の超極細針を、 キツツキの様に高速で皮膚に刺していく機械です。</p>
                    <p>皮膚に微細な穴を大量に開けることで、 皮膚の再生能力（創傷治癒機転）を刺激し、 コラーゲンの生成や新しい細胞の分化・増殖が促進され、 肌質が改善します。</p>
                    <p>様々な美容成分を含む薬剤と組み合わせて使うことで、 より効果的な肌質改善・肌の若返りが期待できます。 ニキビ・ニキビ痕、 毛穴の開き、 小ジワの他、 妊娠線や肉割れ（ストレッチマーク）など、 お体の治療も可能です。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <section id="machine-available-treatments">
            <div class="container">
                <div class="sub-title">
                    <h3>対応可能な施術</h3>
                </div>
                <div class="contents">
                    <div class="treatment">ダーマペン</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">ニキビ痕</div>
                    <div class="trouble">毛穴</div>
                </div>
            </div>
        </section>
    </div>
    <section id="machine-postoperative1" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>経過</h3>
            </div>
            <div class="context">
                <p>数日から1週間程度赤みが出る場合があります。</p>
            </div>
        </div>
    </section>
    <section id="machine-postoperative2" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>熱感／かゆみ</h3>
            </div>
            <div class="context">
                <p>ヴェルヴェットスキンをお受けになる方は治療中にチリチリとした刺激を感じることがあります。(個人差がございます）</p>
                <p><span style="font-weight: bold;">推奨頻度</span><br>処置間隔は3〜4週間毎。回数を重ねることで更に効果が期待できる処置です。個人差もございますが3〜5回程度行う事をおすすめいたします。</p>
            </div>
        </div>
    </section>
    <section id="machine-postoperative3" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>飲酒</h3>
            </div>
            <div class="context">
                <p>当日は避けてください。</p>
            </div>
        </div>
    </section>
    <section id="machine-postoperative4" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>日焼け</h3>
            </div>
            <div class="context">
                <p>処置後は日光に当たらないよう注意してください。</p>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>