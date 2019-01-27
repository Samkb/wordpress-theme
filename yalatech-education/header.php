<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yalatech-education-theme
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'yalatech-education');?></a>
		<header id="masthead" class="site-header">

			<?php 

			/**
			 * @see  @header_hook yalatecheducation_skip_links() - 5
			 */

			/**
			 *  
			 */
			do_action( 'yalatecheducation_skip_links' );

			do_action( 'yalatecheducation_header' );


			do_action( 'yalatecheducation_logo_header' );

			 //yalatech education nav bar 

			do_action( 'yalatecheducation_nav_bar' );

			//yalatech education search wrapperr

			do_action( 'yalatecheducation_search_wrapper' );


			?>

			


		</header><!-- #masthead -->


		<div id="content" class="site-content">




