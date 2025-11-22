<?php
/**
 * Intro Section Block Template.
 *
 * @package iwpdev/cohere
 */

use Iwpdev\Cohere\Helpers\FrontEnd;

$fields     = $args['fields'];
$attributes = $args['attributes'];

$additional_class = $attributes['className'] ?? '';

if ( ! empty( $fields['background_color'] ) ) {
	$additional_class .= $fields['background_color'];
}

?>
<section class="description <?php echo esc_attr( $additional_class ); ?>">
	<div class="container">
		<div class="row">
			<div class="col">
				<hr class="sline">
				<?php
				if ( ! empty( $fields['title'] ) ) {
					echo FrontEnd::print_title( $fields['title'], $fields['h_tag'] );
				}

				if ( ! empty( $fields['sub_title'] ) ) {
					echo wp_kses_post( wpautop( $fields['sub_title'] ) );
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<?php
				if ( ! empty( $fields['text_content'] ) ) {
					echo wp_kses_post( wpautop( $fields['text_content'] ) );
				}
				if ( ! empty( $fields['link_text'] ) || ! empty( $fields['link_url'] ) ) {
					?>
					<a class="readmore" href="<?php echo esc_url( $fields['link_url'] ?? '#' ) ?>">
						<?php echo esc_html( $fields['link_text'] ?? '' ); ?>
					</a>
				<?php } ?>
			</div>
			<div class="col-lg-6">
				<?php
				if ( ! empty( $fields['image'] ) ) {
					$image_url = wp_get_attachment_image_url( $fields['image'], 'full' );
					?>
					<img
							src="<?php echo esc_url( $image_url ); ?>"
							alt="<?php echo esc_attr( get_the_title( $fields['image'] ) ); ?>">
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<hr class="sline">
			</div>
		</div>
	</div>
</section>
