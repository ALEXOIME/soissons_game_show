<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soissons-game-show
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). './style.css' ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<div class="content-header">
			<div class="content-logo">
				<img src="<?php echo get_field('logo') ?>">
			</div>
			<div class="content-title">
				<h1 class="title"><?php echo get_field('title'); ?></h1>
			</div>
			<div class="content-button-nav-menu">
				<button class="button-nav-menu" type="button">
					<div class="bar-button-burger"></div>
					<div class="bar-button-burger"></div>
					<div class="bar-button-burger"></div>
				</button>
			</div>
			<div class="content-header-image">
 				<img class="header-image" src="<?php echo get_field('image_header'); ?>">
			</div>
			<div class="content-nav-menu">
				<nav class="nav-menu">

				</nav>
			</div>
		</div>
		<div class="content-intro">
			<div class="content-title-paragraphe">
				<h2 class="title-paragraphe"><?php echo get_field('title_parag_intro') ?><span class="color-illust-tile-red"><?php echo get_field('title_parag_intro_span') ?></span></h2>
			</div>
			<div class="content-paragraphe-intro">
				<p class="parag_intro"><?php echo get_field('parag_header') ?></p>
			</div>
		</div>
		<div class="content-button-secton-main">
			<button class="button-section-main">
				<svg class="vector-arrow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve">
					<path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394
						l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393
						C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"/>
				</svg>
			</button>
		</div>
	</header>
