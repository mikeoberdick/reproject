<?php
/**
 * The header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/favicons/apple-touch-icon.png';?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-32x32.png';?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-16x16.png';?>">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . '/favicons/manifest.json';?>">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() . '/favicons/safari-pinned-tab.svg';?>" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<div id = "headerWrap" class="container-fluid">
		<div class="container">
			<div class="row headerArea">

				<div class="col-sm-12 col-md-4 logoContainer">
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>"><img id = "headerLogo" src = "<?php the_field('logo', 'option'); ?>"></a>
				</div><!-- logo -->

				<div class="col-sm-12 col-md-8">

					<div class="utilityHeader mt-3 mb-3">
						<a href="<?php echo bloginfo('url'); ?>/contact">Contact</a> |
						<a href="<?php echo bloginfo('url'); ?>/about">About</a> |
						<a href="<?php echo bloginfo('url'); ?>/partnerships">Partnerships</a><br />
						<p>Call: <a href = "tel:2035840741">(203) 584-0741</a></p>
					</div><!-- .utilityHeader -->

				<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-sm">

			<!-- <div class="container"> -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class = "mobileToggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
				</button>

								<?php if ( is_user_logged_in () ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'logged_in',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					);
				}

				else if ( !is_user_logged_in () ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'logged_out',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					);
				} ?>

				<a href="<?php echo bloginfo('url'); ?>/free-assessment"><button type="button" class="btn btn-primary">
FREE Assessment</button></a><!-- .col-sm-12 col-md-6 -->
			</nav><!-- .site-navigation -->
	</div><!-- .wrapper-navbar end -->

			</div><!-- .col-med-9 -->


		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .container-fluid -->

		

	
