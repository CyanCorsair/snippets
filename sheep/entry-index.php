<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( has_post_thumbnail() ) { echo '<h1 class="entry-thumb">'; the_post_thumbnail(); echo '</h1>';} ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title-summary">'; } else { echo '<h2 class="entry-title-summary">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
<?php //echo '<h1 class="entry-title-summary">';echo get_the_date(); echo '</h1>';  ?>
</header>
<?php echo '<h1 class="entry-content-summary">'; echo get_excerpt(100); echo '</h1>'; ?>
<a class="entry-readmore" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/laes_mere.png"></a><?php echo '</h1>'; ?>
</article>
<img class="news-divider" src="<?php bloginfo('stylesheet_directory'); ?>/images/news_divider.png">
