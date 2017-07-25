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

<footer id = "bottomFooter" class = "container-fluid">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 text-center">
				<h3>BE MORE RESOURCEFUL</h3>
				<h5>&copy; <?php echo date('Y'); ?> </h5><img src = "<?php the_field('footer_logo', 'option'); ?>" alt = "<?php echo bloginfo('name'); ?>" title = "<?php echo bloginfo('name'); ?>">
				<div class = "links">
					<a href="<?php echo bloginfo('url'); ?>/privacy">Privacy </a>|<a href="<?php echo bloginfo('url'); ?>/terms-and-conditions"> Terms</a>
				</div>

				<span class = "d-block mt-3 d4tw">Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></span>
				</div>
		</div><!-- .row -->
	</div><!-- .container -->
</footer>

</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>