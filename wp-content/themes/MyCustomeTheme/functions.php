<?php 

// Adding CSs and JS files

function website_setup(){
    // Google Fonts
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap');
    // Font Awesome
    wp_enqueue_style('fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    // CSS Link
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(),'all');
    // JS link
    wp_enqueue_script('main',get_theme_file_uri('/js/main.js'),NULL,microtime(),true);
}

add_action('wp_enqueue_script',website_setup());
?>