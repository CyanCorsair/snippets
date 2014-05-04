<?php
include_once('http://fynskefaareavlere.dk/wp-content/themes/blankslate/mail-contact.php');
include('http://fynskefaareavlere.dk/wp-content/themes/blankslate/mail-annonce.php');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.00" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url'); ?>/ie-style.css" />
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Alegreya:700|Nunito:300,400' rel='stylesheet' type='text/css'>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="mobile_header"><span class="site-title-mobile">FYNSKE FÅREAVLERES</span>
	<div id="mobile_button"></div>
</div>
<nav id="mobile_menu" role="navigation" class="hidden">
<?php wp_nav_menu( array( 'theme_location' => 'mobile_menu', 'walker' => new OVES_Walker_Mobile_Nav()) ); ?>
</nav>
<header id="header" role="banner" class="head">
<div id="header_wrap">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
</section>
<nav id="sec_menu" role="navigation">
<ul>
	<?php if (!is_user_logged_in()) {
	echo '<!--[if !IE]><!-->
	<li><a id="tilmeld" href="#"><img src="'; bloginfo('stylesheet_directory'); echo'/images/bliv_medlem.png"></a></li>
	<li><a id="logind" href="http://fynskefaareavlere.dk/wp-login.php"><img src="'; bloginfo('stylesheet_directory'); echo '/images/log_ind.png"></a></li>
	<li><a id="folgos" target="_blank" href="https://www.facebook.com/pages/Fynske-F%C3%A5reavlere/275538012493215?fref=ts"><img src="'; bloginfo('stylesheet_directory'); echo '/images/facebook.png"></a></li>
	<!--<![endif]-->
	<!--[if lt IE 9]>
	<li><a id="tilmeld-ie"><img src="'; bloginfo('stylesheet_directory'); echo '/images/bliv_medlem.png"></a></li>
	<li><a id="logind-ie" href="http://fynskefaareavlere.dk/wp-login.php"><img src="'; bloginfo('stylesheet_directory'); echo '/images/log_ind.png"><span class="sec_menu_item">Log ind</span></a></li>
	<li><a id="folgos-ie" target="_blank" href="https://www.facebook.com/pages/Fynske-F%C3%A5reavlere/275538012493215?fref=ts"><img src="'; bloginfo('stylesheet_directory'); echo '/images/facebook.png"><span class="sec_menu_item">Folg øs</span></a></li>
	<![endif]-->';
	} else {
	echo '<!--[if !IE]><!-->
	<li><a id="logud" href="'; echo wp_logout_url( home_url('/') ); echo '"><img src="'; bloginfo('stylesheet_directory'); echo '/images/log_ind.png"></a></li>
	<li><a id="folgos" target="_blank" href="https://www.facebook.com/pages/Fynske-F%C3%A5reavlere/275538012493215?fref=ts"><img src="'; bloginfo('stylesheet_directory'); echo '/images/facebook.png"></a></li>
	<!--<![endif]-->
	<!--[if lt IE 9]>
	<li><a id="logud-ie" href="'; echo wp_logout_url( home_url('/') ); echo '"><img src="'; bloginfo('stylesheet_directory'); echo '/images/log_ind.png"><span class="sec_menu_item">Log ud</span></a></li>
	<li><a id="folgos-ie" target="_blank" href="https://www.facebook.com/pages/Fynske-F%C3%A5reavlere/275538012493215?fref=ts"><img src="'; bloginfo('stylesheet_directory'); echo '/images/facebook.png"><span class="sec_menu_item">Folg øs</span></a></li>
	<![endif]-->';
	}
	?>
</ul>
</nav>
<nav id="menu" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'walker' => new OVES_Walker_Nav_Menu()) ); ?>
</nav>
</header>
</div>
<div id="wrapper" class="hfeed">
<div id="container">

<div id="tilmeld-form" class="gradient">
	<span class="close-button-tilmeld">X</span>
	<iframe name="onlinetilmelding" src="http://www.foreninglet.dk/teamenrollment/index/10cfc05a5ec7c57/3891" frameborder="0" scrolling="auto" width="540" height="650" marginwidth="5" marginheight="5" allowtransparency="true"> </iframe>
</div>

<div id="login-form" class="gradient">
	<span class="close-button-login">X</span>
	<p class="logind_text_main">- Log ind -</p>
	<p><?php wp_login_form( $args ); ?></p>
	<a href="http://fynskefaareavlere.dk/wp-login.php?action=lostpassword" class="lostpass">Glemt angangkode?</a>
</div>