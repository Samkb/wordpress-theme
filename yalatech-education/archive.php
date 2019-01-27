<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yalatech-education-theme
 */

get_header();
?>
<section class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="blogs">
					<?php if ( have_posts() ) : ?>

						<?php the_archive_title( '<h2 class="entry-title">', '</h2>' ); ?>
						<ol class="breadcrumb">
							<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
							<li class="active"><?php the_archive_description(); ?></li>
						</ol>
						
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</section>


<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
