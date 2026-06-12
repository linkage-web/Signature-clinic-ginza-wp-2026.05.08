<?php get_header(); ?>
<main id="page-aboutus">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>当院について</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">ABOUT US</div>
                <h1 class="jp">当院について</h1>
            </div>
        </div>
    </section>
    <section id="about-signature-clinic">
        <div class="container">
            <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/img_page_aboutus_01.webp<?= strTimeStamp(); ?>" alt="SIGNATURE CLINICについて" loading="lazy"></figure>
            <div class="title">
                <h3>SIGNATURE CLINIC 銀座<span class="wraptext">について</span></h3>
            </div>
            <div class="contents">
                <div class="txt">
                    <p>SIGNATURE CLINIC 銀座は、患者様のお悩みに寄り添い、自然な美しさをご提供する美容医療クリニックです。</p>
                    <p>当院は、患者様とのカウンセリングを大切にしており、お時間をかけて患者様のお悩みをじっくり伺ってまいります。</p>
                    <p>また、院内は衛生管理を徹底しているとともに、カウンセリングは完全個室で行うなど、プライバシーにも配慮しています。患者様にご満足いただける結果を目指して、お一人おひとりに合わせた治療プランをご提案いたします。</p>
                    <p>美容関連でお悩みの方は、是非一度当院にご相談ください。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="policy">
        <div class="container">
            <div class="title">
                <h3>治療方針・こだわり</h3>
            </div>
            <div class="contents">
                <div class="txt">
                    <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
                    <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
                    <p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
                </div>
            </div>
        </div>
    </section> -->
    <section id="hospital-director">
        <div class="container">
            <div class="title">
                <h3>院長紹介</h3>
            </div>
            <div class="contents">
                <div class="wrap">
                    <div class="l-area">
                        <figure><img src="<?php bloginfo('template_url'); ?>/assets/img/img_page_aboutus_hospital_director.webp<?= strTimeStamp(); ?>" alt="院長紹介" loading="lazy"></figure>
                    </div>
                    <div class="r-area">
                        <div class="greeting">
                            <p>美の基準と言われているキーワードには、「黄金比率」、「Eライン」、「オージーカーヴ」、「ハートシェイプ」…などがあります。</p>
                            <p>好きな顔というのは、国だったり、民族、時代、性別などで違うものですが、なるべく多くの人からきれいだと思われる顔になりたいと思いませんか？</p>
                            <p>お顔を拝見しながら、1人ひとりに合った美しいお顔づくりを心掛けております。</p>
                            <div class="sign">
                                <p>SIGNATURE CLINIC 銀座</p>
                                <p>鈴木</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="career">
                    <div class="sub-title">
                        <h4>経歴</h4>
                    </div>
                    <div class="career-tbl">
                        <div class="c-row">
                            <div class="c-data">帝京大学 医学部 卒業</div>
                        </div>
                        <div class="c-row">
                            <div class="c-data">国立病院機構埼玉病院 外科研修医</div>
                        </div>
                        <div class="c-row">
                            <div class="c-data">帝京大学板橋病院 外科入局</div>
                        </div>
                        <div class="c-row">
                            <div class="c-data">都内 美容クリニック院長歴任</div>
                        </div>
                        <div class="c-row">
                            <div class="c-data">銀座小町クリニック 勤務</div>
                        </div>
                        <div class="c-row">
                            <div class="c-data">SIGNATURE CLINIC銀座 開業 院長就任</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>