<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( has_post_thumbnail() ) { echo '<h1 class="gallery-preview-img">'; the_post_thumbnail(); echo '</h1>';} ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title-summary">'; } else { echo '<h2 class="entry-title-summary">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
<?php /*echo '<h1 class="entry-title-summary">';echo get_the_date(); echo '</h1>'; */ ?>
</header>
<a class="entry-readmore" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/se_mere.png"></a><?php echo '</h1>'; ?>
</article>
