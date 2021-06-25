<?php
namespace Rmcc;

class SiteAnimatedPreloader {

  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'plugin_enqueue_assets'));
    
    add_filter('body_class', array($this, 'site_animated_preloader_body_class'));
    
    add_action('rmcc_before_header', 'preloader_html', 5);
  }
  
  public function site_animated_preloader_body_class($classes) {
    $stack = $classes;
  	array_push($stack, 'no-overflow');
  	return $stack;
  }
  
  public function plugin_enqueue_assets() {
    wp_enqueue_style(
      'site-animated-preloader',
      SITE_ANIMATED_PRELOADER_URL . 'public/css/site-animated-preloader.css'
    );
    wp_enqueue_script(
      'site-animated-preloader',
      SITE_ANIMATED_PRELOADER_URL . 'public/js/site-animated-preloader.js',
      'jquery',
      '1.0.0',
      true
    );
  }
}