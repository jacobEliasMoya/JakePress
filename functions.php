<?php
    function gather_compiled_styles() {
        wp_enqueue_style('compiled-css',get_stylesheet_directory_uri().'/assets/styles/styles.css');
    }

    add_action('wp_enqueue_scripts','gather_compiled_styles');
?>