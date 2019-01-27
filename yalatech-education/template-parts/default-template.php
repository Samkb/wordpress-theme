<?php 
/**
 * Template Name: No sidebar
 * 
 */
get_header();
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left-wrap">
					<div class="blog-pic">
						<?php yalatech_education_post_thumbnail(); ?>
						<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</div>
					<div class="post-value">
						<a href="javascript:void(0)"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></a>
					</div>
					<div class="paragraph">
						<div class="entry-content">
							<?php
							while (have_posts() ) : the_post();

								the_content();

							endwhile;
							
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yalatech-education' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- blog-wrap section end -->


</article><!-- #post-<?php the_ID(); ?> -->
<?php

get_footer();
