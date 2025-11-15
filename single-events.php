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
            $link = get_field('site_link');
            $size = "full";
        ?>
        
        <section>
            <div class="mb-4 text-gray-600">
                <h2 class="text-3xl font-bold text-sky-950 p-10"><?php the_title(); ?></h2>
                <div class="flex justify-center">
                    <?php if($image) {
                        echo wp_get_attachment_image( $image, $size, false, array('class' => 'rounded shadow mb-4') );
                    } ?>
                </div>

                <?php if ($date) : ?>
                    <h4 class="text-lg font-medium"><?php echo esc_html($date); ?></h4>
                <?php endif; ?>

                <?php if ($time) : ?>
                    <h5 class="text-md text-gray-500"><?php echo esc_html($time); ?></h5>
                <?php endif; ?>

                
				<?php the_content(); ?>
                
                <p class="hover:text-sky-300 mt-4"><a href="<?php echo esc_url($link) ?>"Click here for more details</a></p>
            </div>
        </section>
		<?php endwhile; ?>

<?php get_footer(); ?>