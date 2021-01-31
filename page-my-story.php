<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-red-100">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <!-- video section -->
    <div class="story-wrapper">
        <div class="story max-w-4xl mx-auto px-8 py-10">
            <div class="video w-auto h-auto flex justify-center py-5">
                <div class="div">
                    <img src="https://lh3.googleusercontent.com/QRpxiWj9Vdedtvj9Or1enocZd34nGjfbIvDsPrkO7Ubjq88kSRhsfkvZWyPsXUx5N4prWXyScwtjK6B0KxCbpAI=w605" class="w-full h-full">            
                </div>
            </div>
            <div class="">
                <div class="title pb-4">
                    <h1 class="text-4xl md:text-5xl font-bold">The highlight reel version.</h1>
                </div>
                <div class="text-lg text">
                    <?php 
                        the_content();
                    ?>
                </div>
                <div class="rounded-full h-full w-40 md:w-24 overflow-hidden my-6">
                    <img src="https://lh3.googleusercontent.com/2688dFcLeyBSzTgXe_SyxD9Ft5WKrLHN_1qpVPmol2ORPJrLZVdjmErF596bBfBvE8MtEithPVWY9qpUgUiD=w188" alt="" class="w-full h-full">
                </div>
                    <div class="flex flex-col md:flex-row items-center gap-x-12">
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <a href="" class="text-red-600 hover:text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-red-600 hover:bg-red-600  rounded-md font-medium py-2 px-10">I work with</a>
                        </div>
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <a href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-red-600 hover:border-red-900 bg-red-600 hover:bg-red-900 rounded-md font-medium py-2 px-10"> Work with me</a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!-- testimonials section -->
    <div class="testimonial bg-blue-500">
        <div class="cont py-10 ">
            <div class="flex items-center justify-center flex-col text-center text-white">
                <div class="text-lg font-bold italic pb-4">
                    <p>“I value people who go the extra mile to assist someone else. Darnell must live by a code of honor as I’ve seen both synergy and reciprocity in his work. Thank you for great quality and excellent customer service.” 
                    </p>
                </div>
                <div class="rounded-full h-full w-52 md:w-24 overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/2688dFcLeyBSzTgXe_SyxD9Ft5WKrLHN_1qpVPmol2ORPJrLZVdjmErF596bBfBvE8MtEithPVWY9qpUgUiD=w188" alt="" class="w-full h-full">
                </div>
                <div class="uppercase py-5 text-gray-100">
                    <p>- kellie frazier | founder of set free life events & christian lifestyle coaching</p>
                </div>
                <!-- <div class="">
                    <a href="" class="text-white text-xl underline">A gift from me to you ></a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>