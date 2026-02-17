<?php
/**
 * Plugin Name: Ecom Core
 * Plugin URI:  https://github.com/yourname/wordpress-ecommerce-framework
 * Description: Core e‑commerce functionality (plugin‑agnostic).
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://example.com
 * License:     MIT
 * Text Domain: ecom-core
 */

defined('ABSPATH') || exit;

// Define plugin constants
define('ECOM_CORE_DIR', plugin_dir_path(__FILE__));
define('ECOM_CORE_URL', plugin_dir_url(__FILE__));

// Autoloader
if (file_exists(ECOM_CORE_DIR . 'vendor/autoload.php')) {
    require_once ECOM_CORE_DIR . 'vendor/autoload.php';
}

// Initialize modules on plugins_loaded
add_action('plugins_loaded', function() {
    load_plugin_textdomain('ecom-core', false, basename(ECOM_CORE_DIR) . '/languages');

    // Instantiate modules
    new EcomCore\Cart\Cart_Handler();
    new EcomCore\Checkout\Field_Manager();
    new EcomCore\Product\Product_Data();
    new EcomCore\Order\Order_Handler();
    new EcomCore\PostTypes\Product_CPT();
    new EcomCore\PostTypes\Order_CPT();
    // Add more as needed
});
