<?php get_header(); ?>
<main id="search-cat-case">
  <section id="pan-list">
    <div class="container">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
        <li><a href="<?php bloginfo('url'); ?>/case">症例写真</a></li>
        <li><?php echo single_term_title() ?></li>
      </ul>
    </div>
  </section>
  <section id="page-mainvisual">
    <div class="container">
      <div class="page-title">
        <div class="en">CASE</div>
        <h1 class="jp">症例写真</h1>
      </div>
    </div>
  </section>
  <div class="wrapper">
    <div class="search-cat-case-area">
      <section id="search-cat-case-list">
        <div class="container">
          <div class="cat-title">
            <h2>施術内容：「<?php echo single_term_title() ?>」</h2>
          </div>
          <?php if (have_posts()) : ?>
            <div class="cards">

              <?php
              // 画像URL＆ALTを取る共通関数（まだなければ定義）
              if (!function_exists('kk_get_acf_image_src_alt')) {
                function kk_get_acf_image_src_alt($field_value, $size = 'large')
                {
                  $src = '';
                  $alt = '';

                  if (empty($field_value)) {
                    return array('', '');
                  }

                  // 返り値が ID の場合
                  if (is_numeric($field_value)) {
                    $src = wp_get_attachment_image_url($field_value, $size);
                    $alt = get_post_meta($field_value, '_wp_attachment_image_alt', true);
                  }
                  // 返り値が配列の場合
                  elseif (is_array($field_value)) {
                    $src = $field_value['sizes'][$size] ?? ($field_value['url'] ?? '');
                    $alt = $field_value['alt'] ?? '';
                  }

                  return array($src, $alt);
                }
              }
              ?>

              <?php while (have_posts()) : the_post(); ?>

                <?php
                // =========================
                // ACF 値取得（カード用）
                // =========================

                // スライダー用 repeater
                $repeat_imgs = get_field('repeat_img');
                $has_slider  = !empty($repeat_imgs);

                // Before / After（フィールド名: before_img / after_img）
                $before_field = get_field('before_img');
                $after_field  = get_field('after_img');

                list($before_url, $before_alt) = kk_get_acf_image_src_alt($before_field, 'medium_large');
                list($after_url,  $after_alt)  = kk_get_acf_image_src_alt($after_field,  'medium_large');

                // リスク・副作用
                $risk = get_field('risk');
                ?>

                <div class="case">
                  <a href="<?php the_permalink(); ?>" class="img-before-after">

                    <?php if ($has_slider && !empty($repeat_imgs[0]['img'])) : ?>
                      <?php
                      // repeat_img の1枚目
                      $first_img_field = $repeat_imgs[0]['img'];
                      list($thumb_url, $thumb_alt) = kk_get_acf_image_src_alt($first_img_field, 'medium_large');
                      ?>
                      <?php if ($thumb_url) : ?>
                        <div class="archive-case-img">
                          <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>">
                        </div>
                      <?php endif; ?>

                    <?php else : ?>
                      <!-- repeat_img がないとき：Before / After 表示 -->
                      <?php if ($before_url) : ?>
                        <div class="before">
                          <span>Before</span>
                          <div class="img-wrap">
                            <img src="<?php echo esc_url($before_url); ?>" alt="<?php echo esc_attr($before_alt ?: 'Before'); ?>" loading="lazy">
                          </div>
                        </div>
                      <?php endif; ?>

                      <?php if ($after_url) : ?>
                        <div class="after">
                          <span>After</span>
                          <div class="img-wrap">
                            <img src="<?php echo esc_url($after_url); ?>" alt="<?php echo esc_attr($after_alt ?: 'After'); ?>" loading="lazy">
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endif; ?>

                  </a>

                  <div class="case-cat">
                    <?php
                    $post_term = get_the_terms(get_the_ID(), 'cat_trouble');
                    if ($post_term && !is_wp_error($post_term)) {
                      echo esc_html($post_term[0]->name);
                    }
                    ?>
                  </div>

                  <div class="case-ttl"><?php the_title(); ?></div>

                  <?php if ($risk) : ?>
                    <div class="case-risk">
                      <div class="risk-lbl">リスク・副作用</div>
                      <div class="risk-txt">
                        <?php echo nl2br(esc_html($risk)); ?>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>

              <?php
              $args = array(
                'mid_size'           => 1,
                'screen_reader_text' => ' ',
                'prev_next'          => false,
              );
              the_posts_pagination($args);
              ?>

            </div>
          <?php else : ?>
            <div class="cards">
              <p>症例が登録されていません。</p>
            </div>
          <?php endif;
          wp_reset_postdata(); ?>
        </div>
      </section>
    </div>
    <div class="side-area">
      <aside id="search-box">
        <div class="container">
          <div class="sub-title">
            <h2>SEARCH</h2>
            <div class="txt">症例を下記の条件で絞り込みます。</div>
          </div>
          <div class="contents">
            <form method="get" action="<?php bloginfo('url'); ?>">
              <?php
              $args = array(
                'echo' => 1,
                'show_option_none' => '悩みを選択',
                'option_none_value' => '',
                'show_count' => 0,
                'hide_empty' => 0,
                'orderby' => 'id',
                'order' => 'asc',
                'taxonomy' => 'cat_trouble',
                'name' => 'cat_trouble',
                'value_field' => 'slug',
              );
              wp_dropdown_categories($args);
              ?>
              <?php
              $args = array(
                'echo' => 1,
                'show_option_none' => '施術内容を選択',
                'option_none_value' => '',
                'show_count' => 0,
                'hide_empty' => 0,
                'orderby' => 'name',
                'order' => 'asc',
                'taxonomy' => 'cat_treatment',
                'name' => 'cat_treatment',
                'value_field' => 'slug',
              );
              wp_dropdown_categories($args);
              ?>
              <?php
              $args = array(
                'echo' => 1,
                'show_option_none' => '機器を選択',
                'option_none_value' => '',
                'show_count' => 0,
                'hide_empty' => 0,
                'orderby' => 'id',
                'order' => 'asc',
                'taxonomy' => 'cat_machine',
                'name' => 'cat_machine',
                'value_field' => 'slug',
              );
              wp_dropdown_categories($args);
              ?>
              <input type="text" name="s" id="s" placeholder="キーワードで検索" style="display: none;" />
              <input type="hidden" name="post_type" value="case">
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i>検索する</button>
            </form>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>