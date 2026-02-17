<?php
/**
 * Theme setup class
 */
class Ecom_Setup {
    public static function init() {
        add_action('after_setup_theme', [__CLASS__, 'setup']);
        add_action('widgets_init', [__CLASS__, 'widgets_init']);
    }

    public static function setup() {
        // Register nav menus
        register_nav_menus([
            'primary' => __('Primary Menu', 'ecom-theme'),
            'footer'  => __('Footer Menu', 'ecom-theme'),
        ]);
    }

    public static function widgets_init() {
        register_sidebar([
            'name'          => __('Sidebar', 'ecom-theme'),
            'id'            => 'sidebar-1',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]);
    }
}
