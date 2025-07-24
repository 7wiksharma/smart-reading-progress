<?php
/**
 * Plugin Name: Smart Reading Progress
 * Description: Shows a reading progress bar at the top of blog posts.
 * Version: 1.0
 * Author: Satwik Sharma
 */
function srp_add_progress_bar() {
    echo '<div id="srp-bar"></div>';
}
add_action('wp_body_open', 'srp_add_progress_bar');

function srp_enqueue_assets() {
    wp_enqueue_style('srp-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('srp-script', plugin_dir_url(__FILE__) . 'script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'srp_enqueue_assets');
