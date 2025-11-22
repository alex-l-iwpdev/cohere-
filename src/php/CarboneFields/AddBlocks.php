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
	}

}
