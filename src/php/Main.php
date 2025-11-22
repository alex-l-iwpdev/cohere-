<?php
/**
 * The Main class serves as the central component of the Iwpdev\Cohere namespace.
 * It provides the foundational structure for functionality related to the Cohere module.
 *
 * This class can be extended or instantiated to utilize or build upon the
 * core functionalities provided within this namespace.
 *
 * @package iwpdev/cohere
 */

namespace Iwpdev\Cohere;

use Iwpdev\Cohere\CarboneFields\AddBlocks;

/**
 * Main class.
 */
class Main {
	const THEME_VERSION = '1.0.0';

	/**
	 * Constructor for the Main class.
	 */
	public function __construct() {
		$this->init();

		new AddBlocks();
	}

	/**
	 * Init Actions and filters .
	 *
	 * @return void
	 */
	private function init(): void {
		add_action( 'wp_enqueue_scripts', [ $this, 'add_scripts_and_styles' ] );
		add_action( 'after_setup_theme', [ $this, 'theme_supports' ] );
		add_filter( 'upload_mimes', [ $this, 'svg_upload_allow' ] );
	}

	/**
	 * Add scripts and styles.
	 *
	 * @return void
	 */
	public function add_scripts_and_styles(): void {
		//add js.
		wp_enqueue_script( 'main-app', get_stylesheet_directory_uri() . '/assets/js/app.js', [ 'jquery' ], self::THEME_VERSION, true );

		//add css.
		wp_enqueue_style( 'main-app', get_stylesheet_directory_uri() . '/assets/css/app.css', [], self::THEME_VERSION );
	}

	/**
	 * Theme support.
	 *
	 * @return void
	 */
	public function theme_supports(): void {
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menu' );

		register_nav_menus(
			[
				'header_menu'         => __( 'Header Menu', 'cohere' ),
				'footer_menu'         => __( 'Footer Menu', 'cohere' ),
				'footer_menu_col_two' => __( 'Footer Menu Column Two', 'cohere' ),
			]
		);
	}

	/**
	 * Allows SVG file uploads by adding the SVG MIME type to the list of allowed file types.
	 *
	 * This method extends the list of MIME types permitted for upload in WordPress
	 * by adding support for SVG files.
	 *
	 * @param array $mimes  An associative array of currently allowed MIME types.
	 *                      Keys are file extensions, and values are MIME types.
	 *
	 * @return array Modified array of allowed MIME types including SVG support.
	 */
	public function svg_upload_allow( $mimes ): array {
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}

}
