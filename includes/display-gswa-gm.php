<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

 


/**
 * Display Advisors
 */
function gswa_display_gm_members() {
   
    ob_start();

    
    $args = array(
        'post_type'      => 'general_member',
        'posts_per_page' => -1, //display all matching posts exists without any pagination limit.
        'post_status'    => 'publish',
        'meta_key'       => 'gm_display_order',
      // Name of your ACF field
        'orderby'        => 'meta_value_num',  // Treats the field as a number
        'order'          => 'ASC',           // ASC (1 to 9) or DESC (9 to 1)
    );
    /*===Debugging here===*/
    // gswa_log( 'TEST LOG ' . date( 'H:i:s' ) ); // calling here
    // gswa_log( 'Current layout: ' . astra_get_blog_layout() );
    /*===debugging END ====*/
    $gm_members = new WP_Query( $args );
   
     //gswa_log( 'Found ' . $gm_members->post_count . ' general_members.' ); // debug
   

    if ( $gm_members->have_posts() ) {
       

        echo '<div class="gswa-gm-member-grid">';

        while ( $gm_members->have_posts() ) {

            $gm_members->the_post();
           
           //gswa_log( 'Displaying: ' . get_the_title() ); //debug
            echo '<div class="gswa-gm-member-card">';

            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' );
            }

            
             // Display the message
            $gm_id = get_field( 'gmid' );
  
           
            $gm_portfolio   = get_field( 'gm_portfolio' );

           

           echo '<p class="gswa-gm-member">'
                 . esc_html( $gm_id ) .'<br>'
                 . esc_html( get_the_title()).'<br>'
                 . esc_html( $gm_portfolio )
                 . '</p>';

              

   /*==End adding==*/
            echo '</div>';
        }

        echo '</div>';

        wp_reset_postdata();

    } else {

        echo '<p>No General Member found.</p>';

    }

    return ob_get_clean();
}

add_shortcode( 'gswa_gm_members', 'gswa_display_gm_members' );

/*=====tested below function and above function*/

/*function gswa_display_ec_members() {
    return '<h1 style="color:red;">SHORTCODE IS WORKING!</h1>';
}

add_shortcode( 'gswa_ec_members', 'gswa_display_ec_members' );*/