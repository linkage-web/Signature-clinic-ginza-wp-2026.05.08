<?php 
/**
 * Template Name: 固定ページ 汎用テンプレート
 */
?>
<?php get_header(); ?>
<main class="l-contents">
    <div class="p-general__title">
        <?php the_title('<h1 class="p-general__title--heading">', '</h1>') ?> 
    </div>
    <div class="p-general__main">
        <div class="c-breadcrumb">
            <?php breadcrumb(); ?>
		</div>
            <?php 
            
			while ( have_posts() ) :
				the_post();
			the_content(); 

			endwhile; // End of the loop.
            ?>
        </div>
    <?php get_template_part('inc/parts-contact'); ?>
</main>
<?php get_footer(); ?>