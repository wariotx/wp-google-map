<?php
namespace Ankur\Plugins\Ank_Google_Map;
?><?php
/*
Plugin Name: Google Map
Plugin URI: https://github.com/ankurk91/wp-google-map
Description: Simple, light weight and non-bloated Google Map Plugin. Short code : <code>[ank_google_map]</code>
Version: 2.1.0
Author: Ankur Kumar
Author URI: https://ankurk91.github.io/
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: ank-google-map
Domain Path: /languages
*/
?><?php

/* No direct access */
if (!defined('ABSPATH')) die;

define('AGM_PLUGIN_VERSION', '2.1.0');
define('AGM_BASE_FILE', __FILE__);
define('AGM_API_VER', '3.26');

//Include required class files
require __DIR__ . '/inc/class-util.php';

if (is_admin() && (!defined('DOING_AJAX') || !DOING_AJAX)) {
    require __DIR__ . '/inc/class-admin.php';
    new Admin();

} else {
    require __DIR__ . '/inc/class-frontend.php';
    new Frontend();
}
