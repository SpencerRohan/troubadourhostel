<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Troubadour_Hostel
 * @since 1.0
 * @version 1.0
 */
?>
SEARCH!!
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'troubadourhostel' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('template-parts/loop'); ?>

			<?php get_template_part('template-parts/pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
