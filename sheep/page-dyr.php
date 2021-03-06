﻿<?php
/*
Template Name: Dyr
*/
?>
<?php get_header(); ?>
<h1 id="headline-iter">- FÅR -</h1>
<section id="content-iter">
<div class="annonce">
<?php query_posts(array('category_name' => 'far')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php echo '<div class="iterbox">'; get_template_part( 'entry-goods' ); echo '</div>'; ?>
<?php endwhile; endif;?>
<?php if (!have_posts()) {
echo '<div class="nonebox">Ingen annoncer.</div>';
} ?>
</div>
<div class="right-feed">
	<h1 class="link_annonc">DYR OG TILBEHØR</h1>
	<?php query_posts(array('category_name' => 'dyr-links')); ?>
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