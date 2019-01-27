<?php 
/**
 * Hooks for navbar menu
 */



if ( ! function_exists( 'yalatech_education_nav_bar_menu' ) ) {
	/**
	 *	yalatech_education_nav_bar_menu
	 * @since  1.0.0
	 * @return void
	 */
	

	function yalatech_education_nav_bar_menu() { ?>



		<!-- banner section start -->
		<section class="banner">
			<nav class="navbar navbar-default" data-toggle="sticky-onscroll">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
							<span class="sr-only"><?php esc_html_e('Toggle navigation', 'yalatech-education')?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php
						wp_nav_menu( array(
							'menu'            => 'primary',
							'theme_location'  => 'menu-1',
							'container'       => 'ul',
							'container_id'    => 'navbar',
							'container_class' => 'navbar-collapse collapse',
							'menu_id'         => false,
							'menu_class'      => 'nav navbar-nav',
							'depth'           => 0,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()


						));
						?>

						<ul class="nav navbar-nav navbar-right seach-icon">
							<a href="#" id="search-btn"><i class="fas fa-search fa-2x"></i></a>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</section>

			<?php
		}

	}
	add_action( 'yalatecheducation_nav_bar', 'yalatech_education_nav_bar_menu' );


	if ( ! function_exists( 'yalatech_education_search_wrapper' ) ) {
	/**
	 *	search-wrapper
	 * @since  1.0.0
	 * @return void
	 */
	

	function yalatech_education_search_wrapper() { ?>


		<div class="hidden" id="search-wrapper">
			<form id="searchform" method="get"  action="<?php echo esc_url(site_url('/')); ?>">
				<div>
					<input type="text" name="s" id="s"  placeholder="<?php esc_html_e('Search Results for:', 'yalatech-education'); ?>" />
					<button type="submit" class="btn"><i class="fas fa-search fa-2x"></i></button>
				</div>
				<a href="#" class="close" id="close-search"><i class="fas fa-times fa-2x"></i>
				</a>
			</form>
		</div>


		<?php
	}
}

add_action( 'yalatecheducation_search_wrapper', 'yalatech_education_search_wrapper' );