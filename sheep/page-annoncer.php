<?php
/*
Template Name: Annoncer
*/
?>
<?php get_header(); ?>
<h1 id="annonc-headline">- KØB/SALG -</h1>
<section id="content-annoncer">
<nav>
<ul class="annonc-buttons">
<li id="sheep-link"><a href="http://fynskefaareavlere.dk/far/"><img class="annonc-link-img" id="sheep-img" src="<?php bloginfo('stylesheet_directory');?>/images/annoncer/sheep.png" alt="Får"></a><br/>
<h1 class="link_annonc">Dyr og  tilbehør</h1>
<p class="annonc-link-text">Køb og salg af levende dyr, fåregrej, hegn etc.</p></li>
<li id="wool-link"><a href="http://fynskefaareavlere.dk/uld/"><img class="annonc-link-img" id="mats-img" src="<?php bloginfo('stylesheet_directory');?>/images/annoncer/mats.png" alt="Uld"></a><br/>
<h1 class="link_annonc">Uld – skind – kød</h1>
<p class="annonc-link-text">Uldspinderi, gårdbutikker etc.</p></li>
<li id="leaf-link"><a href="http://fynskefaareavlere.dk/fodermidler/"><img class="annonc-link-img" id="food-img" src="<?php bloginfo('stylesheet_directory');?>/images/annoncer/food.png" alt="Fodermidler"></a><br/>
<h1 class="link_annonc">Foder og service</h1>
<p class="annonc-link-text">Foder og mineraler, fåreklipper, dyrlæge m.v.</p></li>
<li id="new-link"><a id="indryk-annonce"><img class="annonc-link-img" id="add-img" src="<?php bloginfo('stylesheet_directory');?>/images/annoncer/add.png" alt="Indryk"></a><br/>
<h1 class="link_annonc">Indryk annonce</h1>
<p class="annonc-link-text">Indryk ny annonce.</p></li>
</ul>
</nav>
<article id="annonc_main">
<h1 class="annonc-blurb">Annoncer</h1>
<p>Som annoncør i bladet ”FYNSKE FÅREAVLERE” får du samtidig  gratis annonce med logo og link til egen hjemmeside fra foreningens hjemmeside.</p><br/>
<p>Som medlem kan du gratis indrykke rubrikannonce med enkeltstående køb og salg af dyr og produkter. 
I rubrikannoncer kan der ikke medtages logo, men alene en kort tekst med beskrivelse af, hvad der ønskes købt eller solgt, medlemsnavn, 
adresse og telefonnummer.</p>
</article>
<div class="empty_buffer"></div>
<div class="annoncer-links hidden">
			<h1 class="contact-head">Indryk ny annonce</h1>
			<form id="annoncer-form" name="annoncer-form" action="<?php bloginfo("stylesheet_directory");?>/mail-annonce.php" method="POST" enctype="multipart/form-data">
				<input class="field_small" type="hidden" name="action" value="submit"/><br />
				<input class="field_small" name="annoncer-subject" type="text" placeholder="Emne >" size="30"/> <br /><br/>
				<input class="field_small" name="annoncer-name" type="text" placeholder="Dit navn her her >" size="30"/> <br /> <br />
				<input class="field_small" name="annoncer-email" type="text" placeholder="Din email addresse her >" size="30"/> <br /> <br />
				<textarea class="field_big" name="annoncer-message" rows="12" cols="51" placeholder="Din besked her >"></textarea><br/>
				<input class="send_button" type="submit" value=""/>
			</form>
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