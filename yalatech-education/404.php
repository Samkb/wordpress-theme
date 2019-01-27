	<?php
	/**
	 * The template for displaying 404 pages (not found)
	 *
	 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
							<h2><?php esc_html_e('Error Page', 'yalatech-education');?></h2>
							<ol class="breadcrumb">
							<li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'Home', 'yalatech-education' ); ?> </a></li>
							<li class="active"><?php esc_html_e( '404 not found', 'yalatech-education' ); ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- wrapper section end -->

		<section id="not-found">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="circles">
							<p><?php esc_attr_e('404', 'yalatech-education'); ?> </p>
							<br>
							<small><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'yalatech-education' ); ?></small>
							<br>
							<ins><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'yalatech-education' ); ?> </ins>
							<br>
							<button class="btn btn-primary"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e( 'go home', 'yalatech-education' );?> </a></button>
						</div>
					</div>
				</div>
			</div>
		
		</section>

	<?php
	get_footer();
