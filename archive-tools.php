<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize text-primary-400">Tools</h1>
        </div>
    </div>
    
    <div class="tools py16">
        <div class="max-w-4xl mx-auto px-8">
            <div class="flex justify-center">
                <div class="p-0 sm:px-2 md:p-7 ">
                    <p class="text-xl text-center py-3 px-4 ">Get powerful branding insights + other undeniably cool things (like this) delivered to your inbox monthly when you join the Bulletproof Hustle tribe.</p>
                </div>

            </div>
            <div class="tool">
                <?php get_template_part('includes/section','tools');?>
            
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>