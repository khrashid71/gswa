<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Write message to PHP error log
 */
function gswa_log( $message ) {

    if ( is_array( $message ) || is_object( $message ) ) {
        $message = print_r( $message, true );
    }

    error_log( '[GSWA] ' . $message );
}

