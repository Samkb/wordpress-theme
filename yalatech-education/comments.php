<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yalatech-education-theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$yalatech_education_comment_count = get_comments_number();
			if ( '1' === $yalatech_education_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'yalatech-education' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $yalatech_education_comment_count, 'comments title', 'yalatech-education' ) ),
					number_format_i18n( $yalatech_education_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'yalatech-education' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$args = array(
			
			'fields' => apply_filters(        
				'comment_form_default_fields', array(

				'author' =>'
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">'. 
								'<i class="fas fa-user"></i><input placeholder="'.esc_html__( 'Full Name *', 'yalatech-education' ).'" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" />'.
							'</div>
						</div>',

				'email'  => '
						<div class="col-md-6">
							<div class="form-group">' . 
								'<i class="fas fa-envelope"></i><input id="buzz-email" class="form-control" placeholder="'.esc_html__( 'Email Address *', 'yalatech-education' ).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />'  .
							'</div>
						</div>'
				)
			),

			'comment_field' => '
					<div class="col-md-12">
						<div class="form-group">
							<div class="buzz-controls">' .
								'<i class="fas fa-edit"></i><textarea id="comment" name="comment" class="form-control" placeholder="'.esc_html__( 'Comment *', 'yalatech-education' ).'" ></textarea>' .
							'</div>
						</div>
					</div>',

			'comment_notes_after' => '',

			'label_submit' =>esc_html__( 'ADD COMMENT', 'yalatech-education' ),

			'comment_notes_before' => '',
		);
		       
		comment_form($args);
		
	?>

</div><!-- #comments -->
