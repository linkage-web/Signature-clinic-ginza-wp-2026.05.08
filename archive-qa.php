<?php get_header(); ?>
<main id="page-qa">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>よくある質問</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">Q&A</div>
                <h1 class="jp">よくある質問</h1>
            </div>
        </div>
    </section>
    <section id="qa-body">
        <div class="container">
            <div class="tabs">
                <input id="treatment" type="radio" name="tab-item" checked>
                <label class="tab-item" for="treatment">施術</label>
                <input id="reservation" type="radio" name="tab-item">
                <label class="tab-item" for="reservation">予約</label>
                <input id="other" type="radio" name="tab-item">
                <label class="tab-item" for="other">その他</label>
                <div class="tab-contents">
                    <?php
                        $args = array(
                            'post_type' => 'qa',
                            'taxonomy' => 'cat_qa',
                            'term' => 'treatment',
                            'posts_per_page' => -1,
                            'order' => 'asc',
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                    ?>
                    <div class="tab-content" id="treatment-content">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="qa-card">
                            <div class="question">
                                <div class="q-lbl">Q</div>
                                <div class="q-txt"><?php echo get_the_title(); ?></div>
                            </div>
                            <div class="answer">
                                <div class="a-lbl">A</div>
                                <div class="a-txt"><?php echo the_content(); ?></div>
                            </div>
                            <div class="arrow-circle"></div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php else: ?>
                        <div class="tab-content" id="treatment-content">
                            <p>よくある質問が登録されていません。</p>
                        </div>
                    <?php endif;  wp_reset_postdata(); ?>
                    <?php
                        $args = array(
                            'post_type' => 'qa',
                            'taxonomy' => 'cat_qa',
                            'term' => 'booking',
                            'posts_per_page' => -1,
                            'order' => 'asc',
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                    ?>
                    <div class="tab-content" id="reservation-content">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="qa-card">
                            <div class="question">
                                <div class="q-lbl">Q</div>
                                <div class="q-txt"><?php echo get_the_title(); ?></div>
                            </div>
                            <div class="answer">
                                <div class="a-lbl">A</div>
                                <div class="a-txt"><?php echo the_content(); ?></div>
                            </div>
                            <div class="arrow-circle"></div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php else: ?>
                        <div class="tab-content" id="reservation-content">
                            <p>よくある質問が登録されていません。</p>
                        </div>
                    <?php endif;  wp_reset_postdata(); ?>
                    <?php
                        $args = array(
                            'post_type' => 'qa',
                            'taxonomy' => 'cat_qa',
                            'term' => 'other',
                            'posts_per_page' => -1,
                            'order' => 'asc',
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                    ?>
                    <div class="tab-content" id="other-content">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="qa-card">
                            <div class="question">
                                <div class="q-lbl">Q</div>
                                <div class="q-txt"><?php echo get_the_title(); ?></div>
                            </div>
                            <div class="answer">
                                <div class="a-lbl">A</div>
                                <div class="a-txt"><?php echo the_content(); ?></div>
                            </div>
                            <div class="arrow-circle"></div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php else: ?>
                        <div class="tab-content" id="other-content">
                            <p>よくある質問が登録されていません。</p>
                        </div>
                    <?php endif;  wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>