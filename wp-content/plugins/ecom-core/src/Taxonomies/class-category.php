<?php
namespace EcomCore\Taxonomies;

class Category {
    public function __construct() {
        add_action('init', [$this, 'register']);
    }

    public function register() {
        $labels = [
            'name'              => __('Product Categories', 'ecom-core'),
            'singular_name'     => __('Product Category', 'ecom-core'),
            'search_items'      => __('Search Categories', 'ecom-core'),
            'all_items'         => __('All Categories', 'ecom-core'),
            'parent_item'       => __('Parent Category', 'ecom-core'),
            'parent_item_colon' => __('Parent Category:', 'ecom-core'),
            'edit_item'         => __('Edit Category', 'ecom-core'),
            'update_item'       => __('Update Category', 'ecom-core'),
            'add_new_item'      => __('Add New Category', 'ecom-core'),
            'new_item_name'     => __('New Category Name', 'ecom-core'),
            'menu_name'         => __('Categories', 'ecom-core'),
        ];

        $args = [
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => ['slug' => 'product-category'],
            'show_in_rest'      => true,
        ];

        register_taxonomy('product_cat', ['product'], $args);
    }
}
