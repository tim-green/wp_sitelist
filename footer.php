<?php
/**
 * The footer for the sitelist theme.
 *
 * @author Tim Green
 * @package  wp_sitelist
 * @since    1.0.0
 * @version  1.0.0
 */


// Content
    do_action('tha_content_bottom');
    do_action('tha_content_after');

// Footer
    if( ! apply_filters('groundctrl_sitelist_disable_footer', false)){
        do_action( 'tha_footer_before' );
		do_action( 'tha_footer_top' );
		do_action( 'tha_footer_bottom' );
		do_action( 'tha_footer_after' );
    }

// WordPress Body and Footer
    do_action('tha_body_bottom');
    wp_footer();
?>

</body>
</html>