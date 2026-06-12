<?php get_header(); ?>
<main id="page-case-detail">
  <section id="pan-list">
    <div class="container">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
        <li><a href="<?php bloginfo('url'); ?>/case/">症例写真</a></li>
        <li><?php echo the_title() ?></li>
      </ul>
    </div>
  </section>

  <section id="case-detail">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container">

          <div class="case-cat">
            <?php
            $post_term = get_the_terms(get_the_ID(), 'cat_trouble');
            if ($post_term && !is_wp_error($post_term)) {
              echo esc_html($post_term[0]->name);
            }
            ?>
          </div>

          <div class="case-title">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php
          // =========================
          // ACF フィールド取得
          // =========================

          // スライダー用（repeater）
          $has_slider = have_rows('repeat_img'); // 1件以上あれば true

          // Before / After 用
          $before_field = get_field('before_img'); // ID or 配列どちらでも対応
          $after_field  = get_field('after_img');  // JSONだと配列になっている

          // 画像のURL & ALT を取得するヘルパー
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
            // 返り値が配列の場合（ACFのimage: array）
            elseif (is_array($field_value)) {
              $src = $field_value['sizes'][$size] ?? ($field_value['url'] ?? '');
              $alt = $field_value['alt'] ?? '';
            }

            return array($src, $alt);
          }
          ?>

          <?php if ($has_slider) : ?>
            <!-- =========================
               症例スライダー
               repeat_img があるときだけ表示
          ========================== -->
            <div class="case-detail-img swiper js-case-detail-img">
              <div class="swiper-wrapper">
                <?php while (have_rows('repeat_img')) : the_row(); ?>
                  <?php
                  $img_field = get_sub_field('img'); // ID or 配列
                  list($img_url, $img_alt) = kk_get_acf_image_src_alt($img_field, 'large');
                  if (!$img_url) {
                    continue;
                  }
                  ?>
                  <div class="case-detail-img-item swiper-slide">
                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
                  </div>
                <?php endwhile; ?>
              </div>

              <!-- 矢印 -->
              <div class="swiper-button-prev case-detail-img-prev js-case-detail-img-prev"></div>
              <div class="swiper-button-next case-detail-img-next js-case-detail-img-next"></div>

              <!-- ドット -->
              <div class="swiper-pagination case-detail-img-pagination js-case-detail-img-pagination"></div>
            </div>
          <?php endif; ?>

          <?php
          // Before / After の画像情報を取得
          list($before_url, $before_alt) = kk_get_acf_image_src_alt($before_field, 'large');
          list($after_url,  $after_alt)  = kk_get_acf_image_src_alt($after_field,  'large');
          ?>

          <?php if (!$has_slider && ($before_url || $after_url)) : ?>
            <!-- =========================
               Before / After
               repeat_img が無いときだけ表示
          ========================== -->
            <div class="img-before-after">
              <?php if ($before_url) : ?>
                <div class="before">
                  <div class="img-wrap">
                    <img src="<?php echo esc_url($before_url); ?>" alt="<?php echo esc_attr($before_alt ?: 'Before'); ?>" loading="lazy">
                  </div>
                  <span>Before</span>
                </div>
              <?php endif; ?>

              <?php if ($after_url) : ?>
                <div class="after">
                  <div class="img-wrap">
                    <img src="<?php echo esc_url($after_url); ?>" alt="<?php echo esc_attr($after_alt ?: 'After'); ?>" loading="lazy">
                  </div>
                  <span>After</span>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <?php
          // 施術費用
          $price = get_field('price');
          if ($price) :
          ?>
            <div class="treatment-price">
              <div class="price-lbl">施術費用</div>
              <div class="price">
                <?php echo esc_html($price); ?><span class="lbl-tax-included">(税込)</span>
              </div>
            </div>
          <?php endif; ?>

          <div class="case-body">
            <?php the_content(); ?>
          </div>

          <?php
          // リスク・副作用
          $risk = get_field('risk');
          if ($risk) :
          ?>
            <div class="case-risk">
              <div class="risk-lbl">リスク・副作用</div>
              <div class="risk-txt">
                <?php echo nl2br(esc_html($risk)); ?>
              </div>
            </div>
          <?php endif; ?>

        </div><!-- /.container -->
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
  </section>

  <section id="related-case">
    <div class="container">
      <div class="title">
        <h2>関連の症例写真</h2>
      </div>
      <div class="contents">
        <?php
        // 現在の投稿と同じ cat_trouble の記事を2件ランダム取得
        $post_term = array_shift(get_the_terms($post->ID, 'cat_trouble'));

        $args = array(
          'post__not_in'     => array($post->ID),
          'post_type'        => 'case',
          'taxonomy'         => 'cat_trouble',
          'term'             => $post_term->slug,
          'posts_per_page'   => 2,
          'orderby'          => 'rand',
        );

        $the_query = new WP_Query($args);

        // 画像URL＆ALTを取る共通関数（single側で既に定義してたらスキップ）
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

        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();

            // =========================
            // ACF 値取得（関連記事用）
            // =========================

            // スライダー用 repeater
            $repeat_imgs = get_field('repeat_img'); // この投稿の repeat_img
            $has_slider  = !empty($repeat_imgs);

            // Before / After（フィールド名は before_img / after_img）
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
                  // repeat_img の1枚目を取得
                  $first_img_field = $repeat_imgs[0]['img'];
                  list($thumb_url, $thumb_alt) = kk_get_acf_image_src_alt($first_img_field, 'medium_large');
                  ?>
                  <?php if ($thumb_url) : ?>
                    <!-- repeat_img があるとき：1枚目だけ表示 -->
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
        <?php else : ?>
          <p>関連記事は存在しません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>