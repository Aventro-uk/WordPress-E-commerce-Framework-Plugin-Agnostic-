<?php
namespace EcomCore\PostTypes;

class Product_CPT {
    public function __construct() {
        add_action('init', [$this, 'register']);
    }

    public function register() {
        $labels = [
            'name'               => __('Products', 'ecom-core'),
            'singular_name'      => __('Product', 'ecom-core'),
            'menu_name'          => __('Products', 'ecom-core'),
            'add_new'            => __('Add New', 'ecom-core'),
            'add_new_item'       => __('Add New Product', 'ecom-core'),
            'edit_item'          => __('Edit Product', 'ecom-core'),
            'new_item'           => __('New Product', 'ecom-core'),
            'view_item'          => __('View Product', 'ecom-core'),
            'search_items'       => __('Search Products', 'ecom-core'),
            'not_found'          => __('No products found', 'ecom-core'),
            'not_found_in_trash' => __('No products found in Trash', 'ecom-core'),
        ];

        $args = [
            'labels'              => $labels,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => ['slug' => 'products'],
            'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest'        => true, // Gutenberg support
            'menu_icon'           => 'dashicons-cart',
        ];

        register_post_type('product', $args);
    }
}
