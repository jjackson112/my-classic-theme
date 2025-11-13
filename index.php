/*
Theme Name: Dorothy de Long Portfolio
Theme URI: http://localhost/my-classic-theme
Author: Jazz
Description: A portfolio theme showcasing photography and artwork.
Version: 1.0
*/


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
    <header class="bg-[url('<?php echo get_template_directory_uri(); ?> /img/smile.png')] bg-cover bg-no-repeat bg-top h-[675px]"> 
        <nav class="flex items-center justify-between px-6 py-4"> 
            <div class="flex items-center space-x-3"> 
                <figure> 
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/improved-logo-1.png" alt="geometric logo"></a> 
                </figure> 
                <a href="index.html" class="text-md text-sky-400 font-semibold hover:text-sky-300">Dorothy de Long</a> 
            </div> 
            <div class="hidden md:flex"> 
                <ul class="flex space-x-8"> 
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="about.html">About</a></li> 
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="portfolio.html">Portfolio</a></li> 
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="blog.html">Blog</a></li> 
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="contact.html">Contact</a></li> 
                </ul> 
            </div> 
            <!-- Mobile Hamburger --> 
             <button class="md:hidden text-2xl text-sky-400" id="mobile-btn"> 
                <i class="fa fa-bars"></i> 
            </button> 
        </nav> 
            <!-- MOBILE MENU: starts hidden --> 
             <div id="mobile-menu" class="hidden max-h-0 overflow-hidden transition-all duration-300 ease-out flex-col bg-white px-6 py-4 space-y-4 shadow md:hidden opacity-0 transform -translate-y-2 w-56 rounded-lg absolute right-6 top-16"> 
                <ul> 
                    <li><a class="block py-2 hover:text-sky-300" href="index.html">Home</a></li> 
                    <li><a class="block py-2 hover:text-sky-300" href="about.html">About</a></li> 
                    <li><a class="block py-2 hover:text-sky-300" href="portfolio.html">Portfolio</a></li> 
                    <li><a class="block py-2 hover:text-sky-300" href="blog.html">Blog</a></li> 
                    <li><a class="block py-2 hover:text-sky-300" href="#contact">Contact</a></li> 
                </ul> 
            </div> 
            <div class="flex flex-column justify-center p-10"> 
                <h1 class="text-2xl text-neutral-50">"I capture the realism behind feminism, no filter."</h1> 
            </div> 
        </header> 
        

<?php get_footer(); ?>