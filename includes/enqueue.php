<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}



function gswa_manager_enqueue_styles() { 
    wp_enqueue_style( 'gswa-advisors', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/01-gswa-advisors.css', array(), '1.0.0' ); 
    wp_enqueue_style( 'gswa-ec', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/02-gswa-ec.css', array(), '1.0.0' ); 
    wp_enqueue_style( 'gswa-lm', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/03-gswa-lm.css', array(), '1.0.0' );
} 
add_action( 'wp_enqueue_scripts', 'gswa_manager_enqueue_styles' );
