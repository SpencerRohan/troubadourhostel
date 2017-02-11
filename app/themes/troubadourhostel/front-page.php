<?php namespace Troubadour;
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<!-- section1 -->

		<?php $sec1 = $trhostel->get_custom_post_by_title('About', "tr_overview"); ?>
		<?php $sec2 = $trhostel->get_custom_post_by_title('Partnership', "tr_overview"); ?>
		<?php $sec3 = $trhostel->get_custom_post_by_title('Residence', "tr_overview"); ?>
		<?php $sec4 = $trhostel->get_custom_post_by_title('Brouchure', "tr_overview"); ?>



		<?php if(isset($sec1)): ?>
			<section class="container section1 <?php echo $sec1->post_title; ?>">
					<div class="row">
						<div class="col-lg-12">
							<h1><?php echo $sec1->post_title; ?></h1>

							<div class="col-lg-4 featured-item">
	              <span class="featured-icon">T</span>
	              <h5><?php echo $sec2->post_title; ?></h5>
	              <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
	            </div>
	            <div class="col-lg-4 featured-item">
	              <span class="featured-icon">T</span>
	              <h5><?php echo $sec3->post_title; ?></h5>
	              <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
	            </div>
	            <div class="col-lg-4 featured-item">
	              <span class="featured-icon">T</span>
	              <h5><?php echo $sec4->post_title; ?></h5>
	              <p>Lorem ipsum dolor sit amet, ete elit consectetur adipisicing. Omnis quae, ipsam impedit eius, vero.</p>
	            </div>
						</div>
					</div>
			</section>
		<?php endif; ?>
		<!-- /section` -->

		<!-- section2 -->
		<?php if(isset($sec2)): ?>
			<section class="container section2 <?php echo $sec2->post_title; ?>">
				<div class="row">
					<div class="col-lg-12">
						<h1><?php echo $sec2->post_title; ?></h1>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<!-- /section2 -->

		<!-- section3 -->
		<?php if(isset($sec3)): ?>
			<section class="container section3 <?php echo $sec3->post_title; ?>">
				<div class="row">
					<div class="col-lg-12">
						<h1><?php echo $sec3->post_title; ?></h1>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<!-- /section3 -->

		<!-- section4 -->
		<?php if(isset($sec4)): ?>
			<section class="container section4 <?php echo $sec4->post_title; ?>">
				<div class="row">
					<div class="col-lg-12">
						<h1><?php echo $sec4->post_title; ?></h1>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<!-- /section4 -->

	</main>

<?php get_footer(); ?>