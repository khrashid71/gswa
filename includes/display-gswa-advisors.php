<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}




/**
 * Display Advisors
 */
function gswa_display_advisors() {

    ob_start();

    $args = array(
        'post_type'      => 'advisor',
        'posts_per_page' => -1, //display all matching posts exists without any pagination limit.
        'post_status'    => 'publish',
        'meta_key'       => 'display_order',      // Name of your ACF field
        'orderby'        => 'meta_value_num',  // Treats the field as a number
        'order'          => 'ASC',             // ASC (1 to 9) or DESC (9 to 1)
    );

    $advisors = new WP_Query( $args );

    if ( $advisors->have_posts() ) {

        echo '<div class="gswa-advisor-grid">';

        while ( $advisors->have_posts() ) {

            $advisors->the_post();

            echo '<div class="gswa-advisor-card">';

            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' );
            }

            echo '<h3>' . esc_html( get_the_title() ) . '</h3>';

            /*===adding for two fields=== */
            $designation = get_field( 'designation' );
            $portfolio   = get_field( 'portfolio' );

            if ( $designation ) {
                echo '<p class="gswa-designation">' . esc_html( $designation ) . '</p>';
            }

            if ( $portfolio ) {
                echo '<p class="gswa-portfolio">' . esc_html( $portfolio ) . '</p>';
            }

   /*==End adding==*/
            echo '</div>';
        }

        echo '</div>';

        wp_reset_postdata();

    } else {

        echo '<p>No advisors found.</p>';

    }

    return ob_get_clean();
}

add_shortcode( 'gswa_advisors', 'gswa_display_advisors' );

/*=====tested below function and above function*/

/*function gswa_display_advisors() {
    return '<h1 style="color:red;">SHORTCODE IS WORKING!</h1>';
}

add_shortcode( 'gswa_advisors', 'gswa_display_advisors' );*/