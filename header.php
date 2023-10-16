<?php
/**
 * The header for the sitelist theme.
 *
 * @author Tim Green
 * @package  wp_sitelist
 * @since    1.0.0
 * @version  1.0.0
 */

    //  HTML
    do_action('tha_html_before');
?>

<html class="no-js" <?php language_attributes(); ?>>
<head>
    <!-- HTML Head -->
    <?php
        do_action('tha_head_top');
        do_action('tha_head_bottom');
        wp_head();
    ?>
</head>
<body <?php body_class( );?>>

    <?php

    /*
    * Body 
    */
    do_action('tha_body_top');

    /*
    * Header 
    */

    if(! apply_filters('groundctrl_sitelist_disable_header', false)){
        do_action('tha_header_before');
        do_action('tha_header_top');
        do_action('tha_header_bottom');
        do_action('tha_header_after');
    }


    /*
    * Content 
    */
    do_action('tha_content_before');
    do_action('tha_content_top' );