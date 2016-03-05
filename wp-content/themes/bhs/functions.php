<?php
/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-vender', get_template_directory_uri() . '/assets/css/bundle.min.css' );
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_script( 'script-vender', get_template_directory_uri() . '/assets/js/vendors.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
?>
