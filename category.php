<?php get_header(); ?>
<main id="page-information">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>お知らせ</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">INFORMATION</div>
                <h1 class="jp">お知らせ</h1>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <div class="information-area">
            <section id="information-list">
                <div class="container">
                    <div class="cat-title">
                        <h2>カテゴリー：「<?php echo single_term_title() ?>」</h2>
                    </div>
                    <?php if (have_posts()) : ?>
                    <div class="cards">
                        <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="info-card">
                            <div class="inner">
                                <div class="info-date"><?php echo get_post_time('Y.m.d(D)'); ?></div>
                                <div class="info-cat"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></div>
                            </div>
                            <div class="info-title"><?php echo get_the_title(); ?></div>
                        </a>
                        <?php endwhile; ?>
                        <?php
                            $args = array(
                                'mid_size' => 1,
                                'screen_reader_text' => ' ',
                                'prev_next' => false,
                            );
                            the_posts_pagination($args);
                        ?>
                    </div>
                    <?php else: ?>
                        <div class="cards">
                            <p>お知らせが登録されていません。</p>
                        </div>
                    <?php endif;  wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
        <div class="side-area">
            <aside id="search-box">
                <div class="container">
                    <div class="sub-title">
                        <h2>SEARCH</h2>
                        <div class="txt">お知らせを下記の条件で絞り込みます。</div>
                    </div>
                    <div class="contents">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>