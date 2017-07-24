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

	<div class="card-deck">

	  <div class="card">
	    <img class="card-img-top" src="<?php echo $sean['url']; ?>" title = "<?php echo $sean['title']; ?>" alt="<?php echo $sean['alt']; ?>">
	    <div class="card-block">
	      <h3 class="card-title">Sean Gilshannon</h3>
	      <h5><?php the_field('sean_title'); ?></h5>
	      <p class="card-text"><?php the_field('sean_bio'); ?></p>
	    </div>
	  </div><!-- .card -->

	  <div class="card">
	    <img class="card-img-top" src="<?php echo $martin['url']; ?>" title = "<?php echo $martin['title']; ?>" alt="<?php echo $martin['alt']; ?>">
	    <div class="card-block">
	      <h3 class="card-title">Martin Kee</h3>
	      <h5><?php the_field('martin_title'); ?></h5>
	      <p class="card-text"><?php the_field('martin_bio'); ?></p>
	    </div>
	  </div><!-- .card -->

	  <div class="card">
	    <img class="card-img-top" src="<?php echo $barry['url']; ?>" title = "<?php echo $barry['title']; ?>" alt="<?php echo $barry['alt']; ?>">
	    <div class="card-block">
	      <h3 class="card-title">Barry Smith</h3>
	      <h5><?php the_field('barry_title'); ?></h5>
	      <p class="card-text"><?php the_field('barry_bio'); ?></p>
	    </div>
	  </div><!-- .card -->

	</div><!-- .card-deck -->
</div><!-- .container -->

</div><!-- #about -->