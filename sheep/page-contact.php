<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>
<h1 id="headline-contact">- KONTAKT -</h1>
<section id="content-contact">
	<div>
		<article id="contacts">
		<h1 class="contact-head">Organisation</h1>
			<ul>
			<li>
			Lis Nielsen</br>
			Formand<br/>
			Skærevej 9, Fangel<br/>
			5260 Odense S<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 6596 0306 / 2147 3646<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> lisnielsen.cml@gmail.com</span>
			</li>
			<li>
			Marianne Johansen</br>
			Næstformand<br/>
			Bredgade 133<br/>
			5485 Skamby<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 6130 1288<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> marianne-johansen@live.dk</span>
			</li>
			<li>
			Birte Rasmussen</br>
			Kasserer<br/>
			Grambovej 50<br/>
			5690 Tommerup<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 7594 3088<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> naarupskov@gmail.com</span>
			</li>
			<li>
			Niels Kronvald</br>
			Sekretær<br/>
			Kirkevej 16<br/>
			5792 Årslev<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 6599 1077 / 6165 4779<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> kronvald@gmail.com</span>
			</li>
			<span class="hori-div"><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/horizontal_divider.png"></span>
			<li>
			Dorthe Mortensen</br>
			Menigt medlem<br/>
			Kalvegangen 23<br/>
			5471 Søndersø<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 6489 3336<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> dorthe_mortensen@ofir.dk</span>
			</li>
			<span class="vert-div_one"><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/vertical_divider.png"></span>
			<li>
			Lise Jakobsen</br>
			1. Suppleant<br/>
			Svendborgvej 471<br/>
			5260 Odense S<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 6599 2074<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> carloscarpedersen@hotmail.<br/>com</span>
			</li>
			<span class="vert-div_two"><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/vertical_divider.png"></span>
			<li>
			Anny Bøg</br>
			2. Suppleant<br/>
			Maeholm 13<br/>
			5540 Ullerslev<br/>
			<span><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/phone.png"> 2613 2153<br/>
			<img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/mail.png"> annyboeg@hotmail.com</span>
			</li>
			<span class="vert-div_three"><img src="<?php bloginfo('stylesheet_directory');?>/images/kontakts/vertical_divider.png"></span>
			</ul>
			<div>
			<h1 class="contact-head">Kontakt os via mail</h1>
			<form id="contact-form"  action="<?php bloginfo("stylesheet_directory");?>/mail-contact.php" method="POST" enctype="multipart/form-data">
				<input class="field_small" type="hidden" name="action" value="submit"/><br />
				<input class="field_small" name="name" type="text" placeholder="Dit navn her >" size="30"/> <br /><br/>
				<input class="field_small" name="email" type="text" placeholder="Din email addresse her >" size="30"/> <br /> <br />
				<textarea class="field_big" name="message" rows="12" cols="51" placeholder="Din besked her >"></textarea><br/>
				<input class="send_button" name="contact-submit" type="submit" value=""/>
			</form> 
			</div>
		<div class="empty_buffer"></div>
		</article>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>