<?php get_header(); ?>
<section id="content-post" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-content' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<hr>
<footer class="footer">
<!--<a href="<?php //bloginfo('url');?>"><- Gå til hjemmeside</a><br/>-->
<a href="javascript:javascript:history.go(-1)"><- Gå tilbage</a>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>