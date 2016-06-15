<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='https://fonts.googleapis.com/css?family=Kadwa:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<header class="cd-header is-fixed">
		<div class="cd-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/_img/logo-site.png" alt="logo-site" class="logo-site" /></a>
		</div>
		<a class="cd-primary-nav-trigger" href="#0"><span class="cd-menu-icon"></span></a> <!-- cd-primary-nav-trigger -->
	</header>
	<?php if(is_home()){
		?>
		<nav>
			<ul class="cd-primary-nav">
				<li><a href="#accueil" onClick="window.location.reload()">Accueil</a></li>
				<li><a href="#agence" onClick="window.location.reload()">Agence</a></li>
				<li><a href="#projet" onClick="window.location.reload()">Projet</a></li>
				<li><a href="#contact" onClick="window.location.reload()">Contact</a></li>
			</ul>
		</nav>
		<?php
	} else {
		?>
		<nav>
			<ul class="cd-primary-nav">
				<li><a href="<?php bloginfo('home') ?>#accueil" onClick="window.location.reload()">Accueil</a></li>
				<li><a href="<?php bloginfo('home') ?>#agence" onClick="window.location.reload()">Agence</a></li>
				<li><a href="<?php bloginfo('home') ?>#projet" onClick="window.location.reload()">Projet</a></li>
				<li><a href="<?php bloginfo('home') ?>#contact" onClick="window.location.reload()">Contact</a></li>
			</ul>
		</nav>
		<?php
	}?>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
