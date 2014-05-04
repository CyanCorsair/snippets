<?php
/*
Template Name: Arrangementer
*/
?>
<?php get_header(); ?>
<h1 id="arrang-headline">- ARRANGEMENTER -</h1>
<section id="content-arrangementer">
<div id="arrang-header">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/kursus_banner.jpg" alt="Fåreavleres">
</div>
<article id="arrang-entry">
<br/><br/>
<h1 id="begynderkursus">BEGYNDERKURSUS</h1>
<div>Fynske Fåreavlere holder hvert år 
begynderkursus for nye eller kommende fåreavlere (såfremt der er minimum 10 deltagere).<br/>
Vi har netop afsluttet begynderkurset 2014 med 31 deltagere.<br/>
Er du interesseret i at deltage i næste begynderkursus primo 2015, er du velkommen til at maile 
til os allerede nu, så hører du nærmere fra os sidst på året.
<br/>
<br/><br/><br/>
<h1 id="kurs-priser">Pris for hele kurset:</h1>
<div>kr. <span style="font-weight:bold;">350,-</span> for vmedlemmer og kr. <span style="font-weight:bold;">525,-</span> for ikke-medlemmer</div>
<hr style="width:100%;border:1px solid;border-color:#f3eba3;margin-top:2rem;margin-bottom:2rem;">
<div>Tilmelding snarest muligt og senest 5. januar til Birte Ramsussen - <span style="font-weight:bold;color:#f3eba3;">fynskefaareavlere@gmail.com</span> eller
Dorthe Mortensen - <span style="color:#f3eba3;">tlf. <span style="font-weight:bold;">6489 3336</span></span></div>
</article>
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/column_divider.png" alt="Divider" class="vert-divider">
<aside id="arrang-aside">
<br/><br/>
<h1 id="emner">Emner</h1>
<div>
<ul>
<li>Start som fåreavler - valg af fårerace, krav til makr og stald, registreringskrav</li>
<li>Græsmarker og indhegning</li>
<li>Valg af fodermidler og fodring</li>
<li>Håndtering af får, herunder klipning og klovpleje</li>
<li>Fårenes sygdomme og forebyggelse</li>
<li>Læmning - teori og praksis</li>
<li>Afsætning af fåreprodukter</li>
</ul></div><br/>
<h1 id="kursussted">Kursussted:</h1>
<div>Fyns Familielandbrug, Rugårdsvej 197, 5210 Odense NV<br/><br/><br/>
Har eller kender du til et arrangement, som du mener kunne
være interessant, for ofreningens medlemmer eller brugere
af hjemmesiden, er du meget velkommen til at sende os en
mail om arrangementet.</div>
</aside>
<div id="event-feed">
	<?php query_posts(array('category_name' => 'kurser')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php echo '<div class="annoncer-linkbox">'; get_template_part( 'entry-events' ); echo '</div>'?>
	<?php endwhile; endif; ?>
</div>
<div class="empty_buffer"></div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>