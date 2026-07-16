<?php
/**
 * Plugin Name: GSWA Manager
 * Plugin URI: https://gswa.org.bd
 * Description: Custom plugin for GSWA website.
 * Version: 1.0.0
 * Author: Kazi Harunar Rashid
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

 // Helpers
require_once plugin_dir_path( __FILE__ ) . 'includes/helpers.php';

//Cust Post Type

// Load Custom Post Types for Advisor
require_once plugin_dir_path( __FILE__ ) . 'includes/cpt-gswa-advisor.php';

// Load Custom Post Types for EC member
require_once plugin_dir_path( __FILE__ ) . 'includes/cpt-gswa-ec.php';

// Load Custom Post Types for Life Member
require_once plugin_dir_path( __FILE__ ) . 'includes/cpt-gswa-lm.php';

// Load Custom Post Types for General Member

require_once plugin_dir_path( __FILE__ ) . 'includes/cpt-gswa-gm.php';

//Diplay

// Load Front-end Display Advisors function
require_once plugin_dir_path( __FILE__ ) . 'includes/display-gswa-advisors.php';
// Load Front-end Display Executive Committee(ec)Function
require_once plugin_dir_path( __FILE__ ) . 'includes/display-gswa-ec.php';
// Load Front-end Display Life Members(lm) Function
require_once plugin_dir_path( __FILE__ ) . 'includes/display-gswa-lm.php';

// Load Front-end Display General Members(gm) Function
require_once plugin_dir_path( __FILE__ ) . 'includes/display-gswa-gm.php';


//Load loads the enqueue file

require_once plugin_dir_path( __FILE__ ) . 'includes/enqueue.php';


