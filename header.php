<?php
/**
 * Header template file.
 *
 * @package iwpdev/cohere
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
	<link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/switzer" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				if ( has_nav_menu( 'header_menu' ) ) {
					wp_nav_menu(
							[
									'theme_location' => 'header_menu',
									'container'      => null,
									'menu_class'     => 'menu',
									'echo'           => true,
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]
					);
				}
				?>
			</div>
			<div class="col-auto">
				<?php the_custom_logo(); ?>
			</div>
		</div>
	</div>
</header>
