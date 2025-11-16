<?php 
/*
Template for custom post type - events
 */

get_header(); ?>

    <div class="max-w-4xl mx-auto p-6">
		<?php while ( have_posts() ) : the_post(); 
            $image = get_field('image');
            $date = get_field('date');
            $time = get_field('time');
            $link = get_field('link');
            $size = "full";
        ?>
        
        <section>
            <article class="mb-4 text-gray-600">
                <div class="flex justify-center">
                    <?php if($image) {
                        echo wp_get_attachment_image( $image, $size, false, array('class' => 'w-full h-80 object-cover rounded-2xl shadow') );
                    } ?>
                </div>
                <h2 class="text-3xl font-bold text-sky-950 pt-5 pb-5"><?php the_title(); ?></h2>

                <?php if ($date) : ?>
                    <p class="text-lg font-medium"><i class="fa-regular fa-calendar text-sky-950"></i><?php echo esc_html($date); ?></h4>
                <?php endif; ?>

                <?php if ($time) : ?>
                    <h4 class="text-lg font-medium"><i class="fa-regular fa-clock text-sky-950"></i><?php echo esc_html($time); ?></h4>
                <?php endif; ?>

				<div class="prose max-w-none mb-5">
                    <?php the_content(); ?>
                </div>
                
                <p class="hover:text-sky-300 mt-4"><a target="_blank" rel="noreferrer" href="<?php echo esc_url($link) ?>">Click here for more details</a></p>
            </article>
            <?php endwhile; ?>
        </section>
    </div>

<?php get_footer(); ?>