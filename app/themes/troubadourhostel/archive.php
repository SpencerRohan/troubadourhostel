<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Troubadour_Hostel
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'troubadourhostel' ); ?></h1>

			<?php get_template_part('template-parts', 'loop'); ?>

			<?php get_template_part('template-parts', 'pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

