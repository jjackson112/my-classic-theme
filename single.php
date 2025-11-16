<?php get_header(); ?>

<main class="max-w-3xl mx-auto px-6 py-12">
    <?php
        if (have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article class="prose max-w-none">
                    <?php if (has_post_thumbnail() ) : ?>
                        <div class="mb-8">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="text-4xl font-bold mb-4 text-sky-400"><?php the_title(); ?></h1>
                    <p class="text-gray-500 mb-8"><i class="fa-regular fa-clock text-sky-950"></i> <?php echo get_the_date(); ?></p>
                    <div class="prose max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif;
    ?>
    <div class="mt-12 flex justify-between">
        <div><?php previous_post_link('%link', '← Previous'); ?></div>
        <div><?php next_post_link('%link', 'Next →'); ?></div>
    </div>
</main>

<?php get_footer(); ?>