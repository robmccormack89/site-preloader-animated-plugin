<?php
namespace Rmcc;

class SiteAnimatedPreloader {

  public function __construct() {
    
    // enqueue plugin assets
    add_action('wp_enqueue_scripts', array($this, 'site_animated_preloader_assets'));
    
    // add the preloader markup function to rmcc_before_header theme location
    add_action('rmcc_before_header', 'preloader_html', 5);
    
    // add the relevant class to the body of the document
    add_filter('body_class', array($this, 'site_animated_preloader_body_class'));
  }
  
  public function site_animated_preloader_assets() {
    wp_enqueue_style(
      'site-animated-preloader',
      SITE_ANIMATED_PRELOADER_URL . 'public/css/site-animated-preloader.css'
    );
    
    // enqueue wp jquery. if necessary?
    // wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script(
      'site-animated-preloader',
      SITE_ANIMATED_PRELOADER_URL . 'public/js/site-animated-preloader.js',
      'jquery',
      '1.0.0',
      true
    );
  }
  
  public function site_animated_preloader_body_class($classes) {
    $stack = $classes;
  	array_push($stack, 'no-overflow');
  	return $stack;
  }

}