<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('tweet-collection', get_stylesheet_uri());
});

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});
