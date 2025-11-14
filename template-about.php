<?php
/* 
Template Name: About Page
*/
?>

<?php get_header(); ?>

<section class="bg-slate-100 py-12 px-6 text-center">
    <h2 class="text-3xl font-bold text-sky-950 mb-8"><?php the_title(); ?></h2>
        <div>
            <figure class="flex flex-col items-center gap-4 mb-8">
                <img src="img/Dorothy-Headshot.png" class="w-60 h-60 rounded-full object-cover shadow-lg">
            </figure>
            <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
                <p class="leading-relaxed md:leading-loose text-sky-900"><?php the_content(); ?></p><br>
                <p class="font-bold text-sky-900 text-center"> - Dorothy de Long</p>
            </div>
        </div>
</section>

<?php get_footer(); ?>