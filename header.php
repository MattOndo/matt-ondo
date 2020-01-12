<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matt_Ondo
 */

$fields = get_fields(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MMW4NLP');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMW4NLP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<img src="https://mattondo.io/wp-content/uploads/2020/01/logo.svg" class="coconuttmonkey">
<div id="page" class="site white">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e(
 	'Skip to content',
 	'matt-ondo'
 ); ?></a>

	<header id="masthead" class="site-header fixed top-0 left-0 ph4 w-100 flex flex-row items-center bg-transparent z-999">
		<div class="w2">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation ml4 flex flex-row justify-end ">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e(
   	'Menu',
   	'matt-ondo'
   ); ?></button>
			<div id="menu-wrap" class="dn db-ns">
				<?php wp_nav_menu(array(
    	'theme_location' => 'menu-1',
    	'menu_id' => 'primary-menu'
    )); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php if (!is_front_page()): ?>
	<div class="w-100 db relative z-0" style="height:80px;">&zwnj;</div>
	<?php endif; ?>

	<div id="content" class="site-content">
