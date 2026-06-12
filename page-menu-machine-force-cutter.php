<?php 
/**
 * Template Name: 使用機器 − フォースカッター
 */
?>
<?php get_header(); ?>
<main id="menu-machine" class="force-cutter">
    <section id="page-mainvisual-machine">
        <h1>フォースカッター</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>使用機器 − フォースカッター</li>
            </ul>
        </div>
    </section>
    <section id="machine-description">
        <div class="container">
            <div class="l-area">
                <div class="treatment-thumb">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/img_machine_forcecutter.webp<?= strTimeStamp(); ?>" alt="フォースカッター" loading="lazy">
                </div>
            </div>
            <div class="r-area">
                <div class="title">
                    <h2>フォースカッターに関して</h2>
                </div>
                <div class="txt">
                    <p>フォースカッターは、1台で4役の機能を持っており、痩身・美容・健康の効果を引き出してくれるエステ機器です。</p>
                    <p>肌にラジオ波を流しボディを効率的に温めボディメイク効果を高めていきます。さらに揉みほぐしをする吸引やEMS、ポレーションによる美容成分の浸透、肌に引き締め効果を促すポレーションとオールマイティーな機能を兼ね備えています。</p>
                    <p>汚れや古い角質等の老廃物の排出を促し、肌に必要な成分を届けてくれます。ボディメイクだけでなくフェイシャルエステにも活用可能です。</p>
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
                    <div class="treatment">フォースカッター</div>
                    <div class="treatment">痩身</div>
                </div>
            </div>
        </section>
        <section id="machine-solution-trouble">
            <div class="container">
                <div class="sub-title">
                    <h3>解決できる悩み</h3>
                </div>
                <div class="contents">
                    <div class="trouble">ダイエット</div>
                    <div class="trouble">ボディメイク</div>
                </div>
            </div>
        </section>
    </div>
    <section id="machine-postoperative1" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>Wラジオ波</h3>
            </div>
            <div class="context">
                <p>深部への温熱作用によって集中的にアプローチ。<br>ダブルラジオ波による電磁波で、身体の深部まで徹底的に加熱。アプローチすることの難しいポイントにも届きます。「モノポーラ」と「マルチポーラ」のWアプローチで気になる部分をケアすることが可能です。</p>
            </div>
        </div>
    </section>
    <section id="machine-postoperative2" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>EMS＋吸引</h3>
            </div>
            <div class="context">
                <p>深層筋肉まで働きかけて美しいボディへと導く。<br>電気刺激によって深い層の筋肉まで刺激を与えることのできる「EMS」。また、特殊なヘッドによる吸引作用をプラスすることで、理想的なボディを実現します。</p>
            </div>
        </div>
    </section>
    <section id="machine-postoperative3" class="machine-postoperative">
        <div class="container">
            <div class="sub-title">
                <h3>ポレーション</h3>
            </div>
            <div class="context">
                <p>美容成分を肌の奥までしっかりと浸透される。<br>電気穿孔法の技術を応用。針を使わずに肌奥まで美容成分を浸透※させます。肌が本来もつ状態に近づけ、若々しい素顔をつくります。</p>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>