<?php get_header(); ?>

    <div class="wrapper">
        <div class="bg-gray-100 py-14">
         <?php get_template_part('includes/section','popular');?>
        </div>
        <div class="my-2 md:my-5 py-7 md:py-3">
            <div class="">
                <div class="banner-tags flex justify-start md:justify-center px-4">
                    <?php if(is_active_sidebar('blog-sidebar')):?>
                        <?php dynamic_sidebar('blog-sidebar');?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="max-w-3xl mx-auto my-2">
            <?php get_template_part('includes/section','archive');?>
            <div class="box pagination-box flex justify-around py-10 " role="navigation" aria-label="Pagination Navigation">
                <?php previous_posts_link();?>
                <?php next_posts_link();?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>