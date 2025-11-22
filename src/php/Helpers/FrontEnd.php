<?php
/**
 * Front End Helpers class.
 *
 * @package iwpdev/cohere
 */

namespace Iwpdev\Cohere\Helpers;

/**
 * FrontEnd class.
 */
class FrontEnd {


	/**
	 * Prints a title wrapped in the specified HTML heading tag.
	 *
	 * @param string $title The text to be wrapped as the title.
	 * @param string $h_tag The heading tag to use, defaults to 'h2'.
	 *
	 * @return string        The formatted title wrapped in the specified heading tag.
	 */
	public static function print_title( string $title, string $h_tag = 'h2' ): string {
		return sprintf( '<%s>%s</%s>', $h_tag, $title, $h_tag );
	}
}
