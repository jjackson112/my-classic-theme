<header>
    <nav class="flex items-center justify-between px-6 py-4 bg-black">
        <div class="flex items-center space-x-3">
            <figure>
                <a href="<?php echo home_url(); ?>"><img src="img/improved-logo-1.png" alt="logo"></a>
            </figure>
            <a href="<?php echo home_url(); ?>" class="text-md text-sky-400 font-semibold hover:text-sky-300">Dorothy de Long</a>
        </div>
        <div class="hidden md:flex">
            <ul class="flex space-x-8">
                <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="<?php echo home_url(); ?>">Home</a></li>
                <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="about.html">About</a></li>
                <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="portfolio.html">Portfolio</a></li>
                <li><a class="text-sky-400 hover:text-sky-300 font-semibold p-5" href="blog.html">Blog</a></li>
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
            <ul>
                <li><a class="block py-2 hover:text-sky-300" href="<?php echo home_url(); ?>">Home</a></li>
                <li><a class="block py-2 hover:text-sky-300" href="about.html">About</a></li>
                <li><a class="block py-2 hover:text-sky-300" href="portfolio.html">Portfolio</a></li>
                <li><a class="block py-2 hover:text-sky-300" href="blog.html">Blog</a></li>
                <li><a class="block py-2 hover:text-sky-300" href="#contact">Contact</a></li>
            </ul>
        </div>
</header>