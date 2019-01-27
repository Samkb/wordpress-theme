<?php 
/**
 * Hooks for Front_page_slider
 */



if ( ! function_exists( 'yalatech_education_front_page_slider' ) ) :
	/**
	 *	yalatech_education_front_page_slider
	 * @since  1.0.0
	 * @return void
	 */
	

	function yalatech_education_front_page_slider() { 

		$no_slides = get_theme_mod( 'yalatech_education_front_page_no_of_slides', 3 );



		for ($i = 1; $i <= $no_slides; $i++) {

			$slides[$i]['image'] = get_theme_mod( 'yalatech_education_front_page_slider_image_'.$i );
			$slides[$i]['caption'] = get_theme_mod( 'yalatech_education_front_page_slider_caption_'.$i );
			$slides[$i]['desc'] = get_theme_mod( 'yalatech_education_front_page_slider_desc_'.$i );


		}
		if ( is_array( $slides ) && ! empty($slides) ): 


			?>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php 
				if( have_posts('slides') ) : 
					$i = 0; 
					foreach ($slides as $key => $slide) : 
						?>
						<li data-target="#myCarousel" data-slide-to="<?php echo esc_html($i); ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>
						<?php 
						$i++; 
					endforeach; 
				endif; 
				?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php $first_post = true;
				if( have_posts('slides') ) :
					?>
					<?php foreach ($slides as $key => $slide) : ?>
						<div class="item <?php if($first_post):echo "active"; endif; $first_post= false; ?>" >
							<img src="<?php echo esc_url( $slide['image'] ); ?>" alt="<?php echo esc_html( $slide['caption'] ); ?>" style="width:100%;">

							<div class="meta">
								<?php  if (!empty( $slide['caption'] )) { ?>
									<h1><?php echo esc_html( $slide['caption'] ); ?></h1>
								<?php } ?>
								<?php  if (!empty( $slide['desc'] )) { ?>
									<h2><?php echo esc_html( $slide['desc'] ); ?></h2>
								<?php } ?>

							</div>


						</div>
					<?php endforeach;
				endif; ?>

			</div>


			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<?php

	endif; 


}

endif;


add_action( 'yalatech_education_front_page_content', 'yalatech_education_front_page_slider', 5 );


// front-page hooks for featured page

if ( ! function_exists( 'yalatech_education_featured_page' ) ) :
	/**
	 *	yalatech_education_front_page_featured_page
	 * @since  1.0.0
	 * @return void
	 */

	function yalatech_education_featured_page() {

		if ( get_theme_mod( 'yalatech_education_options_featured_page_section_enable' ) == 1 ){

			return;
		}
		?>
		<section class="status">
			<div class="container">
				<div class="jumbo">
					<div class="row jumbo-wrap">
						<?php 

						for ($i = 1; $i <= 3; $i++){

							$select_page = get_theme_mod( 'yalatech_education_front_page_dropdownpages_setting_id'.$i );
							$icon = get_theme_mod( 'yalatech_education_front_page_icon_setting_id' .$i );

							if(!empty( $select_page )) {


								$args = array( 'p' => $select_page, 'post_type' => 'page' );


								$page = new WP_Query( $args );

								while( $page->have_posts() ): $page->the_post();
									?>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 jumbo-wrap2">

										<div class="jumbotron" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: round;">

											<i class="<?php echo esc_attr($icon); ?>"></i>
											<h2><?php the_title(); ?></h2>
											<p>
												<?php 
												$post = get_post(); 
												$content = apply_filters('the_content', $post->post_content); 

												$customExcerpt = wp_trim_words( $content, $num_words = 10, $more = '  .....' );
												echo esc_html( $customExcerpt ); ?>
											</p>
											<a class="btn-sm btn-primary" style="float: right;"  href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read More', 'yalatech-education' ) ?></a>
										</div>
									</div>
									<?php

								endwhile; wp_reset_postdata();

							}
						}

						?>

					</div>
				</div>
			</div>
		</section>

		<?php

	}

endif;

add_action( 'yalatech_education_front_page_content', 'yalatech_education_featured_page', 10 );





// welcome section

if ( ! function_exists( 'yalatech_education_welcome_section' ) ) :

	/**
	 *	yalatech_education_front_page_welcome
	 * @since  1.0.0
	 * @return void
	 */
	
	function yalatech_education_welcome_section() { 

		if ( get_theme_mod( 'yalatech_education_options_welcome_section_enable' ) == 1 ){

			return;
		}

		?>


		<section class="banner-wrap">
			<div class="container">
				<div class="row">
					<?php
					$selected_page = get_theme_mod( 'yalatech_education_welcome_section_setting' );
					

					if(!empty( $selected_page )) {

						$args = array( 'p' => $selected_page, 'post_type' => 'page' );


						$welcome_page = new WP_Query( $args );

						while( $welcome_page->have_posts() ): $welcome_page->the_post();

							?>

							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="school">

									<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/table.png" alt="table">
									<h3><?php the_title(); ?></h3>
									<p>
										<?php 
										$post = get_post(); 
										$content = apply_filters('the_content', $post->post_content); 

										$customExcerpt = wp_trim_words( $content, $num_words = 100, $more = '  .....' );
										echo esc_html( $customExcerpt );
										?>
									</p>
									
									<a href="<?php echo esc_url(get_permalink( $post->ID )); ?>" class="btn"><?php esc_html_e( 'Read More', 'yalatech-education' ) ?> </a>
								</div>
							</div>
							<?php

						endwhile; wp_reset_postdata();


						?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="school-bus">

								<?php $image 		= get_theme_mod( 'yalatech_education_welcome_page_image_setting' );
								if (!empty( $image )) { ?>
									<img src="<?php echo esc_url( $image ); ?>" alt="school-bus">'
								<?php	} else { ?>
									<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/school-bus.png">
								<?php } ?>
								

							</div>
						</div>
					</div>
				</div>
			</section>


			<?php
		}
	}

endif;

add_action( 'yalatech_education_front_page_content', 'yalatech_education_welcome_section', 15 );


// course section



if ( ! function_exists( 'yalatech_education_course_section' ) ) :
	/**
	 *	yalatech_education_front_page_course_section
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_course_section() { 
		if ( get_theme_mod( 'yalatech_education_options_courses_section_enable' ) == 1 ){

			return;
		}

		?>


		<section class="course-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="courses">
							<?php 
							$title = get_theme_mod( 'yalatech_education_theme_popular_course_title_setting' );
							$sub_title = get_theme_mod( 'yalatech_education_theme_popular_course_sub_title_setting' );

							if (!empty( $title )  ) { ?>							
								<h3><?php echo esc_attr( $title );  ?></h3>
							<?php } ?>
							<?php if (!empty( $sub_title )) { ?>
								<p>
									<?php echo esc_attr( $sub_title ); ?>
								</p>
							<?php } ?>
						</div>
					</div>
				</div>


				<div class="course-detailas">
					<div class="row">

						<?php 
						$popular_course = get_theme_mod('yalatech_education_front_page_no_of_courses', 3);
						for ($i = 1; $i <=$popular_course; $i++){

							$featured_courses = get_theme_mod( 'yalatech_education_front_page_dropdownpages_popular_course_setting_id'.$i );
							$course_duration = get_theme_mod( 'yalatech_education_front_page_course_duration' .$i );

							if(!empty( $featured_courses )) {


								$args = array( 'p' => $featured_courses, 'post_type' => 'page' );


								$course = new WP_Query( $args );

								while( $course->have_posts() ): $course->the_post();
									?>


									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="card">
											<?php if ( has_post_thumbnail() ){

												$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'yalatech-education', true );
												?>

												<img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php the_title_attribute(); ?>">
											<?php } ?>
											<div class="author">
												<small><?php the_title(); ?></small>
												<p>
													<?php 
													$post = get_post(); 
													$content = apply_filters('the_content', $post->post_content); 

													$customExcerpt = wp_trim_words( $content, $num_words = 20, $more = '  .....' );
													echo esc_html( $customExcerpt ); ?>
												</p>
											</div>
										</div>
										<div class="enroll">
											<div class="enroll-now">
												<a href="javascript:void(0)"><?php echo esc_attr($course_duration); ?> <i class="fas fa-book"></i></a>
											</div>
											<div class="enroll-now">
												<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'View More', 'yalatech-education' ) ?> <i class="fas fa-angle-right"></i></a>
											</div>
										</div>
									</div>

									<?php

								endwhile; wp_reset_postdata();

							} }

							?>

						</div>
					</div>
				</div>
			</section>


			<?php 

		}

	endif;
	add_action( 'yalatech_education_front_page_content', 'yalatech_education_course_section', 20 );



	if ( ! function_exists( 'yalatech_education_counter_skills_section' ) ) :
	/**
	 *	yalatech_education_front_page_counter_skills_sections
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_counter_skills_section() { 


		if ( get_theme_mod( 'yalatech_education_options_counter_section_enable' ) == 1 ){

			return;
		}
		?>


		<?php $counter_image 		= get_theme_mod( 'yalatech_education_counter_skill_image' ); ?>
		<section class="counter" style="background: url('<?php echo esc_url( $counter_image ); ?>');">
			<div class="container">
				<div class="row">
					<?php 

					for ($i = 1; $i <= 4; $i++){

						$counter_title 	= get_theme_mod( 'yalatech_education_counter_section_title'.$i );
						$counter_number = get_theme_mod( 'yalatech_education_counter_section_number' .$i );
						$counter_icon 	= get_theme_mod( 'yalatech_education_front_page_skill_icon_setting' .$i );

						if (!empty($counter_title) && !empty($counter_number) && !empty($counter_icon)) {

							?>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 coomon-count">
								<div class="features">
									<i class="<?php echo esc_attr( $counter_icon ); ?>"></i>
									<strong class="timer count-title count-number" data-to="<?php echo esc_attr( $counter_number ); ?>" data-speed="2500"></strong>
									<span><?php echo esc_attr( $counter_title ); ?></span>
								</div>
							</div>



						<?php } } ?>

					</div>
				</div>
			</section>


			<?php 

		}

	endif;

	add_action( 'yalatech_education_front_page_content', 'yalatech_education_counter_skills_section', 25 );


	if ( ! function_exists( 'yalatech_education_gallery_section' ) ) :
	/**
	 *	yalatech_education_front_page_gallery_sections
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_gallery_section() { 


		if ( get_theme_mod( 'yalatech_education_options_gallery_section_enable' ) == 1 ){

			return;
		}
		?>


		<section class="campus-photo">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="courses">
							<?php 
							$gallery_title = get_theme_mod( 'yalatech_education_gallery_section_title' );
							$gallery_sub_title = get_theme_mod( 'education_web_gallery_section_subtitle' );
							if (!empty( $gallery_title )  ) {
								?>

								<h3><?php echo esc_attr( $gallery_title );  ?></h3>
							<?php } ?>
							<?php if (!empty( $gallery_sub_title )) { ?>
								<p style="margin-bottom: 45px;">
									<?php echo esc_attr( $gallery_sub_title );  ?>
								</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="row">

					<?php   

					$no_of_image = get_theme_mod('yalatech_education_gallery_image_no_of_image', 3);
					for ($i = 1; $i <=$no_of_image; $i++){

						$gallery_image = get_theme_mod( 'yalatech_education_gallery_image'.$i );
						
						if(!empty( $gallery_image )){ ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="gallery">
									<a href="<?php echo esc_url( $gallery_image ); ?>" data-lightbox="mygallery"><img src="<?php echo esc_url( $gallery_image ); ?>" style=" width: 100%; height: 240px;" alt="<?php the_title_attribute(); ?>"  ></a>
								</div>
							</div>

							<?php

							
						} 
					}
					?>

					
				</div>
			</div>
		</section>


		<?php 

	}

endif;
add_action( 'yalatech_education_front_page_content', 'yalatech_education_gallery_section', 30 );


if ( ! function_exists( 'yalatech_education_testimonial_section' ) ) :
	/**
	 *	yalatech_education_front_page_testimonial_sections
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_testimonial_section() { 

		if ( get_theme_mod( 'yalatech_education_options_testimonials_section_enable' ) == 1 ){

			return;
		}

		?>

		<?php $testimonials_image 		= get_theme_mod( 'yalatech_education_testimonial_background_image' ); ?>
		<section class="testimonials" style="background: url('<?php echo esc_url( $testimonials_image ); ?>');">
			<div class="demo">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="title-wrap">
								<?php 
								$testimonial_title = get_theme_mod( 'yalatech_education_theme_testimonials_title_setting' );

								if (!empty( $testimonial_title )  ) { ?>							
									<h3><?php echo esc_attr( $testimonial_title );  ?></h3>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div id="testimonial-slider" class="owl-carousel">

								<?php 
								$no_testimonials = get_theme_mod('yalatech_education_front_page_no_of_testimonial', 3);
								for ($i = 1; $i <=$no_testimonials; $i++){

									$testimonial_content = get_theme_mod( 'yalatech_education_front_page_dropdownpages_testimonial_setting_id'.$i );
									$testimonial_post = get_theme_mod( 'yalatech_education_front_page_testimonial_post' .$i );

									if(!empty( $testimonial_content ) && !empty($testimonial_post)) {


										$args = array( 'p' => $testimonial_content, 'post_type' => 'page' );


										$new_testmonial = new WP_Query( $args );

										while( $new_testmonial->have_posts() ): $new_testmonial->the_post();
											?>
											<div class="testimonial">
												<p class="description">
													<?php 
													$post = get_post(); 
													$content = apply_filters('the_content', $post->post_content); 

													$customExcerpt = wp_trim_words( $content, $num_words = 30, $more = '  .....' );
													echo esc_html( $customExcerpt ); ?>
												</p>
												<h3 class="title"> <?php the_title(); ?></h3>
												<span class="post"><?php echo esc_attr( $testimonial_post );  ?></span>
											</div>

										<?php endwhile;
										wp_reset_postdata();

									} 
								} ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<?php 

	}

endif;
add_action( 'yalatech_education_front_page_content', 'yalatech_education_testimonial_section', 35 );



if ( ! function_exists( 'yalatech_education_recent_posts_section' ) ) :
	/**
	 *	yalatech_education_front_page_counter_skills_sections
	 * @since  1.0.0
	 * @return void
	 */
	function yalatech_education_recent_posts_section() {


		if ( get_theme_mod( 'yalatech_education_options_news_event_section_enable' ) == 1 ){

			return;
		}
		?>


		<section class="news">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="courses">
							<?php 
							$title = get_theme_mod( 'yalatech_education_theme_news_event_title_setting' );
							$sub_title = get_theme_mod( 'yalatech_education_theme_news_event_sub_title_setting' );

							if (!empty( $title )  ) { ?>							
								<h3><?php echo esc_attr( $title );  ?></h3>

							<?php } ?>
							<?php if (!empty( $sub_title )) { ?>
								<p style="margin-bottom: 45px;">
									<?php echo esc_attr( $sub_title ); ?>
								</p>
							<?php } ?>
						</div>
					</div>
				</div>


				<div class="row">
					<div id="posts">
						<?php
    // Get category ID from Theme Customizer
						$catID = get_theme_mod('yalatech_education_front_page_news_categories');

						$no_of_events = get_theme_mod('yalatech_education_theme_no_of_news_event', 3);

						query_posts(array(
							'post_type' => 'post',
							'cat' => $catID,
							'posts_per_page' => $no_of_events,
						));

						if (have_posts()) {
							while (have_posts()) { 
								the_post();

								?>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="thumbnail">
										<?php
										if ( has_post_thumbnail() ) :

											$url = get_the_post_thumbnail_url();
											

											?>
											<img class="img-responsive" style="height: 195px; width: 100%;" src=" <?php echo esc_url( $url ); ?>">
											<?php  



										else :

											?>

											<img class="img-responsive" style="height: 195px; width: 100%;" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/course1.png">

											<?php

										endif;
										?>

										<div class="caption">
											<h4><?php the_title();?></h4>
											<p>
												<?php 
												$post = get_post(); 
												$content = apply_filters('the_content', $post->post_content); 

												$customExcerpt = wp_trim_words( $content, $num_words = 40, $more = '  .......' );
												echo esc_html( $customExcerpt ); ?>
											</p>
											<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="btn btn-primary" role="button"><i class="fas fa-user"></i><?php esc_html_e( 'By:', 'yalatech-education' ); ?> <?php the_author(); ?></a> <a href="<?php the_permalink()?>" class="btn btn-info" role="button"><?php esc_html_e( 'Read More', 'yalatech-education' ) ?> </a></p>
										</div>
									</div>
								</div>
								<?php
        } // while
    } // if
    ?>
</div>

</section>



<?php 

}


endif;

add_action( 'yalatech_education_front_page_content', 'yalatech_education_recent_posts_section', 40 );





