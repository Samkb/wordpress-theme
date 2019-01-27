<?php
/**
 * Custom Customizer Controls.
 */

if ( ! class_exists( 'Yalatech_Education_Dropdown_Taxonomies_Control' ) ) :
	/**
	 * Customize Control for Taxonomy Select.
	 *
	 * @since 1.0.0
	 */
	class Yalatech_Education_Dropdown_Taxonomies_Control extends WP_Customize_Control {

		/**
		 * Type of control.
		 *
		 * @var string
		 */
		public $type = 'dropdown-taxonomies';

		/**
		 * Taxonomy to list.
		 *
		 * @var string
		 */
		public $taxonomy = '';

		/**
		 * Check if multiple.
		 *
		 * @var bool
		 */
		public $multiple = false;

		/**
		 * Constructor.
		 *
		 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
		 * @param string               $id      Control ID.
		 * @param array                $args    Optional. Arguments to override class property defaults.
		 */
		public function __construct( $manager, $id, $args = array() ) {

			$taxonomy = 'category';
			if ( isset( $args['taxonomy'] ) ) {
				$taxonomy_exist = taxonomy_exists( esc_attr( $args['taxonomy'] ) );
				if ( true === $taxonomy_exist ) {
					$taxonomy = esc_attr( $args['taxonomy'] );
				}
			}
			$args['taxonomy'] = $taxonomy;
			$this->taxonomy = esc_attr( $taxonomy );

			if ( isset( $args['multiple'] ) ) {
				$this->multiple = ( true === $args['multiple'] ) ? true : false;
			}

			parent::__construct( $manager, $id, $args );
		}

		/**
		 * Render content.
		 */
		public function render_content() {

			$tax_args = array(
			'hierarchical' => 0,
			'taxonomy'     => $this->taxonomy,
			);
			$all_taxonomies = get_categories( $tax_args );
			$multiple_text = ( true === $this->multiple ) ? 'multiple' : '';
			$value = $this->value();
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<select <?php $this->link(); ?> <?php echo esc_attr( $multiple_text ); ?>>
				<?php
				printf( '<option value="%s" %s>%s</option>', '', selected( $value, '', false ), esc_html__( '&mdash; All &mdash;', 'yalatech-education' ) );
				?>
				<?php if ( ! empty( $all_taxonomies ) ) : ?>
					<?php foreach ( $all_taxonomies as $key => $tax ) : ?>
						<?php
						printf( '<option value="%s" %s>%s</option>', esc_attr( $tax->term_id ), selected( $value, $tax->term_id, false ), esc_html( $tax->name ) );
						?>
					<?php endforeach; ?>
				<?php endif; ?>
				</select>
			</label>
			<?php
		}
	}

endif;