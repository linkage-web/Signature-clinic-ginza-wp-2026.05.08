<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="9pQGkzI-p1TgCOBsKf1KiLuCIBaSladSJw0lOW-0KhU" />

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css<?= strTimeStamp(); ?>">

  <?php if (is_front_page() || is_singular() && get_post_type() == 'case'): ?>
    <!-- FV スライダー -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php endif; ?>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/add.css<?= strTimeStamp(); ?>">

  <?php if (is_page_template('page-treatment-template.php')): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menu-treatment-add.css<?= strTimeStamp(); ?>">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name='msapplication-config' content='<?php bloginfo('template_url'); ?>/assets/img/favicon/browserconfig.xml' />
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="google-site-verification" content="LIwSVnp7LImkYq19BXHUidwGfel_BeYRs_8y-ZegGqg" />
  <meta name="google-site-verification" content="LIwSVnp7LImkYq19BXHUidwGfel_BeYRs_8y-ZegGqg" />
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "tell0gq355");
  </script>
  <?php wp_head(); ?>
</head>

<body>
  <header id="header-pc">
    <div class="container">
      <div class="upper">
        <div class="l-area">
          <div class="header-logo">
            <a href="<?php bloginfo('url'); ?>/">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/img_logo.webp<?= strTimeStamp(); ?>" alt="SIGNATURE CLINIC 銀座">
            </a>
          </div>
        </div>
        <div class="r-area">
          <a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_line_icon.webp<?= strTimeStamp(); ?>" alt="line icon"></a>
          <a href="https://www.instagram.com/signatureclinicginza/?utm_source=qr" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_insta_icon.webp<?= strTimeStamp(); ?>" alt="instagram icon"></a>
          <a href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_mail_icon.webp<?= strTimeStamp(); ?>" alt="mail icon"></a>
          <a href="https://clinic.beauty.hotpepper.jp/H000693798/?cstt=17" target="_blank" rel="noopener noreferrer"><img class="hpb-icon" src="<?php bloginfo('template_url'); ?>/assets/img/img_hot_pepper_beauty_icon.webp<?= strTimeStamp(); ?>" alt="hot pepper beauty icon"></a>
          <a href="tel:0362639086" class="tel-area">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_tel_icon.webp<?= strTimeStamp(); ?>" alt="tel icon">
            <div class="inner">
              <div class="tel-no">03-6263-9086</div>
              <div class="addinfo">受付時間 11:00〜19:30</div>
            </div>
          </a>
          <a href="https://connect.kireipass.jp/clinics/signature-clinic-ginza/menus?kc_source=HP" class="booking-area" target="_blank" rel="noopener noreferrer">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_calendar_icon.webp<?= strTimeStamp(); ?>" alt="calendar icon">
            <div>WEB予約</div>
          </a>
          <a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer" class="line-area">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_mid-under_line_icon.webp<?= strTimeStamp(); ?>" alt="line icon">
            <div>LINE予約</div>
          </a>
        </div>
      </div>
      <div class="lower">
        <?php
        $post_type = get_post_type();
        ?>
        <nav class="header-nav">
          <ul>
            <li <?= is_page('aboutus') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/aboutus/">当院について</a></li>
            <li <?= (is_archive() || is_single()) && $post_type === 'post' ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
            <li <?= is_post_type_archive('case') || is_singular('case') || is_tax('cat_treatment') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/case/">症例写真</a></li>
            <li class="gnav-sub-menu-trigger<?= is_page('menu') ? ' is-current' : ''; ?>">
              <a href="<?php bloginfo('url'); ?>/menu/">施術メニュー</a>
              <ul class="gnav-sub-menu">
                <li><a href="<?php bloginfo('url'); ?>/menu/phototherapy/">光治療</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/pico-laser">ピコレーザー</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/peeling/">ピーリング</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ion-introduction/">イオン導入</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hifu/">ハイフ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/whitein/">ホワイトイン(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/upgrade/">アップグレード(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/idebae/">イデバエ(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/profhilo/">プロファイロ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronic/">ヒアルロン酸リフトアップ(Vシェイプ)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronidase/">ヒアルロニダーゼ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/botox/">ボトックス</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/laser-hairremoval/">レーザー脱毛</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/artmake/">アートメイク</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/bodymake/">ボディメイク</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/">二重 埋没法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/">二重 切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/megashira-sekkai/">目頭切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/mejiri-sekkai/">目尻切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/drooping-upper-eyelid/">眼瞼下垂</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lower-eyelid-dasshi/">下眼瞼脱脂</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/eyebrow-lift/">眉下切開</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lip-lift/">人中短縮(リップリフト)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/buccalfat/">バッカルファット除去</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/thread-lift/">スレッドリフト</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/drip-injection/">点滴・注射</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/">ドクターズコスメ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/internal-medicine/">内服薬</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hydroquinone/">ハイドロキノン</a></li>
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/redensity/">リデンシティ(肌育注射)</a></li> -->
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/glp1/">GLP-1</a></li> -->
              </ul>
            </li>
            <li class="gnav-sub-menu-trigger">
              <span>悩みから探す</span>
              <ul class="gnav-sub-menu">
                  <li><a href="<?php bloginfo('url'); ?>/menu/skin/">しみ・そばかす・肝斑</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/tarumi/">たるみ</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/shiwa/">シワ</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/rinkaku/">輪郭</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/hair-removal/">脱毛</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/acne/">ニキビ</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/pore/">ニキビ痕・毛穴</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/mole/">ホクロ</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/ruddy-face/">赤ら顔</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/underarm-sweating/">ワキ汗</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/eyes">目元</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/menu/mouth">口元</a></li>
              </ul>
            </li>
            <li class="gnav-sub-menu-trigger">
              <span>機器から探す</span>
              <ul class="gnav-sub-menu">
                <li><a href="<?php bloginfo('url'); ?>/menu/yonirf/">yoniRF</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ultracel-zi/">ウルトラセル:Zi</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/luxcear/">ルクセア</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/enlighten/">ピコレーザー（エンライトンSR）</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/splendor-x/">スプレンダーX</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/force-cutter/">フォースカッター</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン4</a></li>
              </ul>
            </li>
            <li <?= is_page('price') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/price/">料金表</a></li>
            <li <?= is_post_type_archive('qa') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/qa/">Q&A</a></li>
            <li <?= is_page('recruit') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a></li>
            <li <?= is_page('clinic-info') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/clinic-info/">アクセス・クリニック情報</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <header id="header-sp">
    <div class="container">
      <div class="wrap">
        <div class="header-logo">
          <a href="<?php bloginfo('url'); ?>/">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/img_logo.webp<?= strTimeStamp(); ?>" alt="SIGNATURE CLINIC 銀座">
          </a>
        </div>
        <div class="header-menu" id="header-menu">
          <div class="menu-icon">
            <span></span>
          </div>
          <div class="menu-lbl">menu</div>
        </div>
      </div>
      <div class="header-menu-body" id="header-menu-body">
        <div class="inner">
          <?php
          $post_type = get_post_type();
          ?>
          <ul class="menu-grp">
            <li <?= is_front_page() ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
            <li <?= is_page('aboutus') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/aboutus/">当院について</a></li>
            <li <?= (is_archive() || is_single()) && $post_type === 'post' ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
            <li <?= is_post_type_archive('case') || is_singular('case') || is_tax('cat_treatment') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/case/">症例写真</a></li>
            <li class="dm-sub-menu-trigger">
              <button class="js-dm-sub-menu-trigger">施術メニュー</button>
              <ul class="dm-sub-menu">
                <li><a href="<?php bloginfo('url'); ?>/menu/phototherapy/">光治療</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/pico-laser">ピコレーザー</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/peeling/">ピーリング</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ion-introduction/">イオン導入</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hifu/">ハイフ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/whitein/">ホワイトイン(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/upgrade/">アップグレード(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/idebae/">イデバエ(肌育注射)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/profhilo/">プロファイロ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronic/">ヒアルロン酸リフトアップ(Vシェイプ)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hyaluronidase/">ヒアルロニダーゼ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/botox/">ボトックス</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/laser-hairremoval/">レーザー脱毛</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/artmake/">アートメイク</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/bodymake/">ボディメイク</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-buried/">二重 埋没法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/double-eyelid-incision/">二重 切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/megashira-sekkai/">目頭切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/mejiri-sekkai/">目尻切開法</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/drooping-upper-eyelid/">眼瞼下垂</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lower-eyelid-dasshi/">下眼瞼脱脂</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/eyebrow-lift/">眉下切開</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/lip-lift/">人中短縮(リップリフト)</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/buccalfat/">バッカルファット除去</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/thread-lift/">スレッドリフト</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/drip-injection/">点滴・注射</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/doctors-cosmetics/">ドクターズコスメ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/internal-medicine/">内服薬</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hydroquinone/">ハイドロキノン</a></li>
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/redensity/">リデンシティ(肌育注射)</a></li> -->
                <!-- <li><a href="<?php bloginfo('url'); ?>/menu/glp1/">GLP-1</a></li> -->
              </ul>
            </li>
            <li class="dm-sub-menu-trigger">
              <button class="js-dm-sub-menu-trigger">悩みから探す</button>
              <ul class="dm-sub-menu">
                <li><a href="<?php bloginfo('url'); ?>/menu/skin/">しみ・そばかす・肝斑</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/tarumi/">たるみ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/shiwa/">シワ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/rinkaku/">輪郭</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/hair-removal/">脱毛</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/acne/">ニキビ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/pore/">ニキビ痕・毛穴</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/mole/">ホクロ</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ruddy-face/">赤ら顔</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/underarm-sweating/">ワキ汗</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/eyes">目元</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/mouth">口元</a></li>
              </ul>
            </li>
            <li class="dm-sub-menu-trigger">
              <button class="js-dm-sub-menu-trigger">機器から探す</button>
              <ul class="dm-sub-menu">
                <li><a href="<?php bloginfo('url'); ?>/menu/yonirf/">yoniRF</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/ultracel-zi/">ウルトラセル:Zi</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/luxcear/">ルクセア</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/enlighten/">ピコレーザー（エンライトンSR）</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/splendor-x/">スプレンダーX</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/force-cutter/">フォースカッター</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu/dermapen4/">ダーマペン4</a></li>
              </ul>
            </li>
            <li <?= is_page('price') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/price/">料金表</a></li>
            <li <?= is_post_type_archive('qa') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/qa/">Q&A</a></li>
            <li <?= is_page('recruit') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a></li>
            <li <?= is_page('clinic-info') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/clinic-info/">アクセス・クリニック情報</a></li>
            <li <?= is_page('minors') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/minors/">未成年の方へ</a></li>
            <li <?= is_page('cancel-policy') ? 'class="is-current"' : ''; ?>><a href="<?php bloginfo('url'); ?>/cancel-policy/">キャンセルポリシー</a></li>
          </ul>
          <ul class="sns-grp">
            <li><a href="https://lin.ee/5tixRiR" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_line_icon.webp<?= strTimeStamp(); ?>" alt="youtube icon" loading="lazy"></a></li>
            <li><a href="https://www.instagram.com/signatureclinicginza/?utm_source=qr"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_insta_icon.webp<?= strTimeStamp(); ?>" alt="instagram icon" loading="lazy"></a></li>
            <li><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_mail_icon.webp<?= strTimeStamp(); ?>" alt="mail icon" loading="lazy"></a></li>
            <li class="hpb-icon"><a href="https://clinic.beauty.hotpepper.jp/H000693798/?cstt=17" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/img/img_hot_pepper_beauty_icon.webp<?= strTimeStamp(); ?>" alt="hot pepper beauty icon" loading="lazy"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <?php get_template_part('inc/parts-mid-under-menu'); ?>