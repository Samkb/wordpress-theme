<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yalatech-education-theme
 */

?>

</div><!-- #content -->
<section class="footer">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-part">
						<?php dynamic_sidebar( 'footer-1' ); ?>

						
					</div>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-part">
						<?php dynamic_sidebar( 'footer-2' ); ?>

						
					</div>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-part">
						<?php dynamic_sidebar( 'footer-3' ); ?>

						
					</div>
				</div>
			<?php } ?>
			<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-part">
						<?php dynamic_sidebar( 'footer-4' ); ?>

						
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<section class="copy-right">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<?php $copyright_text = get_theme_mod( 'yalatech_education_copyright' ) 
				?>
				<div class="social">
					<?php    if (!empty( $copyright_text )  ) {	 ?>
						<span><?php echo esc_attr( $copyright_text );  ?></span>
					<?php } ?>
				</div>

			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="social">
					<?php if (esc_url( get_theme_mod('yalatech_education_social_facebook') )) :?>
						<a href="<?php echo esc_url( get_theme_mod('yalatech_education_social_facebook') );?>"><i class="fab fa-facebook-f"></i></a>
					<?php endif; ?>
					
					<?php if (esc_url( get_theme_mod('yalatech_education_social_twitter') )) :?>
						<a href="<?php echo esc_url( get_theme_mod('yalatech_education_social_twitter') );?>"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					<?php if (esc_url( get_theme_mod('yalatech_education_social_instagram') )) :?>
						<a href="<?php echo esc_url( get_theme_mod('yalatech_education_social_instagram') );?>"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>
					<?php if (esc_url( get_theme_mod('yalatech_education_social_linkedin') )) :?>
						<a href="<?php echo esc_url( get_theme_mod('yalatech_education_social_linkedin') );?>"><i class="fab fa-linkedin-in"></i></a>
					<?php endif; ?>
					<?php if (esc_url( get_theme_mod('yalatech_education_social_youtube') )) :?>
						<a href="<?php echo esc_url( get_theme_mod('yalatech_education_social_youtube') );?>"><i class="fab fa-youtube"></i></a>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer">
	<div class="site-info" style="background-color: #000; ">
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s by %2$s.', 'yalatech-education' ), 'Yalatech Education', '<a href="">Yalatech Hub </a>' );
		?>
	
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
