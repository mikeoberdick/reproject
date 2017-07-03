<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<?php if ( is_active_sidebar( 'footer_1') || is_active_sidebar( 'footer_2') || is_active_sidebar( 'footer_3') || is_active_sidebar( 'footer_4') ) { ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

	<div id = "footerWidgets" class = "row">

		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_3'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_4'); ?>
		</div>

	</div><!-- #footerWidgets -->

	</div><!-- .container -->

	<?php } ?>

	<footer id = "bottomFooter" class = "site-footer container-fluid">
		<div class="container">
			<div class="row">
			<div class="col-md-6 site-info">
				<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span>
			</div>

			<div class="col-md-6 site-info text-right">
				<a href="<?php echo bloginfo('url'); ?>/privacy">Privacy </a>|<a href="<?php echo bloginfo('url'); ?>/terms"> Terms</a>
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-sm-12 text-center">
				<span class = "d-block mt-1 d4tw">Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></span>
			</div>
		</div><!-- .row -->
		</div><!-- .container -->
	</footer>

</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>