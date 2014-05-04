<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<h1 id="headline-gallery">- GALLERI -</h1>
<section id="content-gallery">
<div id="gallery-container">
<?php query_posts(array('category_name' => 'galleri')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php echo '<div class="iterbox">'; get_template_part( 'entry-gallery' ); echo '</div>'?>
<?php endwhile; endif; ?>
<div id="empty-buffer"></div>
</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>