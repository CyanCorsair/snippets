<?php get_header(); ?>
<section id="headline" role="secondary">
<h1 class="main_blurb">Velkommen til<br/> FYNSKE FÅREAVLERE</h1>
<h2 class="second_blurb">Fynske Fåreavlere er en forening for alle fåre- og gedeavlere samt alle, der interesserer sig for de spændende produkter fra dyrene såsom fødevarer, uld- og skind.<br/><br/>
Foreningens formål er at skabe vækst og interesse for fåreavlen på Fyn og øer med vægt på kvalitet, dyrevelfærd og samarbejde.<br/><br/>
FYNSKE FÅREAVLERE er en selvstændig forening med ca. 250 medlemmer og drives udelukkende via frivillig arbejdskraft.</h2>
<a id="headline-readmore" href="http://fynskefaareavlere.dk/medlemsliste/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/laes_mere.png"></a>
</section>
<section id="content" role="main">
<br/>
<?php query_posts('showposts=5'); ?>
<?php query_posts(array('category_name' => 'kurser')); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-index' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<div class="empty-buffer"></div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>