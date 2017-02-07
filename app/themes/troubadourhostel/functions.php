<?php namespace Troubadour;
/*
|--------------------------------------------------------------------------
| ☠ TROUBADOUR HOSTEL TEMPLATE BASE ☠ 
|--------------------------------------------------------------------------
| 
|
| @author Troubadour Hostel
*/

/**
 * load theme classes
 */
try {
    require get_template_directory() . '/vendor/autoload.php';
    $trhostel = new Site;
} catch(\Exception $e) {
    if(defined('WP_DEBUG') && WP_DEBUG) {
        echo $e->getMessage();
    }

    exit('<p>An error occured while loading this page. Please try again later.</p>');
}

