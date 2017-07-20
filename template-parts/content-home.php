<div id="homepage">
	<div class="container">
		<?php $image = get_field('hero_image'); ?>
		<div class = "row heroWrapper" style = "background-image: url('<?php echo $image['url']; ?>')">
			<div class="col-sm-12 col-md-6 heroContent">
				<h2 id = "heroTitle" class = "mb-3">The Missing Piece In Your Project Portfolio Management</h2>
				<p id = "heroSubtitle" class = "mb-3">An effective resource management service to help youstreamline your project portfolio, align business units, & complete projects on time.</p>

				<div class="row heroButtons">
					<div class="col-sm-12 col-md-7">
					<a href = '<?php echo bloginfo('url'); ?>/free-assessment' alt = "Free Instant Assessment" title = "Free Instant Assessment"><button type="button" class="btn btn-primary btn-lg">FREE Instant Assessment</button></a>
					</div><!-- .col-sm-12 col-md-6 -->

					<div class="col-sm-12 col-md-5">
						<a href="#" data-featherlight="#hpVideo" alt = "" title = ""><button type="button" class="learnMore btn btn-outline-primary btn-lg"><i class="fa fa-play-circle" aria-hidden="true"></i> Learn More</button></a>
						<div id="hpVideo" class = "hidden">
						Homepage Video Here
					</div>
					</div><!-- .col-sm-12 col-md-6 -->
				</div><!-- .row -->
			</div><!-- .col-sm-12 col-md-6 -->

			<!--<div class="col-sm-12 col-md-6">
				<img src="<?php //echo $image['url']; ?>" alt="Hero Image">
			</div><!-- .col-sm-12 col-md-6 -->
		</div><!-- .row -->

		<div class="row mt-5">
			<div class="col-sm-12 text-center">
				<h2 class = "font-italic">We understand you're...</h2>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->

		<div class="row mt-5 homepageCards">
			
			<div class="col-sm-12 col-md-4 d-flex">
				<div class="hpCard">
					<h3 class = "mb-3">In A Time Crunch</h3>
					<i class="fa fa-clock-o mb-3 d-block text-center" aria-hidden="true"></i>
					<p>ReProject will save you time by keeping projects on schedule, streamlining business unit handoffs, and reducing surprise bottlenecks.</p>
				</div><!-- .hpCard -->
			</div><!-- .col-sm-12 col-md-4 -->

			<div class="col-sm-12 col-md-4 d-flex">
				<div class="hpCard">
					<h3 class = "mb-3">On A Tight Budget</h3>
					<i class="fa fa-usd mb-3 d-block text-center" aria-hidden="true"></i>
					<p>ReProject will save you money by not introducing new software, meaning no IT dirty work, or forced user adoption.</p>
				</div><!-- .hpCard -->
			</div><!-- .col-sm-12 col-md-4 -->

			<div class="col-sm-12 col-md-4 d-flex">
				<div class="hpCard">
					<h3 class = "mb-3">Under Pressure</h3>
					<i class="fa fa-smile-o mb-3 d-block text-center" aria-hidden="true"></i>
					<p>ReProject will save you face by rescuing existing investments, predicting resource issues, and clearing path for high priorities.</p>
				</div><!-- .hpCard -->
			</div><!-- .col-sm-12 col-md-4 -->

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #homepage -->