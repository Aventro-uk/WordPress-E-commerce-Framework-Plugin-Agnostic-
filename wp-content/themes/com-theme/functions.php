<?php
/**
 * Ecom Theme functions and definitions
 */

// Define theme constants
define('ECOM_THEME_DIR', get_template_directory());
define('ECOM_THEME_URI', get_template_directory_uri());

// Load required files
require_once ECOM_THEME_DIR . '/inc/class-setup.php';
require_once ECOM_THEME_DIR . '/inc/class-enqueue.php';
require_once ECOM_THEME_DIR . '/inc/class-template-tags.php';

// Initialize theme classes
Ecom_Setup::init();
Ecom_Enqueue::init();
Ecom_Template_Tags::init();

// Additional theme setup
add_action('after_setup_theme', function() {
    // Add theme supports
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
});
