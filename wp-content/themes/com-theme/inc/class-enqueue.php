<?php
/**
 * Enqueue scripts and styles
 */
class Ecom_Enqueue {
    public static function init() {
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_scripts']);
        add_action('admin_enqueue_scripts', [__CLASS__, 'admin_enqueue_scripts']);
    }

    public static function enqueue_scripts() {
        // Styles
        wp_enqueue_style('ecom-theme', ECOM_THEME_URI . '/assets/dist/css/theme.css', [], '1.0.0');

        // Scripts
        wp_enqueue_script('ecom-theme', ECOM_THEME_URI . '/assets/dist/js/theme.js', ['jquery'], '1.0.0', true);

        // Localize for AJAX
        wp_localize_script('ecom-theme', 'ecom_ajax', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('ecom_nonce'),
        ]);
    }

    public static function admin_enqueue_scripts($hook) {
        // Admin styles (optional)
        wp_enqueue_style('ecom-admin', ECOM_THEME_URI . '/assets/dist/css/admin.css', [], '1.0.0');
        wp_enqueue_script('ecom-admin', ECOM_THEME_URI . '/assets/dist/js/admin.js', ['jquery'], '1.0.0', true);
    }
}
