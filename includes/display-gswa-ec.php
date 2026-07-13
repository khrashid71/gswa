<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}




/**
 * Display Advisors
 */
function gswa_display_ec_members() {

    ob_start();

    $args = array(
        'post_type'      => 'ec_member',
        'posts_per_page' => -1, //display all matching posts exists without any pagination limit.
        'post_status'    => 'publish',
        'meta_key'       => 'ec_display_order',      // Name of your ACF field
        'orderby'        => 'meta_value_num',  // Treats the field as a number
        'order'          => 'ASC',           // ASC (1 to 9) or DESC (9 to 1)
    );

    $ecmembers = new WP_Query( $args );

    if ( $ecmembers->have_posts() ) {

        echo '<div class="gswa-ec-member-grid">';

        while ( $ecmembers->have_posts() ) {

            $ecmembers->the_post();

            echo '<div class="gswa-ec-member-card">';

            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' );
            }

            echo '<h3>' . esc_html( get_the_title() ) . '</h3>';

            /*===adding for two fields=== */
            $designation = get_field( 'ec_designation' );
             // Display the message
  
            $portfolio   = get_field( 'ec_portfolio' );

            if ( $designation ) {
                echo '<p class="gswa-ecdesignation">' . esc_html( $designation ) . '</p>';
            }

            if ( $portfolio ) {
                echo '<p class="gswa-ecportfolio">' . esc_html( $portfolio ) . '</p>';
            }

   /*==End adding==*/
            echo '</div>';
        }

        echo '</div>';

        wp_reset_postdata();

    } else {

        echo '<p>No EC Member found.</p>';

    }

    return ob_get_clean();
}

add_shortcode( 'gswa_ec_members', 'gswa_display_ec_members' );

/*=====tested below function and above function*/

/*function gswa_display_ec_members() {
    return '<h1 style="color:red;">SHORTCODE IS WORKING!</h1>';
}

add_shortcode( 'gswa_ec_members', 'gswa_display_ec_members' );*/