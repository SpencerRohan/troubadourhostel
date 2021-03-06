<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Troubadour_Hostel
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		<?php get_template_part('includes/favinfo'); ?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( array( 'Primary Menu' ) ); ?>
				</nav>


				<!-- /nav -->
				<!-- header -->
				<header class="header clear <?php echo is_home() ? 'parallax-container' : ''; ?>">
						<?php if( is_home() ): ?>
							<div class="parallax"><img src="http://d2436y6oj07al2.cloudfront.net/assets/vbblog/2015/02/River.jpg"></div>

							<div class="brand-title">
								<div class="title">
									<h1 class="brand-troubadour">troubadour</h1>
									<h1 class="brand-hostel">HOSTEL</h1>
								</div>
								<div class="logo">
									<?php do_action('get_svg', 'tr_window'); ?>
								</div>
								<div class="slogan">
									<h4 class="brand-slogan">CHICAGO'S PREMIERE ARTIST HOSTEL</h4>
								</div>
								<div class="scroll-container">
									<span class="scroll-text">SCROLL DOWN</span>
									<span class="scroll-icon"></span>
								</div>
							</div>

						<?php endif; ?>

				</header>
				<!-- /header -->