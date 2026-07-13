<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function gswa_register_advisor_cpt() {

    $labels = array(
        'name'               => 'Advisors',
        'singular_name'      => 'Advisor',
        'menu_name'          => 'Advisors',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Advisor',
        'edit_item'          => 'Edit Advisor',
        'new_item'           => 'New Advisor',
        'view_item'          => 'View Advisor',
        'search_items'       => 'Search Advisors',
        'not_found'          => 'No advisors found',
        'not_found_in_trash' => 'No advisors found in Trash',
    );

    $args = array(

        /*
        'menu_position'      => 20,
       
        */

        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gswa-advisor' ),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-businessperson',
         'supports' => array(
        'title',
        'thumbnail',
        ),
        'show_in_rest' => true,
        'has_archive'        => true,
        'hierarchical' => false,
    );

    register_post_type( 'advisor', $args );
}

add_action( 'init', 'gswa_register_advisor_cpt' );