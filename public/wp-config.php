<?php
/**
 * WP configuration file
 */

 /* Load configuration */
require_once dirname(__DIR__) . '/config.php';

/* Absolute path to the WordPress directory */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/wp/');
}

/* Configure WordPress variables and included files */
require_once ABSPATH . 'wp-settings.php';
?>
