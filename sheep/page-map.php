<?php
/*
Template Name: Map
*/
?>
<?php get_header(); ?>
<h1 id="headline-map">- FÅRETS DAG -</h1>
<section id="content-map">
	<?php
		query_posts(array('category_name' => 'faretsdag'));
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		echo '<div class="faretsdag">'; get_template_part( 'entry-faretsdag' ); echo '</div>';
		echo '<div class="empty_buffer"></div>';
		endwhile; endif;
	?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>