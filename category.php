<?php get_header(); ?>

<main class="max-w-5xl mx-auto px-6 py-12">

    <!-- Category Title -->
    <h1 class="text-3xl font-bold text-sky-800 mb-6">
        <?php single_cat_title(); ?>
    </h1>

    <!-- Category Description (optional) -->
    <?php if (category_description()) : ?>
        <p class="text-gray-700 mb-8">
            <?php echo category_description(); ?>
        </p>
    <?php endif; ?>

    <!-- Posts Loop -->
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white shadow rounded-xl overflow-hidden hover:shadow-lg transition">

                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                        </a>
                    <?php endif; ?>

                    <div class="p-5">
                        <!-- Title -->
                        <h2 class="text-xl font-semibold text-sky-900 hover:text-sky-600">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <!-- Excerpt -->
                        <p class="text-gray-700 mt-3 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>

                        <!-- Read More -->
                        <a href="<?php the_permalink(); ?>" class="text-sky-500 hover:text-sky-400 font-medium">
                            Read more →
                        </a>
                    </div>

                </article>
            <?php endwhile; ?>

        </div>

        <!-- Pagination -->
        <div class="mt-10">
            <?php
                the_posts_pagination(array(
                    'mid_size'           => 2,
                    'prev_text'          => __('← Previous'),
                    'next_text'          => __('Next →'),
                    'screen_reader_text' => ' '
                ));
            ?>
        </div>

    <?php else : ?>

        <p class="text-gray-600 mt-10">No posts found in this category.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
