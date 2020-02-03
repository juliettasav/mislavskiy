<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mislavskiy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="og:url"           content="<?php echo current_location(); ?>">
	<meta property="og:type"          content="website">
	<meta property="og:title"         content="<?php echo the_title();?>">
	<meta property="og:description"   content="<?php echo the_content();?>">
	<meta property="og:image"         content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta property="fb:admins" content="745530839133151"/> -->
	<!-- <meta property="fb:app_id" content="2728565483855513"/> -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150522247-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150522247-1');
</script>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#603cba">
<meta name="theme-color" content="#ffffff">


<link rel="shortcut icon" type="image/png" href="/logo.png"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel='mask-icon' href='/wp-content/themes/mislavskiy/assets/img/logo.svg' color='grey'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
< <script>

FB.ui({
  method: 'feed',
  link: 'https://developers.facebook.com/docs/'
}, function(response){});

</script>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black">
	<div class="container">
					<a class="navbar-brand" href="http://mislavskiy.com">
		<img src="/wp-content/themes/mislavskiy/assets/img/logo.png" width="40" height="40" alt="" style="margin-right: 8px;">
		<span class="brand-name">Мастерская психопластики</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class=" flex-row-reverse collapse navbar-collapse" id="navbarNavAltMarkup">

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'ul', 'container_class' => 'navbar-nav', 'menu_class' => 'navbar-nav' ) ); ?>

		</div>
	</div>
</nav>

</header><!-- #masthead -->

	<div id="content" class="site-content">
