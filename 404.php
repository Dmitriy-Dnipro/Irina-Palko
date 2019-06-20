<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package irynapalko
 */

get_header();
?>

	<section class="error-404 not-found">
		<div class="block">
			<img src="<?php bloginfo("template_directory"); ?>/source/build/images/common/404.jpg" alt="404">
			<a class="common-button-styles" href="/">На главную</a>
		</div>
	</section><!-- .error-404 -->

<?php
get_footer();
