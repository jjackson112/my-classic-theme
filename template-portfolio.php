<?php
/*
Custom Portfolio Page Template
*/
?>

<?php get_header(); ?>

<section class="text-center bg-white pb-16 px-6">
    <h1 class="text-3xl font-bold text-sky-950 p-10"><?php the_title(); ?></h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 max-w-6xl mx-auto">
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/black-girl-magic.png" 
                alt="black girl smiling at camera">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Black Girl Magic<br> Houston, TX.<br> January 17, 2018</figcaption>
            </figure>
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/flex.png">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Flex<br> Madison, WI.<br> July 24, 2020</figcaption>
            </figure>
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/moment.png">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Moment, FemRockFest<br> Austin, Texas<br> July 17, 2021</figcaption>
            </figure>
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/flag.png">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Flag LGBTQIA March<br> in Washington, DC<br> November 12, 2022</figcaption>
            </figure>
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/father.png">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Father<br> Denver, Colorado<br> June 25, 2024</figcaption>
            </figure>
            <figure class="flex flex-col">
                <img class="w-full h-64 rounded-lg object-center object-cover transition-transform duration-300 ease-out hover:scale-105" 
                src="<?php echo get_template_directory_uri(); ?>/img/haircut.png">
                <figcaption class="mt-4 text-sky-950 text-md leading-tight">Haircut<br> New York City<br> March 31, 2025</figcaption>
            </figure>
        </div>
        <div class="pt-4">
            <a href="#" 
            class="inline-block bg-sky-900 hover:bg-sky-400 focus:bg-sky-700 focus:outline-none focus:ring-4 focus:ring-sky-300 text-white font-bold py-2 px-6 rounded-full transition-colors m-5">
                Recent Projects
            </a>
        </div>
</section>

<?php get_footer(); ?>
