<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function gswa_register_ec_cpt() {

    $labels = array(
        'name'               => 'EC Members',
        'singular_name'      => 'EC Member',
        'menu_name'          => 'EC Members',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New EC Member',
        'edit_item'          => 'Edit EC Member',
        'new_item'           => 'New EC Member',
        'view_item'          => 'View EC Member',
        'search_items'       => 'Search EC Members',
        'not_found'          => 'No EC Members found',
        'not_found_in_trash' => 'No EC Members found in Trash',
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
        'rewrite'            => array( 'slug' => 'gswa-ec-member' ),
         //transform of post type key from _ underscore into dash -
         //  which is mapping as css class
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

    register_post_type( 'ec_member', $args );
}

add_action( 'init', 'gswa_register_ec_cpt' );