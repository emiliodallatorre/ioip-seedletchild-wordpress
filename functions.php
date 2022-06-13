<?php

function twentytwentyone_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_uri(),
        array('twenty-twenty-one-style'), wp_get_theme()->get('Version'));
    # Font
    wp_enqueue_style('jah-google-fonts', 'https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap', false);
}

add_action('wp_enqueue_scripts', 'twentytwentyone_styles');