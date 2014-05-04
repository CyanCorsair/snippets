<article id="post-<?php the_ID(); ?>" class="article">
<header>
<?php if ( has_post_thumbnail() ) { echo '<h1 class="archive-thumb">'; the_post_thumbnail(); echo '</h1>';} ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title-summary">'; } else { echo '<h1 class="entry-title-summary">'; } ?><?php the_title(); ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h1>'; } ?>
<?php //echo '<h1 class="entry-title-archive">';echo get_the_date(); echo '</h1>';  ?>
</header>
<?php echo '<h1 class="entry-content-summary">'; echo get_excerpt(100); echo '</h1>'; ?>
<a class="entry-readmore" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/laes_mere.png"></a><?php echo '</h1>'; ?>
</article>
