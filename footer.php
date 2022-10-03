<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crefila
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info flex justify-end items-center p-4 px-9">
			<a href="<?php echo get_site_url() ; ?>">
				2022 CREFILA INC
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
