<?php
namespace EcomCore\Api;

class Endpoints {
    public function __construct() {
        add_action('rest_api_init', [$this, 'register_routes']);
    }

    public function register_routes() {
        register_rest_route('ecom/v1', '/products', [
            'methods'  => 'GET',
            'callback' => [$this, 'get_products'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('ecom/v1', '/cart', [
            'methods'  => 'GET',
            'callback' => [$this, 'get_cart'],
            'permission_callback' => '__return_true',
        ]);
    }

    public function get_products($request) {
        // Fetch products – adapt to your e‑commerce plugin.
        $products = get_posts(['post_type' => 'product', 'posts_per_page' => 10]);
        return rest_ensure_response($products);
    }

    public function get_cart($request) {
        // Return cart data.
        return rest_ensure_response(['count' => apply_filters('ecom_get_cart_count', 0)]);
    }
}
