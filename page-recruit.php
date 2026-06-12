<?php get_header(); ?>
<main id="page-recruit">
    <section id="pan-list">
        <div class="container">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>/">TOP</a></li>
                <li>採用情報</li>
            </ul>
        </div>
    </section>
    <section id="page-mainvisual">
        <div class="container">
            <div class="page-title">
                <div class="en">RECRUIT</div>
                <h1 class="jp">採用情報</h1>
            </div>
        </div>
    </section>
    <section id="recruit-summary">
        <div class="container">
            <div class="title">
                <h2>募集職種</h2>
            </div>
            <div class="contents">
                <a class="job nurse" href="<?php bloginfo('url'); ?>/recruit#nurse"><span>看護師</span><i class="fa-solid fa-angle-down"></i></a>
                <a class="job reception" href="<?php bloginfo('url'); ?>/recruit#reception"><span>受付事務<br>カウンセラー<br>看護助手</span><i class="fa-solid fa-angle-down"></i></a>
            </div>
        </div>
    </section>
    <section id="recruit-dtl">
        <div class="container">
            <div class="title">
                <h2>求人詳細</h2>
            </div>
            <div class="contents">
                <div id="nurse" class="job-description j-tbl">
					<h3>看護師</h3>
                    <div class="j-header">募集要項</div>
                    <div class="j-row">
                        <div class="r-header">募集職種</div>
                        <div class="r-data">看護師</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">勤務地</div>
                        <div class="r-data">〒104-0061<br>東京都中央区銀座6-6-5 HULIC &New GINZA NAMIKI 6 10F</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">資格</div>
                        <div class="r-data">正看護師、准看護師の有資格</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">試用期間</div>
                        <div class="r-data">あり</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">給与</div>
                        <div class="r-data">
                            <div class="contract-dtl">
                                <p class="lbl-contract">【正社員】</p>
                                <p>月給28～42万円<span class="wraptext">(経験、能力による)</span></p>
                            </div>
                            <div class="contract-dtl">
                                <p class="lbl-contract">【パート】</p>
                                <p>時給2000円〜<span class="wraptext">(経験、能力による)</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">勤務時間</div>
                        <div class="r-data">10:30～19:30<span class="wraptext">(日曜 10:30〜18:00)</span></div>
                    </div>
                </div>
                <div id="reception" class="job-description j-tbl">
					<h3>受付事務・カウンセラー・看護助手</h3>
                    <div class="j-header">募集要項</div>
                    <div class="j-row">
                        <div class="r-header">募集職種</div>
                        <div class="r-data">受付事務・カウンセラー・看護助手</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">勤務地</div>
                        <div class="r-data">〒104-0061<br>東京都中央区銀座6-6-5 HULIC &New GINZA NAMIKI 6 10F</div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">給与</div>
                        <div class="r-data">月給22～35万円<span class="wraptext">(経験、能力による)</span></div>
                    </div>
                    <div class="j-row">
                        <div class="r-header">勤務時間</div>
                        <div class="r-data">10:30～19:30<span class="wraptext">(日曜 10:30〜18:00)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>