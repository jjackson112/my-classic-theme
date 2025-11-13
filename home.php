<?php get_header(); ?>

<main>
    <section class="max-w-6xl mx-auto px-16 py-12">
        <h1 class="text-3xl font-bold mb-8 text-sky-950 text-center">
            <?php 
                // Dynamic page title depending on WP settings
                if (is_home()) {
                    echo 'Latest Posts';
                } else {
                    the_title();
                }
                }
            ?>
        </h1>
</main>