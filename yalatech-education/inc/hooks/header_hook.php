<?php 
/**
 * Hooks for the header 
 */


if ( ! function_exists( 'yalatech_education_skip_links' ) ) {
	/**
	 * Skip links
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_skip_links() { ?>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yalatech-education' ); ?></a>			
		<?php
	}
}
add_action( 'yalatecheducation_skip_links', 'yalatech_education_skip_links', 5 );



	if ( ! function_exists( 'yalatech_education_top_header' ) ) {

	/**
	 * yalatech_education_top_header
	 * @since  1.0.0
	 * @return void
	 */
	
	function yalatech_education_top_header() { ?>

		<section class="top-header">
			<div class="container">
				<div class="row">
					<?php 
					$mail 				= get_theme_mod( 'yalatech_education_theme_mail' );
					$contact 			= get_theme_mod( 'yalatech_education_theme_ph_no' );
						// $phonenumber      	= preg_replace("/[^0-9]/","",$contact);
					$address 			= get_theme_mod( 'yalatech_education_theme_location' );
					?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-common">
						<?php	if (!empty( $mail )) { ?>
							<div class="msg">
								<a href="milto:<?php echo esc_attr( antispambot( $mail ) ); ?>"><i class="far fa-envelope"></i><?php echo esc_attr( antispambot( $mail ) ); ?></a>
							</div>
						<?php } ?>
					</div>
					<?php	if (!empty( $contact )) { ?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 top-common">
							<div class="contact">
								<a href="tel:<?php echo esc_attr( $contact ); ?>"><i class="fas fa-mobile-alt"></i> <?php echo esc_attr( $contact ); ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 top-common">
						<div class="flowers">
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
		<?php
	}
}

add_action( 'yalatecheducation_header', 'yalatech_education_top_header', 10 );


if ( ! function_exists( 'yalatech_education_logo_header' ) ) {


/**
	 * yalatech_education_logo_header
	 * @since  1.0.0
	 * @return void
	 */

function yalatech_education_logo_header() { ?>



	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 header-common">
					<div class="logo">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()):
							?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
						<?php
					else:
						?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>
						<?php
					endif;
					$yalatech_education_description = get_bloginfo('description', 'display');
					if ($yalatech_education_description || is_customize_preview()):
						?>
						<p class="site-description"><?php echo $yalatech_education_description; /* WPCS: xss ok. */ ?></p>
					<?php endif;?>
				</div>
			</div>
			<?php 
			$mail 				= get_theme_mod( 'yalatech_education_theme_mail' );
			$address 			= get_theme_mod( 'yalatech_education_theme_location' );
			$btn_title 			= get_theme_mod( 'yalatech_education_theme_download_button_title' );
			$btn_url 			= get_theme_mod( 'yalatech_education_theme_download_button_url' );
			?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 header-common">
				<?php	if (!empty( $btn_title ))   { ?>
				
					<a href="<?php echo esc_url($btn_url ); ?>" target="_blank"><button class="download-btn"><i class="fa fa-download"></i> <?php echo esc_attr( $btn_title ); ?></button></a>
				<?php } ?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 header-common">
				<?php	if (!empty( $address )) { ?>
				<div class="mail">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				
					<div class="e-mail">
						<a href="#"> Location <br> <?php echo esc_attr( $address ); ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php  


}
}

add_action( 'yalatecheducation_logo_header', 'yalatech_education_logo_header', 15 );