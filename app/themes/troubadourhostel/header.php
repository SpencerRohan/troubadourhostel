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

<!-- 		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
				<!-- header -->
				<header class="header clear">
						<!-- nav -->
						<nav class="nav" role="navigation">
							
						</nav>
						<!-- /nav -->

						<?php if( is_home() ): ?>
							<div class="brand-title">
								<div class="title">
									<h1 class="brand-troubadour">troubadour</h1>
									<h1 class="brand-hostel">HOSTEL</h1>
								</div>
								<div class="logo">
									<img src="https://puu.sh/tPIUU/34834f5c02.png" alt="window" >
								</div>
								<div class="slogan">
								<h4>CHICAGO'S PREMIERE ARTIST HOSTEL</h4>
								</div>
							</div>
						<?php endif; ?>
						

				</header>
				<!-- /header -->