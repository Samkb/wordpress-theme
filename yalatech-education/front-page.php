<?php
/**
 * Front Page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yalatech-education-theme
 */

get_header();
?>



<?php 

	/**
	 *  Hook : Yalatech Education Front Page Sections.
	 *
	 * @hooked : yalatech_education_front_page_slider - 5
	 * @hooked : yalatech_education_featured_page - 10
	 * @hooked : yalatech_education_welcome_section - 15
	 * @hooked : yalatech_education_course_section - 20
	 * @hooked : yalatech_education_counter_skills_section - 25
	 * @hooked : yalatech_education_gallery_section - 30
	 * @hooked : yalatech_education_testimonial_section - 35
	 * @hooked : yalatech_education_recent_posts_section - 40
	 */

	$action_hook = apply_filters( 'yalatech_education_front_page_section_filter', 'yalatech_education_front_page_content' );

	do_action( $action_hook );

 ?>








<?php
get_footer();
