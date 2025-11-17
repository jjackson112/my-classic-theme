<?php get_header(); ?>

<main class="max-w-6xl mx-auto px-6 py-12">

    <h1 class="text-3xl font-bold text-center text-sky-900 mb-10">Events</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 pb-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="bg-white rounded-lg shadow overflow-hidden">
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium_large', [
                        'class' => 'w-full h-48 object-cover'
                    ]); ?>
                    </a>
                <?php endif; ?>

                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="<?php the_permalink(); ?>" class="hover:text-sky-300">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p class="text-md mb-2">
                        <i class="fa-regular fa-clock text-sky-950"></i>
                        <?php echo get_the_date(); ?>
                    </p>

                    <p class="excerpt text-gray-700 mb-4">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

                    <a href="<?php the_permalink(); ?>" class="text-sky-400 hover:text-sky-300 font-semibold">
                        More information →
                    </a>
                </div>
            </article>

        <?php endwhile; else : ?>
            <p>No events found.</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
