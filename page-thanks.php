<?php get_header(); ?>
<main id="page-contact">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>お問い合わせ</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">CONTACT</div>
                <h1 class="jp">お問い合わせ</h1>
            </div>
        </div>
    </section>
    <section id="thanks">
        <div class="container">
            <p>お問い合わせ、<br>ありがとうございました！</p>
            <a href="<?php bloginfo('url'); ?>/" >TOPに戻る</a>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>