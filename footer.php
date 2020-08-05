<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kultsifi
 */

?>

	<footer>

	<div id="footer-sidebar">
		<div id="footer-area1">
			<?php
			if(is_active_sidebar('footer-area-one')){
			dynamic_sidebar('footer-area-one');
			}
			?>
		</div>
		<div id="footer-area2">
			<?php
			if(is_active_sidebar('footer-area-two')){
			dynamic_sidebar('footer-area-two');
			}
			?>
		</div>
	</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
