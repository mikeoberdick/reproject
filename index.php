<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">
	<div class="container" id="content" tabindex="-1">

	<div class="row">
	  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="brick col-sm-12 col-md-6 col-lg-4">
		
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div>
					<?php the_title( '<h3 class = "mb-3">', '</h3>' ); ?>
				</div><!-- .masonryHeader -->
				<div class = "mb-3"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
				<?php the_excerpt(); ?>
				<a href = "<?php the_permalink(); ?>"<button role = 'button' class = 'btn btn-primary'>Read More</button></a>
			</div><!-- #post-## -->
		</a>
	</div><!-- .card -->
<?php endwhile; ?>
<?php endif; ?>

	</div>

<?php understrap_pagination(); ?>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>