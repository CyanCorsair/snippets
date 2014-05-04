<article id="post-<?php the_ID(); ?>" class="article">
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
</header>
<?php echo '<h1 class="entry-content-archive">'; echo get_excerpt(250); echo '</h1>'; ?>
<?php echo '<h1 class="entry-title-archive">';echo get_the_date(); echo '</h1>';  ?>
</article>
