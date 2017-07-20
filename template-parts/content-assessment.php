<div id="freeAssessment">
	<div class="container">
		<div class = "row">
			<div class="col-sm-12 col-md-6">
				<h3 id = "heroTitle" class = "mb-3">Become More Resourceful Today</h3>
				<p>Fill out our 10 question assessment to receive instant analysis on how effective resource management can help your project portfolio management practice today.</p>
				
				<div class="mt-2">
					<h3 class = "font-italic">Get Your FREE Instant Assessment Now!</h3>
					<?php echo do_shortcode ('[ninja_form id=2]'); ?>
				</div><!-- .mt-2-->
			</div><!-- .col-sm-12 -->

			<div class="col-sm-12 col-md-6">
				<?php $image = get_field('hero_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="Free Assessment Image">
			</div><!-- .col-sm-12 col-md-6 -->
		</div><!-- .row -->

	</div><!-- .container -->
</div><!-- #freeAssessment -->