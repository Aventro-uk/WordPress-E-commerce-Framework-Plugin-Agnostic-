<?php
namespace EcomCore\Product;

class Product_Data {
    public function __construct() {
        add_filter('ecom_get_product', [$this, 'get_product'], 10, 2);
        add_filter('ecom_get_product_price', [$this, 'get_product_price'], 10, 2);
    }

    public function get_product($product_id) {
        // Return a product object or array from your e‑commerce plugin.
        // Example with WooCommerce:
        // if (function_exists('wc_get_product')) {
        //     return wc_get_product($product_id);
        // }
        return null;
    }

    public function get_product_price($price, $product_id) {
        // Return the formatted price.
        // Example: return wc_price( get_post_meta($product_id, '_price', true) );
        return $price;
    }
}
