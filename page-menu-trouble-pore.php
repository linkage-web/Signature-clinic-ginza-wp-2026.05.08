<?php 
/**
 * Template Name: 悩み − ニキビ痕・毛穴
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>ニキビ痕・毛穴</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − ニキビ痕・毛穴</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>ニキビ痕・毛穴</h2>
                </div>
                <div class="txt">
                    <p>化粧ノリ、鼻の黒ずみ、肌のキメは年齢を問わず気になるものです。毛穴の開きもその原因によって改善方法も異なります。まず皮脂の過剰分泌によるものは乾燥や紫外線により起こります。おでこや鼻などのTゾーンは皮脂も多いので、毛穴が目立ちがち。皮脂量のコントロールやターンオーバーを整えることをお薦めします。そして加齢によるたるみ毛穴はコラーゲンやエラスチンなどの減少、深層の脂肪や骨の減少などで肌のハリが保てず生じます。日ごろ自宅ケアに加え当院で美肌成分を補ったり修復力を高める治療もお薦めです。頬を指で押し上げると目立たなくなる毛穴にはたるみ治療も効果的です。</p>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_pore.webp<?= strTimeStamp(); ?>" alt="ニキビ痕・毛穴" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo('url'); ?>/menu/dermapen4/"><span>ダーマペン</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/peeling/"><span>ピーリング</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/laser-hairremoval/"><span>レーザー脱毛『スプレンダーX』</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/whitein/"><span>ホワイトイン<span class="wraptext">（肌育注射）</span></span></a>
                <a href="<?php bloginfo('url'); ?>/menu/tarumi/"><span>たるみ治療</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>