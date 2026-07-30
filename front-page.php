<?php get_header(); ?>
<main id="top">

  <div class="home-fv">
    <div class="home-fv-inner">
      <div class="home-fv-slider swiper js-home-fv-swiper main-swiper">
        <div class="home-fv-slider-list swiper-wrapper">
          <?php
          // カスタムフィールドからスライダーデータを取得
          $fv_sliders = get_field('fv_slider');
          if ($fv_sliders) :
            foreach ($fv_sliders as $slider) :
              $sp_image = $slider['fv_slider_sp'];
              $pc_image = $slider['fv_slider_pc'];
              $link_data = $slider['fv_slider_link'];
              $link_url = $link_data['fv_slider_url'];
              $link_blank = $link_data['fv_slider_blank'];

              if ($sp_image && $pc_image) :
          ?>
                <div class="home-fv-slider-item swiper-slide">
                  <?php if ($link_url) : ?>
                    <a href="<?php echo esc_url($link_url); ?>" <?php echo $link_blank ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                    <?php endif; ?>
                    <picture>
                      <source srcset="<?php echo esc_url($sp_image['url']); ?>" media="(max-width: 768px)">
                      <img src="<?php echo esc_url($pc_image['url']); ?>" alt="<?php echo esc_attr($pc_image['alt']); ?>">
                    </picture>
                    <?php if ($link_url) : ?>
                    </a>
                  <?php endif; ?>
                </div>
            <?php
              endif;
            endforeach;
            ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="home-fv-thumbnail-wrapper">
        <div class="home-fv-thumbnail swiper js-home-fv-thumbnail-swiper">
          <div class="home-fv-thumbnail-list swiper-wrapper">
            <?php
            if ($fv_sliders) :
              foreach ($fv_sliders as $slider) :
                $sp_image = $slider['fv_slider_sp'];
                $pc_image = $slider['fv_slider_pc'];

                if ($sp_image && $pc_image) :
            ?>
                  <div class="home-fv-thumbnail-item swiper-slide">
                    <div class="home-fv-thumbnail-item-inner">
                      <picture>
                        <source srcset="<?php echo esc_url($sp_image['url']); ?>" media="(max-width: 768px)">
                        <img src="<?php echo esc_url($pc_image['url']); ?>" alt="<?php echo esc_attr($pc_image['alt']); ?>">
                      </picture>
                    </div>
                  </div>
              <?php
                endif;
              endforeach;
              ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="home-fv-thumbnail-button-wrapper">
          <div class="home-fv-thumbnail-button-prev js-home-fv-thumbnail-prev thumbnail-prev swiper-button-prev">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/fv_slide_arrow_prev.svg" alt="">
          </div>
          <div class="home-fv-thumbnail-button-next js-home-fv-thumbnail-next swiper-button-next">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/fv_slide_arrow_next.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function() {
      const popup = document.querySelector('.home-campaign-bnr-popup');
      const popupItem = document.querySelector('.home-campaign-bnr-popup-item');
      const closeBtn = document.querySelector('.home-campaign-bnr-popup-close');
      const bannerItems = document.querySelectorAll('.home-campaign-bnr-item a');
      popup.style.display = 'none';
      popup.style.opacity = '0';
      bannerItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          const existingImg = popupItem.querySelector('img');
          if (existingImg) {
            existingImg.remove();
          }
          const clickedImg = item.querySelector('img');
          if (clickedImg) {
            const clonedImg = clickedImg.cloneNode(true);
            popupItem.insertBefore(clonedImg, closeBtn);
            popup.style.display = 'block';
            requestAnimationFrame(function() {
              popup.style.opacity = '1';
            });
          }
        });
      });
      closeBtn.addEventListener('click', function() {
        popup.style.opacity = '0';
        setTimeout(function() {
          popup.style.display = 'none';
          const img = popupItem.querySelector('img');
          if (img) {
            img.remove();
          }
        }, 300);
      });
      popup.addEventListener('click', function(e) {
        if (e.target === popup) {
          closeBtn.click();
        }
      });
    })();
  </script>

  <section id="campaign-monitor">
    <div class="container">
      <a href="<?php bloginfo('url'); ?>/1066/">
        <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_campaign_banner.webp<?= strTimeStamp(); ?>" alt="キャンペーン実施中">
        <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_campaign_banner_sp.webp<?= strTimeStamp(); ?>" alt="キャンペーン実施中">
      </a>
      <a href="<?php bloginfo('url'); ?>/category/monitor/">
        <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_monitor_banner.webp<?= strTimeStamp(); ?>" alt="モニター様募集中">
        <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_monitor_banner_sp.webp<?= strTimeStamp(); ?>" alt="モニター様募集中">
      </a>
    </div>
  </section>
  <section id="payment-guide">
    <div class="container">
      <div class="main-text"><span class="payment">現金/クレジットカード/医療ローン</span><span>等</span><br><span>でお支払いが可能です。</span></div>
      <div class="sub-text">
        <p>医療ローンは審査が必要となります。</p>
        <p>詳しくはスタッフまでお尋ねください。</p>
        <img src="<?php bloginfo("template_url"); ?>/assets/img/img_loan_women.webp<?= strTimeStamp(); ?>" alt="女性スタッフ画像">
      </div>
    </div>
  </section>
  <section id="information">
    <div class="container">
      <div class="title">
        <div class="en">INFORMATION</div>
        <h2 class="jp">お知らせ</h2>
      </div>
      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'news',
        'posts_per_page' => 3,
        'order' => 'desc',
        'paged' => $paged,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <div class="contents">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="info" href="<?php the_permalink(); ?>">
              <div class="info-date"><?php echo get_post_time('Y.m.d(D)'); ?></div>
              <div class="info-title"><?php echo get_the_title(); ?></div>
            </a>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <div class="r-contents">
          <p>お知らせが存在しません。</p>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
      <a href="<?php bloginfo('url'); ?>/information" class="more-btn">もっと見る<i class="fa-solid fa-chevron-right"></i></a>
    </div>
  </section>
  <section id="aboutus">
    <div class="container">
      <div class="upper">
        <div class="l-area"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_aboutus01.webp<?= strTimeStamp(); ?>" alt="当院について０１"></div>
        <div class="r-area">
          <div class="wrap">
            <div class="title">
              <div class="en">ABOUT US</div>
              <h2 class="jp">当院について</h2>
            </div>
            <a href="<?php bloginfo('url'); ?>/aboutus/" class="more-btn">もっと見る</a>
          </div>
          <div class="txt">
            <p>SIGNATURE CLINIC 銀座は、患者様のお悩みに寄り添い、自然な美しさをご提供する美容医療クリニックです。</p>
            <p>当院は、患者様とのカウンセリングを大切にしており、お時間をかけて患者様のお悩みをじっくり伺ってまいります。</p>
          </div>
        </div>
      </div>
      <div class="lower">
        <div class="l-area">
          <div class="txt">
            <p>また、院内は衛生管理を徹底しているとともに、カウンセリングは完全個室で行うなど、プライバシーにも配慮しています。<br>患者様にご満足いただける結果を目指して、お一人おひとりに合わせた治療プランをご提案いたします。</p>
            <p>美容関連でお悩みの方は、是非一度当院にご相談ください。</p>
          </div>
        </div>
        <div class="r-area">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_aboutus02.webp<?= strTimeStamp(); ?>" alt="当院について０２">
        </div>
      </div>
    </div>
  </section>

  <section id="menu">
    <div class="container">
      <div class="title">
        <div class="en">MENU</div>
        <h2 class="jp">施術内容</h2>
      </div>
      <div class="contents js-sc-trigger">
        <div class="home-menu-tab-btn-wrapper">
          <button class="home-menu-tab-btn js-home-menu-tab-trigger is-active">お悩みから<br class="sp">探す</button>
          <button class="home-menu-tab-btn js-home-menu-tab-trigger">施術から<br class="sp">探す</button>
          <!-- <button class="home-menu-tab-btn js-home-menu-tab-trigger">機器から<br class="sp">探す</button> -->
        </div>
        <div class="home-menu-tab-content-wrapper">
          <div class="home-menu-tab-content js-home-menu-tab-content is-active">
            <div class="home-menu-tab-content-inner">
              <section class="home-menu-item">
                <h3 class="home-menu-item-title">
                  <span class="jp">お肌の悩み</span>
                  <span class="en">SKIN</span>
                </h3>
                <div class="home-menu-item-thumb">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_menu_skin.webp?2025080101" alt="お肌の悩み" loading="lazy">
                </div>
                <ul class="home-menu-item-list">
                  <li><a href="<?php bloginfo('url'); ?>/menu/skin/">しみ・そばかす・肝斑<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/tarumi/">たるみ<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/acne/">ニキビ<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/pore/">ニキビ痕・毛穴<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/mole/">ホクロ<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/hair-removal/">脱毛<i class="fa-solid fa-chevron-right"></i></a></li>
                </ul>
              </section>
              <section class="home-menu-item">
                <h3 class="home-menu-item-title">
                  <span class="jp">お顔の悩み</span>
                  <span class="en">FACE</span>
                </h3>
                <div class="home-menu-item-thumb">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_menu_face.webp?2025080101" alt="お顔の悩み" loading="lazy">
                </div>
                <ul class="home-menu-item-list">
                  <li><a href="<?php bloginfo('url'); ?>/menu/rinkaku/">輪郭<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/shiwa/">シワ<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/ruddy-face/">赤ら顔<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/eyes">目元<i class="fa-solid fa-chevron-right"></i></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/mouth">口元<i class="fa-solid fa-chevron-right"></i></a></li>
                </ul>
              </section>
              <section class="home-menu-item">
                <h3 class="home-menu-item-title">
                  <span class="jp">お身体の悩み</span>
                  <span class="en">BODY</span>
                </h3>
                <div class="home-menu-item-thumb">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_menu_body.webp?2025080101" alt="お身体の悩み" loading="lazy">
                </div>
                <ul class="home-menu-item-list">
                  <li><a href="<?php bloginfo('url'); ?>/menu/underarm-sweating">ワキ汗<i class="fa-solid fa-chevron-right"></i></a></li>
                </ul>
              </section>
            </div>
          </div>
          <div class="home-menu-tab-content js-home-menu-tab-content">
            <section class="home-menu-item home-menu-item-treatment">
              <h3 class="home-menu-item-title">
                <span class="jp">施術内容</span>
                <span class="en">TREATMENT</span>
              </h3>
              <div class="home-menu-item-thumb">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_menu_treatment.webp?2025080101" alt="施術から探す" loading="lazy">
              </div>
              <h4 class="home-menu-group-title">《肌・美容皮膚治療》</h4>
              <ul class="home-menu-item-list">
                <li><a href="<?php bloginfo('url'); ?>/menu/luxcear/">光治療・IPLフォト『ルクセア』<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/pico-laser">ピコレーザー『エンライトンSR』<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/peeling/">ピーリング<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ion-introduction/">イオン導入<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hifu/">ハイフ『ウルトラセル:Zi』<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/whitein/">ホワイトイン(肌育注射)<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/upgrade/">アップグレード(肌育注射)<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/idebae/">イデバエ(肌育注射)<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/profhilo/">プロファイロ(肌育注射)<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronic/">ヒアルロン酸<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronidase/">ヒアルロニダーゼ<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/botox/">ボトックス<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/splendor-x/">レーザー脱毛『スプレンダーX』<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/artmake/">アートメイク<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/bodymake/">ボディメイク・フェイシャルエステ『フォースカッター』<i class="fa-solid fa-chevron-right"></i></a></li>
              </ul>
              <h4 class="home-menu-group-title">《美容外科治療》</h4>
              <ul class="home-menu-item-list">
                <li><a href="<?php bloginfo('url'); ?>/menu/yonirf/">フェム(膣)ケア『ヨニRF』<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/">二重 埋没法<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/">二重 切開法<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/megashira-sekkai/">目頭切開法<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/mejiri-sekkai/">目尻切開法<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/drooping-upper-eyelid/">眼瞼下垂<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lower-eyelid-dasshi/">下眼瞼脱脂<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/eyebrow-lift/">眉下切開<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lip-lift/">人中短縮(リップリフト)<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/buccalfat/">バッカルファット除去<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/thread-lift/">スレッド(糸)リフト<i class="fa-solid fa-chevron-right"></i></a></li>
              </ul>
              <h4 class="home-menu-group-title">《その他》</h4>
              <ul class="home-menu-item-list">
                <li><a href="<?php bloginfo('url'); ?>/menu/drip-injection/">点滴・注射<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/">ドクターズコスメ<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/internal-medicine/">内服薬<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hydroquinone/">外用薬・ハイドロキノン<i class="fa-solid fa-chevron-right"></i></a></li>
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/redensity/">リデンシティ(肌育注射)</a></li> -->
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/glp1/">GLP-1</a></li> -->
              </ul>
            </section>
          </div>
          <!-- <div class="home-menu-tab-content js-home-menu-tab-content">
            <section class="home-menu-item home-menu-item-machine">
              <h3 class="home-menu-item-title">
                <span class="jp">機器</span>
                <span class="en">MACHINE</span>
              </h3>
              <div class="home-menu-item-thumb">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/signature-clinic-ginza/assets/img/img_top_menu_machine.webp?2025080101" alt="機器から探す" loading="lazy">
              </div>
              <ul class="home-menu-item-list">
                <li><a href="<?php bloginfo('url'); ?>/menu/yonirf/">ヨニRF<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ultracel-zi/">ウルトラセル:Zi<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/luxcear/">ルクセア<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/enlighten/">ピコレーザー（エンライトンSR）<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/splendor-x/">スプレンダーX<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/force-cutter/">フォースカッター<i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン4<i class="fa-solid fa-chevron-right"></i></a></li>
              </ul>
            </section>
          </div> -->
        </div>
      </div>
    </div>
  </section>


  <section id="case">
    <div class="container">
      <div class="title">
        <div class="en">CASE</div>
        <h2 class="jp">症例写真</h2>
      </div>

      <div class="home-case js-sc-trigger">

        <?php
        $args = array(
          'post_type'      => 'case',
          'posts_per_page' => 10,
          'orderby'        => 'date',
          'order'          => 'DESC'
        );
        $case_query = new WP_Query($args);
        ?>

        <?php if ($case_query->have_posts()) : ?>

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

          <div class="home-case-inner">
            <div class="home-case-list js-home-case-swiper swiper">
              <div class="swiper-wrapper">

                <?php while ($case_query->have_posts()) : $case_query->the_post(); ?>

                  <?php
                  // =========================
                  // ACF 値取得（ホームスライダー用）
                  // =========================

                  // スライダー用 repeater
                  $repeat_imgs = get_field('repeat_img');
                  $has_slider  = !empty($repeat_imgs);

                  // Before / After（フィールド名: before_img / after_img）
                  $before_field = get_field('before_img');
                  $after_field  = get_field('after_img');

                  // ホームは少し軽めのサイズで
                  list($before_url, $before_alt) = kk_get_acf_image_src_alt($before_field, 'medium_large');
                  list($after_url,  $after_alt)  = kk_get_acf_image_src_alt($after_field,  'medium_large');

                  // リスク・副作用
                  $risk = get_field('risk');
                  ?>

                  <div class="home-case-item swiper-slide">
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
                        <div class="risk-lbl js-risk-lbl">リスク・副作用</div>
                        <div class="risk-txt js-risk-txt">
                          <?php echo nl2br(esc_html($risk)); ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>

                <?php endwhile; ?>

              </div>
            </div>
          </div>

          <!-- ナビゲーション矢印 -->
          <div class="home-case-button-prev swiper-button-prev"></div>
          <div class="home-case-button-next swiper-button-next"></div>
          <!-- ページネーション -->
          <div class="home-case-pagination swiper-pagination"></div>

        <?php endif;
        wp_reset_postdata(); ?>

      </div>

      <div class="banner-area">
        <!--<a href="<?php bloginfo('url'); ?>/cat_treatment/hyaluronic" class="case-banner">
          <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case01.webp<?= strTimeStamp(); ?>" alt="ヒアルロン酸注入 症例ページ">
          <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case01_sp.webp<?= strTimeStamp(); ?>" alt="ヒアルロン酸注入 症例ページ">
        </a>
        <a href="<?php bloginfo('url'); ?>/cat_treatment/phototherapy" class="case-banner">
          <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case02.webp<?= strTimeStamp(); ?>" alt="光治療 症例ページ">
          <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case02_sp.webp<?= strTimeStamp(); ?>" alt="光治療 症例ページ">
        </a>
        <a href="<?php bloginfo('url'); ?>/cat_treatment/pico-laser/" class="case-banner">
          <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case03.webp<?= strTimeStamp(); ?>" alt="ピコレーザー 症例ページ">
          <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case03_sp.webp<?= strTimeStamp(); ?>" alt="ピコレーザー 症例ページ">
        </a>
        <a href="<?php bloginfo('url'); ?>/cat_treatment/thread-lift" class="case-banner">
          <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case04.webp<?= strTimeStamp(); ?>" alt="リフトアップ 症例ページ">
          <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case04_sp.webp<?= strTimeStamp(); ?>" alt="リフトアップ 症例ページ">
        </a>-->
        <a href="<?php bloginfo('url'); ?>/cat_treatment/botox" class="case-banner">
          <img class="pc-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case05.webp<?= strTimeStamp(); ?>" alt="ボトックス 症例ページ">
          <img class="sp-banner" src="<?php bloginfo('template_url'); ?>/assets/img/img_top_case05_sp.webp<?= strTimeStamp(); ?>" alt="ボトックス 症例ページ">
        </a>
      </div>
      <a href="<?php bloginfo('url'); ?>/case" class="more-btn">もっと見る<i class="fa-solid fa-chevron-right"></i></a>
    </div>
  </section>
  <section id="clinic-info">
    <div class="container">
      <div class="title">
        <div class="en">CLINIC INFO</div>
        <h2 class="jp">アクセス・クリニック情報</h2>
      </div>
      <div class="contents">
        <div class="l-area">
          <div class="medical-hours">
            <div class="sub-title">
              <h3>診療時間</h3>
            </div>
            <div class="medical-hours-tbl">
              <div class="t-row">
                <div class="t-space"></div>
                <div class="t-header">Sun</div>
                <div class="t-header">Mon</div>
                <div class="t-header">Tue</div>
                <div class="t-header">Wed</div>
                <div class="t-header">Thu</div>
                <div class="t-header">Fri</div>
                <div class="t-header">Sat</div>
              </div>
              <div class="t-row">
                <div class="t-header">11:00<span class="wraptext">~19:30</span></div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
                <div class="t-data">⚪︎</div>
              </div>
              <div class="t-row">
                <span class="comment">※日曜日のみ、11:00〜18:00となります。</span>
              </div>
            </div>
          </div>
          <a id="kireirepo-thumb" target="_blank" href="https://kireireport.com/clinics/12324/articles/510"><img alt="美容医療(自由診療・審美歯科)のプラットフォーム「キレイレポ」の取材記事。「シミもくすみも赤みもまとめて改善！」 スタッフ人気No.1の次世代光治療・LUXEA（ルクセア）とは？｜SIGNATURE CLINIC 銀座：鈴木 泰山 先生" src="https://kireireport.imgix.net/images/store/12c7b029ef4fe47c23e73a8c02c929bf.png?auto=format/width=" 500" height="300"></a>
        </div>
        <div class="r-area">
          <a href="https://maps.app.goo.gl/Eon4BUdStk3xTem97" class="address" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot"></i><span>東京都中央区銀座6-6-5 HULIC &New GINZA NAMIKI 6 10F</span></a>
          <div class="map">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_top_access_map.webp<?= strTimeStamp(); ?>" alt="クリニック周辺のマップ">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('inc/parts-contact'); ?>
  <?php get_template_part('inc/parts-top-pop-machine'); ?>
  <?php get_template_part('inc/parts-top-pop-treatment'); ?>
</main>
<?php get_footer(); ?>