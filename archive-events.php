<?php get_header(); ?>

<main class="max-w-6xl mx-auto px-6 py-12">

    <h1 class="text-3xl font-bold text-center text-sky-900 mb-10">Events</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="bg-white rounded-xl shadow p-5 hover:shadow-lg transition">
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('medium', [
                        'class' => 'w-full h-48 object-cover rounded-lg mb-4'
                    ]); ?>
                <?php endif; ?>

                <h2 class="text-xl font-semibold mb-2">
                    <a href="<?php the_permalink(); ?>" class="hover:text-sky-500">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <p class="text-gray-600 text-sm mb-4">
                    <i class="fa-regular fa-clock text-sky-950"></i>
                    <?php echo get_the_date(); ?>
                </p>

                <p class="text-gray-700">
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>

            </article>

        <?php endwhile; else : ?>
            <p>No events found.</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
