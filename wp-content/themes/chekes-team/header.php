<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package checkes-team
 */

$header = get_field('header', 'option');
$logo = $header['logo'] ?? [];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

	<!-- preload fonts-->
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/TTNorms-Bold.woff2" as="font" crossorigin/>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/TTNorms-Light.woff2" as="font" crossorigin/>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/TTNorms-Medium.woff2" as="font" crossorigin/>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/TTNorms-Regular.woff2" as="font" crossorigin/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'checkes-team' ); ?></a>

	<header id="masthead" class="site-header js-site-header">
		<div class="container site-header__wrepper">
			<div class="site-header__container">
				<?php if ($logo): ?>
				<div class="site-header__branding">
					<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="site-header__logo-img" src="<?php echo fws()->resizer()->newImageSize($logo, 292, 60, false); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" title="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<?php endif; ?>

				<div class="site-header__nav-outer js-nav-outer">
					<div class="site-header__nav-inner js-nav-inner">
						<nav id="site-navigation" class="site-nav">
							<?php
							/*
							 * Enable this function once it's ready to replace FE code bellow.
							 *
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'site-nav__list',
								'container'      => false
							) );
							*/
							?>

							<!--
							This HTML structure and classes must stay the same as this is how wp_nav_menu() function
							will render it.
							You can add new elements in <li> or <a> tags, but you cannot rearrange
							elements, wrap them in additional <div>s or change classes.
							//-->
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'site-nav__list',
								'container'      => false
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>

		<a href="javascript:" class="site-header__hamburger hamburger js-menu-btn"><span></span></a>
	</header>

	<div id="content" class="site-content">
