<div id="contact">
	<div class="container">

<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div>
	    		<span class="titleSep"></span>
			</div>
	</header><!-- .entry-header -->
	
		<div class = "row">
			<div id = "contactInfo" class="col-sm-12 col-md-6">
				<div id = "phone" class = "mb-3"><img src="<?php echo get_stylesheet_directory_uri() . '/img/phone.png';?>"><a href="tel:<?php the_field('phone', 'option'); ?>" alt = "Call ReProject" title = "Call ReProject"><?php the_field('phone', 'options'); ?></a></div>

				<div id = "email" class = "mb-3"><img src="<?php echo get_stylesheet_directory_uri() . '/img/mail.png';?>"><a href="mailto:<?php the_field('e-mail', 'option'); ?>" alt = "E-Mail ReProject" title = "E-Mail ReProject"><?php the_field('email', 'options'); ?></a></div>

				<div id = "map"><img src="<?php echo get_stylesheet_directory_uri() . '/img/map.png';?>"><?php the_field('address_1', 'options'); ?><br /><?php the_field('address_2', 'options'); ?></div>

			</div><!-- .col-md-6 -->
			
			<div class="col-sm-12 col-md-6">
				<?php 
 
$location = get_field('map', 'options');
 
if( !empty($location) ):
?>
<div class="acf-map">
 <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>
			</div><!-- .col-md-6 -->
		</div><!-- .row -->

	</div><!-- .container -->
</div><!-- #contact -->