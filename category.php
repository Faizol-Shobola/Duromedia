<?php get_header(); ?>

    <div class="wrapper">
        <div class="bg-gray-100 py-14">
         <?php get_template_part('includes/section','popular');?>
        </div>
        <div class="my-2 md:my-5 py-7 md:py-3">
            <div class="">
                <div class="banner-tags flex justify-start md:justify-center px-4">
                    <p class="text-2xl md:text-4xl lg:text-5xl font-bold pb-7 text-gray-900"><?php echo single_cat_title();?></p>
                </div>
            </div>
        </div>
        <div class="max-w-3xl mx-auto my-2">
            <?php get_template_part('includes/section','archive');?>
            <div class="box pagination-box flex justify-around mt-4 " role="navigation" aria-label="Pagination Navigation">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>