<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head> 
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta name="description" content=""> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <title><?php bloginfo('name');?></title> 

    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/Logo.svg"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"> 

    <!--Tailwind CDN--> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/config.js"></script> 

    <!--Google Fonts--> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Libre+Baskerville&display=swap" rel="stylesheet"> 
    
    <!--Font Awesome--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="[hash]" crossorigin="anonymous"> 
    
    <?php wp_head(); ?> 
</head> 

<body <?php body_class(); ?>>
    <header>
        <nav class="flex items-center justify-between px-6 py-4 bg-black">
            <div class="flex items-center space-x-3">
                <figure>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/improved-logo-1.png" alt="logo"></a>
                </figure>
                <a href="<?php echo home_url(); ?>" class="text-md text-sky-400 font-semibold hover:text-sky-300">Dorothy de Long</a>
            </div>
            <div class="hidden md:flex">
                <ul class="flex space-x-8">
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo site_url('/events'); ?>">Events</a></li>
                    <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- Mobile Hamburger -->
            <button class="md:hidden text-2xl text-sky-400" id="mobile-btn">
                <i class="fa fa-bars"></i>
            </button>
        </nav>
            <!-- MOBILE MENU: starts hidden -->
            <div id="mobile-menu" class="hidden max-h-0 overflow-hidden transition-all duration-300 ease-out flex-col bg-white px-6 py-4 space-y-4 shadow md:hidden opacity-0 transform -translate-y-2 w-56 rounded-lg absolute right-6 top-16">
            
            <!-- Close Button (X) -->
                <button id="mobileMenuClose" class="absolute top-4 right-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <ul>
                    <li><a class="block py-2 hover:text-sky-300" href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a class="block py-2 hover:text-sky-300" href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a class="block py-2 hover:text-sky-300" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
                    <li><a class="block py-2 hover:text-sky-300" href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                    <li><a class="block py-2 hover:text-sky-300" href="<?php echo site_url('/events'); ?>">Events</a></li>
                    <li><a class="block py-2 hover:text-sky-300" href="#contact">Contact</a></li>
                </ul>
            </div>
    </header>
