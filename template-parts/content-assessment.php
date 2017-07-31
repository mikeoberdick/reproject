<div id="freeAssessment">
	<div class="container">
	<?php $image = get_field('hero_image'); ?>
		<div class = "row">
			<div class="col-sm-12 col-md-6 heroContent">
				<h1 id = "heroTitle" class = "mb-3">Be More Resourceful Today</h1>
				<p>Fill out our 10 question assessment to receive instant analysis on how effective resource management can help your project portfolio management practice today.</p>

				<div class="mt-5">
					<h3 class = "font-italic">Get Your FREE Instant Assessment Now!</h3>
					<?php echo do_shortcode ('[ninja_form id=2]'); ?>
				</div><!-- .mt-5-->
				
			</div><!-- .col-sm-12 col-md-6 -->
				
			<div class="col-sm-12 col-md-6">
				<img src="<?php echo $image['url']; ?>" alt="Hero Image">
			</div><!-- .col-sm-12 col-md-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #freeAssessment -->