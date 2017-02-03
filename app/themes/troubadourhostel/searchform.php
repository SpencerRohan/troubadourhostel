<?php
/**
 * Template for displaying search forms in Troubadour Hostel
 *
 * @package WordPress
 * @subpackage Troubadour_Hostel
 * @since 1.0
 * @version 1.0
 */
?>

<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'To search, type and hit enter.', 'troubadourhostel' ); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'troubadourhostel' ); ?></button>
</form>
<!-- /search -->
