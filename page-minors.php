<?php get_header(); ?>
<main id="page-minors">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>未成年の方へ</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">FOR MINORS</div>
                <h1 class="jp">未成年の方へ</h1>
            </div>
        </div>
    </section>
    <section id="minors-download">
        <div class="container">
            <div class="txt-area">
                <p>未成年 (18歳未満) の方は、施術を受ける際、保護者の方の同意が必要になります。</p>
                <p>未成年の方がご利用になるには、保護者の方と一緒にご来院頂くか、以下のPDFファイルを印刷し、「直筆」で必要事項を記入した書類をお持ち頂くと、契約が可能となります。</p>
                <p class="em">※必ず保護者の方の直筆にて、ご記入をお願い致します。</p>
            </div>
            <div class="btn-area">
                <div class="popup">「診察と診療」を受ける方</div>
                <a href="<?php bloginfo('template_url'); ?>/assets/file/agreement-form.pdf" target="_blank" rel="noopener noreferrer">ダウンロード<span>(同意書PDF)</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>