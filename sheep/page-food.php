<?php
/*
Template Name: Food
*/
?>

<?php get_header(); ?>
<h1 id="headline-iter">- FODERMIDLER -</h1>
<section id="content-iter">
<div class="annonce">
<?php query_posts(array('category_name' => 'fodermidler')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php echo '<div class="iterbox">'; get_template_part( 'entry-goods' ); echo '</div>'; ?>
<?php endwhile; endif; 
if (!have_posts()) {
echo '<div class="nonebox">Ingen annoncer.</div>';
}
?>
</div>
<div class="right-feed">
	<h1 class="link_annonc">FODER OG SERVICE</h1>
	<?php query_posts(array('category_name' => 'food-links')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php echo '<div class="annoncer-linkbox">'; get_template_part( 'entry-links' ); echo '</div>'?>
	<?php endwhile; endif; ?>
	<div id="empty-buffer"></div>
</div>
<div id="empty-buffer"></div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>