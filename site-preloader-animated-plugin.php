<?php
/*
Plugin Name: Site Animated Preloader by RMcC
Plugin URI: #
Description: Adds a preloader animation to the website @ rmmc_before_header with priority 5
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: site-animated-preloader
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('SITE_ANIMATED_PRELOADER_PATH')) define('SITE_ANIMATED_PRELOADER_PATH', plugin_dir_path( __FILE__ ));
if (!defined('SITE_ANIMATED_PRELOADER_URL')) define('SITE_ANIMATED_PRELOADER_URL', plugin_dir_url( __FILE__ ));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\SiteAnimatedPreloader;

// require action functions 
require_once('inc/functions.php');