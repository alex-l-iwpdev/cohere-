<?php
/**
 * Hero Block template.
 *
 * @package iwpdev/cohere
 */

$fields     = $args['fields'];
$attributes = $args['attributes'];

if ( ! empty( $fields['image'] ) ) {
	$image = wp_get_attachment_image_url( $fields['image'], 'full' );
}

$additional_class = $attributes['className'] ?? '';
?>
<section class="banner <?php echo esc_attr( $additional_class ); ?>">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if ( ! empty( $image ) ) { ?>
					<img
							src="<?php echo esc_url( $image ); ?>"
							alt="<?php echo esc_attr( get_the_title( $fields['image'] ) ) ?>">
					<?php
				} else {
					echo '<p>' . esc_html__( 'No image available', 'cohere' ) . '</p>';
				}
				?>
			</div>
		</div>
	</div>
</section>
