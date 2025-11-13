<!DOCTYPE html> 
<html>
<head> 
    <meta charset="utf-8"> 
    <meta name="description" content=""> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?php bloginfo('name');?></title> 

    <link rel="icon" type="image/x-icon" href="img/Logo.svg"> 
    <link rel="stylesheet" type="text/css" href="normalize.css"> 
    <link rel="stylesheet" type="text/css" href="style.css"> 

    <!--Tailwind CDN--> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/config.js"></script> 

    <!--Google Fonts--> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Libre+Baskerville&display=swap" rel="stylesheet"> 
    
    <!--Font Awesome--> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="[hash]" crossorigin="anonymous"> 
    <?php wp_head(); ?> 
</head> 

<body <?php body_class(); ?>> 
    <?php get_header(); ?>

    <?php 
        if(have_posts()) : 
            while (have_posts() ): the_post():
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        endif;
    ?>
    
    <?php get_footer(); ?>
</body>
</html>