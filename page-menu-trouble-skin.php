<?php 
/**
 * Template Name: 悩み −  しみ・そばかす・肝斑
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>しみ・そばかす・肝斑</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − しみ・そばかす・肝斑</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title" style="display:none;">
                    <h2>しみ・そばかす・肝斑</h2>
                </div>
                <div class="txt">
                    <p><span class="b-font">【しみ】</span><br>一般的に｢しみ｣とは老人性色素斑を指し早ければ20代からあらわれ加齢とともに目立っていきます。主な原因に紫外線があり、繰り返し曝露することでメラニンが皮膚の一部に異常に増加した状態になります。多くが茶色く円形、平らで日光のよく当たる部分に生じます。</p>
                    <p><span class="b-font">【肝斑(かんぱん)】</span><br>頬を中心に左右対称に広がり額や口周りにもみられます。境界がはっきりせず色も薄くぼんやりしているため、くすみやクマのように見えることからご本人も気付かないことがあります。原因にはホルモン、紫外線、刺激などの影響が考えられ生活習慣や妊娠、出産、閉経などで状態がかわるといわれています。他のしみとの区別が難しくまた併存していることもあり、悪化を避けるためにも治療の選択を慎重におこないます。</p>
                    <p><span class="b-font">【そばかす(雀卵斑)】</span><br>小さな茶色い斑点が鼻を中心に広がります。<br>学童期や思春期から生じることが多く、遺伝的な要因も考えられるため両親のどちらかにあると出やすいといわれます。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_skin.webp<?= strTimeStamp(); ?>" alt="しみ・そばかす・肝斑に関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/phototherapy/"><span>光治療(IPL)</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/pico-laser"><span>ピコレーザー</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/whitein/"><span>ホワイトイン<span class="wraptext">（肌育注射）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/peeling/"><span>ピーリング</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/hydroquinone/"><span>外用薬・ハイドロキノン</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/"><span>ドクターズコスメ</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>