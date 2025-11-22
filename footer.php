<?php
/**
 * Footer template file.
 *
 * @package iwpdev/cohere
 */

?>

<footer class="brown">
	<div class="container">
		<div class="row">
			<div class="col">
				<hr class="sline">
			</div>
		</div>
		<div class="row">
			<div class="col-auto">
				<?php
				if ( has_nav_menu( 'footer_menu' ) ) {
					wp_nav_menu(
							[
									'theme_location' => 'footer_menu',
									'container'      => null,
									'menu_class'     => 'menu',
									'echo'           => true,
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]
					);
				}
				?>
			</div>
			<div class="col">
				<a class="link" href="<?php echo esc_url( get_privacy_policy_url() ); ?>">
					<?php esc_html_e( 'PRIVACY POLICY', 'cohere' ); ?>
				</a>
			</div>
			<div class="col-auto">
				<?php
				if ( has_nav_menu( 'footer_menu_col_two' ) ) {
					wp_nav_menu(
							[
									'theme_location' => 'footer_menu_col_two',
									'container'      => null,
									'menu_class'     => 'soc',
									'echo'           => true,
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]
					);
				}
				?>
			</div>
		</div>
		<div class="row">
			<?php the_custom_logo(); ?>
		</div>
	</div>
</footer>
<div class="contacts-block"><i class="close">CLOSE</i>
	<h2>Every good project starts with a conversation.</h2>
	<form>
		<div class="input">
			<label for="name">First Name</label>
			<input type="text" id="first-name" name="first-name">
		</div>
		<div class="input">
			<label for="name">Last Name</label>
			<input type="text" id="last-name" name="last-name">
		</div>
		<div class="input">
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email">
		</div>
		<div class="input">
			<label for="phone">Phone Number</label>
			<input type="tel" id="phone" name="phone">
		</div>
		<div class="textarea">
			<label for="message">Message</label>
			<textarea id="message" name="message"></textarea>
		</div>
		<div class="submit">
			<button type="submit">READ MORE</button>
		</div>
	</form>
</div>
<?php wp_footer(); ?>
</body>
</html>
