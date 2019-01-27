<?php
/**
* Template part for displaying page content in page.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package yalatech-education-theme
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="blogs">

						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						<ol class="breadcrumb">
							<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
							<li class="active"><?php the_title( ); ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- blog-wrap section start -->
	<section class="blog-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 left-wrap">
					<div class="blog-pic">
						<?php yalatech_education_post_thumbnail(); ?>
						
					</div>
					<!-- <div class="post-value">
						<a href="javascript:void(0)"><i class="fas fa-calendar-alt"></i><?php //echo get_the_date(); ?></a>
					</div> -->
					<div class="paragraph">
						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yalatech-education' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->
					</div>
				</div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 right-wrap">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>

					<?php } ?>
				
				</div>
			</div>
		</div>
	</section>

	<!-- blog-wrap section end -->


</article><!-- #post-<?php the_ID(); ?> -->
