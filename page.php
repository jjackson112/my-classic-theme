<?php get_header(); ?>

<main class="max-w-3xl mx-auto px-6 py-16">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <article class="prose max-w-none">

                <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>

                <div class="text-lg leading-relaxed">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>
