<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( has_post_thumbnail() ) { echo '<h1 class="archive-thumb">'; the_post_thumbnail(); echo '</h1>';} ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title-summary">'; } else { echo '<h2 class="entry-title-summary">'; } ?><?php the_title(); ?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
</header>
<?php echo '<h1 class="entry-link-summary">'; the_content(); echo '</h1>'; ?>
</article>
<img class="news-divider" src="<?php bloginfo('stylesheet_directory'); ?>/images/news_divider.png">
