<?php get_header(); ?>
<main id="article-information">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/information">お知らせ</a></li>
                <li><?php echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <section id="article-info">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">
            <div class="article-head">
                <div class="article-cat"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></div>
                <div class="wrap">
                    <div class="article-write-date"><i class="fa-solid fa-pencil"></i><?php echo get_post_time('Y.m.d(D)'); ?></div>
                    <?php
                    if (new DateTime(get_the_date('Y-m-d')) == new DateTime(get_the_modified_date('Y-m-d'))) :
                        echo '';
                    else :
                        echo '<div class="article-update-date"><i class="fa-solid fa-clock"></i>' . get_the_modified_date('Y.m.d') . '(' . getJpDayWeek(get_the_modified_date('w')) . ')' . '</div>';
                    endif;
                    ?>
                </div>
                <h1 class="article-title"><?php echo the_title() ?></h1>
                <div class="article-eyecatch">
                    <?php if (has_post_thumbnail()): ?>
                        <?php echo get_thumb_img_eyecatch(); ?>
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_default.webp<?= strTimeStamp(); ?>" alt="<?php echo the_title() ?>" loading="lazy">
                    <?php endif; ?>
                </div>
            </div>
            <div class="article-body">
                <div class="article-sentence">
                    <?php echo the_content(); ?>
                </div>
                <div class="btn-wrap">
                    <a href="<?php bloginfo('url'); ?>/information" class="btn-back-list"><i class="fa-solid fa-list"></i>一覧に戻る</a>
                </div>
            </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata();?>
    </section>
    <section id="related-information-article">
        <div class="container">
            <div class="title">
                <h3>関連お知らせ</h3>
            </div>
            <div class="contents">
                <div class="cards">
                    <?php
                    $categories = get_the_category($post->ID); // 投稿のカテゴリーを取得
                    $cat_ids = []; 

                    foreach ($categories as $category) :
                        array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
                    endforeach;

                    $args = array(
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 3,
                        'category__in' => $cat_ids, // カテゴリーIDを指定
                        'orderby' => 'desc'
                    );
        
                    $the_query = new WP_Query($args);
                    if($the_query -> have_posts()) :
                        while($the_query -> have_posts()) : $the_query -> the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="related-info-card">
                        <div class="inner">
                            <div class="info-date"><?php echo get_post_time('Y.m.d(D)'); ?></div>
                            <div class="info-cat"><?php echo get_cat_name(get_the_category()[0]->term_id); ?></div>
                        </div>
                        <div class="info-title"><?php echo get_the_title(); ?></div>
                    </a>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>現在、関連記事は存在しません。</p>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
                <div class="btn-wrap">
                    <a href="<?php bloginfo('url'); ?>/information" class="more-btn">もっと見る<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>