<!-- Enqueue CSS and register menu if you want an editable menu in WP admin with wp_nav_menu()-->

<?php
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
            get_template_director_uri() . 'assets/css/style.css',
            array(),
            '1.0'
        );
    }
    add_action('wp_enqueue_scripts', 'dorothy_enqueue_styles');