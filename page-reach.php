<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-red-100">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <div class="contact-form-wrapper">
        <div class="story max-w-5xl mx-auto px-8 py-10">
            <div class="">
                <div class="title pb-4 form_wrapper">
                    <?php the_content();?>
                </div>

                <!-- <div class="text-lg">
                </div> -->
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>    