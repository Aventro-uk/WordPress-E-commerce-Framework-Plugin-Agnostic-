<?php
namespace EcomCore\PostTypes;

class Order_CPT {
    public function __construct() {
        add_action('init', [$this, 'register']);
    }

    public function register() {
        $labels = [
            'name'               => __('Orders', 'ecom-core'),
            'singular_name'      => __('Order', 'ecom-core'),
            'menu_name'          => __('Orders', 'ecom-core'),
            'add_new'            => __('Add New', 'ecom-core'),
            'add_new_item'       => __('Add New Order', 'ecom-core'),
            'edit_item'          => __('Edit Order', 'ecom-core'),
            'new_item'           => __('New Order', 'ecom-core'),
            'view_item'          => __('View Order', 'ecom-core'),
            'search_items'       => __('Search Orders', 'ecom-core'),
            'not_found'          => __('No orders found', 'ecom-core'),
            'not_found_in_trash' => __('No orders found in Trash', 'ecom-core'),
        ];

        $args = [
            'labels'              => $labels,
            'public'              => false, // Orders are usually not public
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => false,
            'rewrite'             => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'supports'            => ['title', 'custom-fields'],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-clipboard',
        ];

        register_post_type('shop_order', $args);
    }
}
