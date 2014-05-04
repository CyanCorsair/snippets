<?php
/*
Template Name: Artikler
*/
?>

<?php get_header(); ?>
<h1 id="headline-iter">- ARTIKLER OG NYHEDER -</h1>
<section id="content-iter">
<?php query_posts(array('category_name' => 'artikler')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php echo '<div class="iterbox">'; get_template_part( 'entry-articles' ); echo '</div>'?>
<?php endwhile; endif; ?>
<div id="empty-buffer"></div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>