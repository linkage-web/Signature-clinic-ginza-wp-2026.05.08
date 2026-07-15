<?php 
/**
 * Template Name: 悩み − ニキビ
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>ニキビ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − ニキビ</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description" class="is-clm">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>ニキビ</h2>
                </div>
                <div class="txt">
                    <p>ニキビ(ざ瘡)がよく見られるのは、皮脂腺が多く集まっている顔、胸、背中などの部分。皮脂が毛穴に詰まり、炎症が起こった状態です。</p>
                    <p>12～14歳くらいからできはじめ、17～21歳頃にピークを迎えるといわれます。思春期のニキビは通常は3～4年でなくなります。</p>
                    <p>一方、20代後半になって出る「大人のニキビ」も見られます。40代～でも乾燥やストレスなど、お肌の状態によってニキビがなかなか改善しないこともあります。</p>
                    <p><span style="font-weight: 600;">【白ニキビ（閉鎖面疱）】</span><br>皮脂や老廃物が詰まって盛り上がったものは白色面疱とも呼ばれ、白ニキビと呼ばれます。さらに皮脂が空気に触れ酸化し黒く目立つ状態は黒ニキビ（開放面疱）とも呼ばれます。</p>
                    <p><span style="font-weight: 600;">【赤ニキビ（炎症性面疱）】</span><br>白ニキビが悪化して炎症を起こしたもので目立ちやすく、治りにくい状態です。さらに化膿して、黄色い膿（うみ）がたまったものが黄ニキビ（膿疱性面疱）です。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_acne.webp<?= strTimeStamp(); ?>" alt="ニキビに関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/peeling/"><span>ピーリング</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/upgrade/"><span>アップグレード<span class="wraptext">（肌育注射）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/redensity/"><span>リデンシティ<span class="wraptext">（肌育注射）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/ion-introduction/"><span>イオン導入</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/internal-medicine/"><span>内服薬</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>