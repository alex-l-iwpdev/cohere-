<?php
/**
 * Create carbon fields gutenberg block.
 *
 * @package iwpdev/cohere
 */

namespace Iwpdev\Cohere\CarboneFields;

use Carbon_Fields\Block;
use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Field;

/**
 * Create carbon fields gutenberg block.
 */
class AddBlocks {
	/**
	 * AddBlock constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init Actions and Filters.
	 *
	 * @return void
	 */
	private function init(): void {
		add_action( 'after_setup_theme', [ $this, 'carbon_load' ] );

		add_action( 'carbon_fields_register_fields', [ $this, 'add_blocks' ] );
	}

	/**
	 * Load Carbon Fields bootstrap class.
	 *
	 * @return void
	 */
	public function carbon_load(): void {
		Carbon_Fields::boot();
	}

	/**
	 * Add gutenberg blocks.
	 *
	 * @return void
	 */
	public function add_blocks(): void {
		//Hero Banner.
		Block::make( __( 'Heor Banner', 'cohere' ) )
			->add_fields(
				[
					Field::make( 'image', 'image', __( 'Hero Image', 'cohere' ) ),
				]
			)
			->set_category( 'cohere-blocks', __( 'Cohere Blocks', 'cohere' ), 'nametag' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/hero',
					'block',
					[
						'fields'     => $fields,
						'attributes' => $attributes,
					]
				);
			} );

		//Two-Column Content Section.
		Block::make( __( 'Two-Column Content Section', 'cohere' ) )
			->add_fields(
				[

					Field::make( 'textarea', 'title', __( 'Title', 'cohere' ) )->set_width( 80 ),
					Field::make( 'select', 'h_tag', __( 'H Tag', 'cohere' ) )
						->set_options( [
							'h1' => 'H1',
							'h2' => 'H2',
							'h3' => 'H3',
							'h4' => 'H4',
							'h5' => 'H5',
							'h6' => 'H6',
						] )->set_width( 20 ),
					Field::make( 'rich_text', 'sub_title', __( 'Sub Title', 'cohere' ) ),
					Field::make( 'rich_text', 'text_content', __( 'Content', 'cohere' ) ),
					Field::make( 'text', 'link_text', __( 'Link Text' ) )->set_width( 50 ),
					Field::make( 'text', 'link_url', __( 'Link Url' ) )->set_width( 50 ),
					Field::make( 'image', 'image', __( 'Image', 'cohere' ) ),
					Field::make( 'radio_image', 'background_color', __( 'Choose Background Color', 'cohere' ) )
						->set_options( [
							'brown'       => get_stylesheet_directory_uri() . '/assets/images/colors/brown.jpg',
							'brown-light' => get_stylesheet_directory_uri() . '/assets/images/colors/brown-light.jpg',
							'blue'        => get_stylesheet_directory_uri() . '/assets/images/colors/blue.jpg',
						] )->set_default_value( 'brown' ),
				]
			)
			->set_category( 'cohere-blocks', __( 'Cohere Blocks', 'cohere' ), 'nametag' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/two-column-content',
					'block',
					[
						'fields'     => $fields,
						'attributes' => $attributes,
					]
				);
			} );

	}

}
