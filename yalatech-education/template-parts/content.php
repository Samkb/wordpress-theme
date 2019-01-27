<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yalatech-education-theme
 */

?>
<!-- blog-wrap section start -->

<section class="blog-wrap">
	<div class="container">
		<div class="row">

			<article >
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-8 left-wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="blog-pic">
						<?php yalatech_education_post_thumbnail(); ?>
						<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</div>
					<div class="post-value">
						<a href="javascript:void(0)"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></a>
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><i class="fas fa-user"></i><?php esc_html_e( 'Posted by:', 'yalatech-education' ); ?> <?php the_author(); ?></a>
						<a href="<?php comments_link(); ?>"><i class="fas fa-comments"></i> <?php esc_html_e( 'Comments', 'yalatech-education' ); ?></a>
					</div>
					<div class="paragraph">
						<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'yalatech-education' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yalatech-education' ),
							'after'  => '</div>',
						) );
						?>
					</div>


				</div> <!-- #post-<?php the_ID(); ?> -->

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
					
					<?php get_sidebar( ); ?>
				</div>


