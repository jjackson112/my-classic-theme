<?php
// Enqueue CSS and register menu if you want an editable menu in WP admin with wp_nav_menu()
    function dorothy_enqueue_styles() {
        // Tailwind CDN
        wp_enqueue_script(
            'tailwind',
            'https://cdn.tailwindcss.com',
            array(),
            null,
            false
        );

        // Optional: Your own CSS overrides (should one be added later)
        wp_enqueue_style(
            'custom-style',
            get_template_directory_uri() . 'assets/css/style.css',
            array(),
            '1.0'
        );
    }
    add_action('wp_enqueue_scripts', 'dorothy_enqueue_styles');

// Create custom post type
    function create_custom_post_types() {
        register_post_type('events',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'events' ),
            'supports'    => array('title', 'editor', 'thumbnail'),
        ));
    }
    add_action ( 'init', 'create_custom_post_types' );

// Enqueue Font Awesome icons

function enqueue_load_fa() {
    wp_enqueue_style('load-fa', 'https://use.fontawesome.com/releases/7.0.1/css/all.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );