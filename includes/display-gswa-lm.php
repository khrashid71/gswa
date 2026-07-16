<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Display Advisors
 */
function gswa_display_life_members() {

    ob_start();  
    gswa_log( 'Life member shortcode started.' ); //debug.log



    $args = array(
        'post_type'      => 'life_member',
        'posts_per_page' => -1, //display all matching posts exists without any pagination limit.
        'post_status'    => 'publish',
        'meta_key'       => 'lm_display_order',      // Name of your ACF field
        'orderby'        => 'meta_value_num',  // Treats the field as a number
        'order'          => 'ASC',           // ASC (1 to 9) or DESC (9 to 1)
        //'order'          =>'lm_portfolio',
    );

    $life_members = new WP_Query( $args );
    //gswa_log( 'Found ' . $life_members->post_count . ' life_members.' ); // debug
     gswa_log( astra_get_blog_layout() );

    if ( $life_members->have_posts() ) {

        echo '<div class="gswa-life-member-grid">';

        while ( $life_members->have_posts() ) {
           

            $life_members->the_post();
             
            //gswa_log( 'Displaying: ' . get_the_title() ); //debug
            echo '<div class="gswa-life-member-card">';

            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'medium' );
            }

           
          
          
            /*===adding for two fields=== */
            //$designation = get_field( 'lm_designation' );
             // Display the message

            $lm_id = get_field( 'lmid' );
  
            $lm_portfolio   = get_field( 'lm_portfolio' );

            

            /*if ( $lm_id ) {
               
                echo '<p class="gswa-life-member-id">' . esc_html( $lm_id ) . '</p>';
            }

            
             echo '<p class="gswa-life-member-name">' . esc_html( get_the_title() ) . '</p>';

            if ( $lm_portfolio ) {
                echo '<p class="gswa-life-member-portfolio">' . esc_html( $lm_portfolio ) . '</p>';
            }*/
                 echo '<p class="gswa-life-member">'
                 . esc_html( $lm_id ) .'<br>'
                 . esc_html( get_the_title()).'<br>'
                 . esc_html( $lm_portfolio )
                 . '</p>';
              
                  

   /*==End adding==*/
            echo '</div>';
        }

        echo '</div>';

        wp_reset_postdata();
        

    } else {

        echo '<p>No Life Member found.</p>';
        
      


    }

   
    gswa_log( 'Testing GSWA logging.' );

    return ob_get_clean();
}

add_shortcode( 'gswa_life_members', 'gswa_display_life_members' );

/*=====tested below function and above function*/

/*function gswa_display_ec_members() {
    return '<h1 style="color:red;">SHORTCODE IS WORKING!</h1>';
}

add_shortcode( 'gswa_ec_members', 'gswa_display_ec_members' );*/