<div id="testimonials">

<div class="container">

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div>
		<span class="titleSep"></span>
	</div>
</header><!-- .entry-header -->

<?php if( have_rows('testimonials') ): $i=0; ?>

	<div id = "featuredTestimonials" class = "mt-5">

	<?php while( have_rows('testimonials') ): the_row(); 

		// vars
		$name = get_sub_field('name');
		$title = get_sub_field('title');
		$image = get_sub_field('image');
			$url = $image['url'];
			$img_title = $image['title'];
			$alt = $image['alt'];
			$size = 'testimonial-thumb';
			$thumb = $image['sizes'][ $size ];
		$logo = get_sub_field('logo');
		$testimonial = get_sub_field('testimonial');

		?>

		<?php if ( $i % 2 == 0) { ?>

		<div class = "testimonial row mb-5">
			<div class="col-sm-12 col-md-4">
			<img class="rounded-circle mb-3"  src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $img_title; ?>" />
			</div><!-- .col-sm-12 col-md-3 -->

			<div class="col-sm-12 col-md-8">
				<h3><?php echo $name ?></h3>
				<h5><?php echo $title ?></h5>
				<img class = "testimonialLogo mb-3" src="<?php echo $logo['url']; ?>" title = "<?php echo $logo['title']; ?>" alt="<?php echo $logo['alt']; ?>">
				<p><?php echo $testimonial ?></p>
			</div><!-- .col-sm-12 col-md-9 -->
		</div><!-- .testimonial -->

		<?php } ?>

		<?php if ($i % 2 == 1) { ?>

		<div class = "testimonial row mb-5">
			<div class="col-sm-12 col-md-8">
				<h3><?php echo $name ?></h3>
				<h5><?php echo $title ?></h5>
				<p><?php echo $testimonial ?></p>
			</div><!-- .col-sm-12 col-md-9 -->

			<div class="col-sm-12 col-md-4">
				<img class="rounded-circle mb-3" src="<?php echo $image['url']; ?>" title = "<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>">
			</div><!-- .col-sm-12 col-md-3 -->
		</div><!-- .testimonial -->

		<?php }  $i++; ?>

	<?php endwhile; ?>

	</div><!-- #featuredTestimonials -->

<?php endif; ?>

</div><!-- .container -->

</div><!-- #testimonials -->