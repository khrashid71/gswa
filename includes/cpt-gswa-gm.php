<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function gswa_register_gm_cpt() {

    $labels = array(
        'name'               => 'General Members',
        'singular_name'      => 'General Member',
        'menu_name'          => 'GM Members',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New GM Member',
        'edit_item'          => 'Edit GM Member',
        'new_item'           => 'New GM Member',
        'view_item'          => 'View GM Member',
        'search_items'       => 'Search GM Members',
        'not_found'          => 'No General Members found',
        'not_found_in_trash' => 'No General Members found in Trash',
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
        'rewrite'            => array( 'slug' => 'gswa-general-member' ),
         //transform of post type key from _ underscore into dash -
         //  which is mapping as css class
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-groups',
        'supports' => array(
        'title',
        'thumbnail',
        ),
        'show_in_rest' => true,
        'has_archive'        => true, 
        'hierarchical' => false,
    );
  // After register Menu item General Members will apear
    register_post_type( 'general_member', $args ); 
}

add_action( 'init', 'gswa_register_gm_cpt' );