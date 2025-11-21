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

/**
 * Main class.
 */
class Main {
	/**
	 * Constructor for the Main class.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init Actions and filters .
	 *
	 * @return void
	 */
	private function init(): void {
		add_action( 'wp_enqueue_scripts', [ $this, 'add_scripts_and_styles' ] );
	}

	public function add_scripts_and_styles(): void {

	}
}
