<div id="about">

<div class="container">

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<div>
		<span class="titleSep"></span>
	</div>
</header><!-- .entry-header -->

<?php
$sean = get_field('sean_headshot');
$martin = get_field('martin_headshot');
$barry = get_field('barry_headshot');
?>

<div id = "aboutBios" class = "mt-5">

<div class = "bio row">
	<div class="col-sm-12 col-md-4">
		<img class="rounded-circle mb-3" src="<?php echo $sean['url']; ?>" title = "<?php echo $sean['title']; ?>" alt="<?php echo $sean['alt']; ?>">	
	</div>

	<div class="col-sm-12 col-md-8 text-right">
		<h3>Sean Gilshannon</h3>
		<h5><?php the_field('sean_title'); ?></h5>
		<p><?php the_field('sean_bio'); ?></p>
	</div>
</div><!-- .bio -->

<div class = "bio row">
	<div class="col-sm-12 col-md-8">
		<h3>Martin Kee</h3>
		<h5><?php the_field('martin_title'); ?></h5>
		<p><?php the_field('martin_bio'); ?></p>
	</div><!-- .col-sm-12 col-md-4 -->

	<div class="col-sm-12 col-md-4">
		<img class="rounded-circle mb-3" src="<?php echo $martin['url']; ?>" title = "<?php echo $martin['title']; ?>" alt="<?php echo $martin['alt']; ?>">
	</div>
</div><!-- .bio -->

<div class = "bio row">
	<div class="col-sm-12 col-md-4">
		<img class="rounded-circle mb-3" src="<?php echo $barry['url']; ?>" title = "<?php echo $barry['title']; ?>" alt="<?php echo $barry['alt']; ?>">
	</div><!-- .col-sm-12 col-md-4 -->

	<div class="col-sm-12 col-md-8">
		<h3>Barry Smith</h3>
		<h5><?php the_field('barry_title'); ?></h5>
		<p><?php the_field('barry_bio'); ?></p>
	</div>
</div><!-- .bio -->

</div><!-- #aboutBios -->
</div><!-- .container -->

</div><!-- #about -->