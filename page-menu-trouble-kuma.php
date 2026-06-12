<?php 
/**
 * Template Name: 悩み − クマ
 */
?>
<?php get_header(); ?>
<main id="menu-trouble">
    <section id="page-mainvisual-trouble">
        <h1>クマ</h1>
    </section>
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li><a href="<?php bloginfo('url'); ?>/menu">MENU</a></li>
                <li>悩み − クマ</li>
            </ul>
        </div>
    </section>
    <section id="trouble-description" class="is-clm">
        <div class="container">
            <div class="l-area">
                <div class="title">
                    <h2>クマ</h2>
                </div>
                <div class="txt">
                    <p>疲れ顔に印象を与えてしまうクマ。クマと言ってもその種類は様々で、睡眠不足や疲れているときだけでなく、常に現れて消えない場合もありとても厄介な存在です。目の下のクマをどうにかしたいとお悩みの方に適した治療をご案内いたします。</p>
                    <p><span style="font-weight: 600;">【茶クマ】</span><br>目元が茶色く見えるクマのことです。目元の皮膚を引っ張ったときに茶色が薄くならずに皮膚と連動するクマは茶クマだといえます。もともと目元は皮膚がとても薄く、ちょっとした刺激でもダメージを受けやすい部位です。茶クマは外部刺激により目元の皮膚がダメージを受けることで、メラニンが蓄積してできていきます。若いうちは気にならなくても、加齢とともに目立ってくることがよくあります。茶クマはメラニンの蓄積なので、改善する方法はシミのケアと同様です。</p>
                    <p><span style="font-weight: 600;">【青クマ】</span><br>目元が青や紫色に見えるクマのことです。青クマは目元の皮膚を引っ張ると薄くなったり消えたりします。目元のマッサージでも改善されることがあり、各種のクマの中でも比較的対応しやすいクマです。目元の血行不良のため、毛細血管が薄く見える状態になっているのが原因です。青クマを改善するためには、血流が良くなるように対策することが必要です。</p>
                    <p><span style="font-weight: 600;">【黒クマ】</span><br>目の下のクマの中では最もよく見られる色のクマです。目の下の脂肪のふくらみや皮膚のくぼみによって影ができ、黒く見えるのが原因です。皮膚自体が黒くなっているのではなく影によって黒く見えるので、目の下にあるふくらみ・くぼみによる凹凸がなくなれば改善します。くぼみは加齢のために皮膚のコラーゲンが減少すると皮膚が薄くなり、目の周りの筋肉の境目がくぼんできます。黒クマはセルフケアで改善することは難しく、さらにメイクで完璧にカバーするのも難しいため、目の下の余分な脂肪を除去する下眼瞼脱脂やヒアルロン酸注入などが効果的です。</p>
                </div>
                <div class="recommend">
                    <div class="box"><span class="box-ttl">下眼瞼脱脂がおすすめの方</span>目の下のクマ・たるみの原因である眼窩脂肪を根本的に取り除きたい人、半永久的な治療効果を得たい人です。</div>
                    <div class="box"><span class="box-ttl">ヒアルロン酸注入がおすすめの方</span>眼窩脂肪が多くない人、一時的にカモフラージュしたい人です。また、下眼瞼脱脂との併用がおすすめの場合でも、どうしてもメスを入れたくない、すぐに効果を得たい、ダウンタイムなど仕事を休めないといった事情のある人にもおすすめします。</div>
                </div>
            </div>
            <div class="r-area">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/img_thumb_menu_trouble_kuma.webp<?= strTimeStamp(); ?>" alt="クマに関して" loading="lazy">
            </div>
        </div>
    </section>
    <section id="trouble-treatments">
        <div class="container">
            <div class="title">
                <h2>治療法</h2>
            </div>
            <div class="contents">
                <a href="<?php bloginfo("url"); ?>/menu/lower-eyelid-dasshi/"><span>下眼瞼脱脂術</span></a>
                <a href="<?php bloginfo('url'); ?>/menu/hyaluronic-lift/"><span>ヒアルロン酸</span></a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>