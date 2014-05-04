<section class="entry-content">
<?php if ( is_singular() ) { echo '<h1 class="entry-title-summary entry-content">'; } else { echo '<h2 class="entry-title-summary entry-content">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h1>'; } ?>
<?php the_content(); ?>
</section>