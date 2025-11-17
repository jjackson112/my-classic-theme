<?php 
/*
Template Name: Blog */
?>

<?php get_header(); ?>

<main>
    <section class="max-w-6xl mx-auto px-16 py-12">
        <h1 class="text-3xl font-bold mb-8 text-sky-950 text-center">
            <?php 
                // Dynamic page title depending on WP settings
                if (is_home()) {
                    echo 'Learn more about me';
                } else {
                    the_title();
                }
            ?>
        </h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <!-- Blog post card -->
                    <article class="bg-white shadow rounded-lg overflow-hidden">
                    <!-- Featured Image --> 
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', [
                                    'class' => 'w-full h-48 object-cover'
                                ]); ?>
                            </a>
                        <?php endif; ?>

                        <div class="p-6">
                            <?php 
                                $categories = get_the_category();
                                if ($categories) : ?>
                                    <span class="border border-sky-500 text-sky-500 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                        <?php echo esc_html($categories[0] -> name); ?>
                                    </span>
                                <?php endif; ?>

                            <h2 class="text-xl font-semibold mt-2 mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-sky-300">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p class="text-md mb-2">
                                <?php echo get_the_date(); ?>
                            </p>

                            <p class="excerpt text-gray-700 mb-4">
                                <?php echo wp_trim_words(get_the_excerpt(), 28); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="text-sky-400 hover:text-sky-300 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Pagination -->
    <section>
        <div class="flex justify-center gap-4 m-10 text-xl">
            <?php   
                echo paginate_links([
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                    'type' => 'plain',
                ]);
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>