<?php get_header(); ?>

<main>
    <section>
        <article class="max-w-3xl mx-auto px-6 py-12">
            <?php while (have_posts()) : the_post(); ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="w-full mb-8">
                    <?php the_post_thumbnail('large', [
                    'class' => 'w-full h-80 object-cover rounded-2xl shadow'
                    ]); ?>
                </div>
            <?php endif; ?>

                <h1 class="text-4xl font-bold mb-4 text-sky-400"><?php the_title(); ?></h1>
                <p class="text-gray-500 mb-8">
                    <i class="fa-regular fa-clock text-sky-950"></i>
                    <?php echo get_the_date(); ?>
                </p>

                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </article>

        <div class="max-w-3xl mx-auto px-6 mt-12 pb-10 flex justify-between font-semibold">
            <div class="hover:text-sky-300"><?php previous_post_link('%link', '← Previous'); ?></div>
            <div class="hover:text-sky-300"><?php next_post_link('%link', 'Next →'); ?></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
