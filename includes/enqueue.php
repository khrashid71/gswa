<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* 
*In wp_enqueue_style(), the first parameter is the handle—a unique identifier 
*that WordPress uses internally to track the stylesheet. 
*gswa-advisors,gswa-ec,gswa-lm, gswa-gm are handles.

*/

function gswa_manager_enqueue_styles() { 
    wp_enqueue_style( 'gswa-advisors', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/01-gswa-advisors.css', array(), '1.0.0' ); 
    wp_enqueue_style( 'gswa-ec', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/02-gswa-ec.css', array(), '1.0.0' ); 
    wp_enqueue_style( 'gswa-lm', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/03-gswa-lm.css', array(), '1.0.0' );
    wp_enqueue_style( 'gswa-gm', plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/04-gswa-gm.css', array(), '1.0.0' );
} 
add_action( 'wp_enqueue_scripts', 'gswa_manager_enqueue_styles' );
