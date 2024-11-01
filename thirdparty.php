<?php
/*
Plugin Name: Third Party URL
Text Domain: third-party-url
Domain Path: /languages
Plugin URI: http://wordpresshtml.com/
Description: Every third party url open in new window.
Version: 1.1
Author: Ketan umretiya 
Author URI: https://profiles.wordpress.org/ketanumretiya030
*/

//hook to add js
add_action('wp_head', 'ket_thirdparty_js_front');
function ket_thirdparty_js_front()
  {
					

							wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
					
					wp_enqueue_script( 'ket_thirdparty_js', plugin_dir_url( __FILE__ ) . 'js/general.js' );
					
					wp_localize_script( 'ket_thirdparty_js', 'ket_url', get_home_url() );
	

					
  }
 
