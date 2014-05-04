<article id="post-<?php the_ID(); ?>" class="article">
<header>
<?php if ( has_post_thumbnail() ) { echo '<span class="left_bar"><img src="http://bakziehost.com/oves/wordpress/wp-content/uploads/2014/02/headline_lines1.png"></span><h1 class="archive-thumb">'; the_post_thumbnail(); echo '</h1><span class="right_bar"><img src="http://bakziehost.com/oves/wordpress/wp-content/uploads/2014/02/headline_lines1.png"></span>';} ?>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
<?php/* echo '<h1 class="entry-title-archive">';echo get_the_date(); echo '</h1>'; */ ?>
</header>
<?php echo '<h1 class="entry-content-archive">'; echo get_excerpt(100); echo '</h1>'; ?>
<a class="entry-readmore-archive" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/laes_mere.png"></a><?php echo '</h1>'; ?>
</article>
