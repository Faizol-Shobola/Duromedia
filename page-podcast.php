<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-red-100">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

    <div class="podcast-wrapper">
        <div class="max-w-5xl mx-auto px-8 py-10">
            <div class="md:grid grid-cols-9 gap-x-10 border-b-2 border-gray-100 pb-5">
                <div class="col-span-3 video flex justify-center py-5">
                    <div class="div w-full h-full">
                        <img src="https://lh3.googleusercontent.com/3k88S4Ff_H_wlwzCQ6rSAXxFNBoaUd3fxZa0aK-aGxM_VOHXF4JV1OEHEqWUWwHUlsX7Z-buMhMwQ94S-jboeQ=w294" class="w-full h-full">            
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="titl">
                        <h1 class="text-3xl md:text-6xl font-bold pb-5">Jumpstart your brand today.</h1>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        Bite-sized motivational truth bombs to help you get out of your own way and break new ground in life and in business. You've got superpowers within you that crave to be shared. Together, we'll unleash them. Listen and subscribe today. Welcome to Bulletproof Hustle.
                        </p>
                    </div>
                    <div class="div mt-5 md:py-0">
                        <a href="" class="text-red-400 text-xl font-medium underline">Check out the latest episode here ></a>
                    </div>
                </div>
            </div>
           <!-- <div class="">
                <div class="title pb-4">
                    <h1 class="text-4xl md:text-5xl font-bold">The highlight reel version.</h1>
                </div>
                <div class="text-lg text">
                    
                </div>
            </div> -->
                    <!-- <div class="flex flex-col md:flex-row items-center gap-x-12">
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <button href="" class="text-red-600 hover:text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-red-600 hover:bg-red-600  rounded-md font-medium py-2 px-10">I work with</button>
                        </div>
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <button href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-red-600 hover:border-red-900 bg-red-600 hover:bg-red-900 rounded-md font-medium py-2 px-10"> Work with me</button>
                        </div>
                    </div>
        </div> -->

    </div>
</div>

<?php get_footer(); ?>