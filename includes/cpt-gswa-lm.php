<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function gswa_register_lm_cpt() {

    $labels = array(
        'name'               => 'Life Members',
        'singular_name'      => 'Life Member',
        'menu_name'          => 'Life Members',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Life Member',
        'edit_item'          => 'Edit Life Member',
        'new_item'           => 'New Life Member',
        'view_item'          => 'View Life Member',
        'search_items'       => 'Search Life Members',
        'not_found'          => 'No Life Members found',
        'not_found_in_trash' => 'No Life Members found in Trash',
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
        'rewrite'            => array( 'slug' => 'gswa-life-member' ),
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
  // After register Menu item Like Life Members will apear
    register_post_type( 'life_member', $args ); 
}

add_action( 'init', 'gswa_register_lm_cpt' );