<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

    <div class="py-12 sm:p-9 bg-neutral-100">
    <div class="max-w-3xl mx-auto md:px-4 px-4 text-center">
        <div class="flex justify-center">
            <div class="p-0 sm:px-2 md:p-7 ">
                <p class="text-sm md:text-xl text-center py-5 px-4 ">Get powerful branding insights + other undeniably cool things (like this) delivered to your inbox monthly when you join the Bulletproof Hustle tribe.</p>
            </div>
        </div>
        <div class="flex py-5">
            <div class="flex-auto contactform">
                <?php the_content();?>
            </div>
        </div>
        
    </div>
</div>

    <?php get_footer(); ?>