<?php get_header(); ?>

    <div class="wrapper">
        <div class="bg-blue-200 py-14">
            <div class="cont md:grid grid-cols-2 gap-x-10 sm:px-6 py-6 md:py-12 ">
                <div class="">
                    <div class="search-img">
                        <img src="https://lh3.googleusercontent.com/yYS9OzapdIxZce4oAUYJ7k3rilW6VwkZO-5qf1QlX3WMKUjODIW8en7RT3JQoj2Zch5um_UaHZLZ3dafIwqX-Q=s0" alt="Search Image" class="w-2/4 h-full">
                    </div>
                    <div class="search-heading text-xl md:text-4xl font-bold pt-5 py-5">
                        <h2>MSG91 Guides</h2>
                    </div>
                    <div class="search-box">
                        <?php get_search_form();?>
                    </div>
                    <div id="searchClose" class="search-close" style="display: none;"></div>
                    <div id="results" style="display: none;"></div> 
                </div>
                <div class="pt-14 md:pt-0">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                        <p class="popular-text text-md pb-4 text-gray-500">Most Popular</p>
                        <p class="blog-heading text-2xl md:text-3xl font-bold pb-7 text-blue-500"><?php the_title(); ?></p>
                        <p class="blog-author pb-10">
                        <a href="<?php the_permalink(); ?>" title="<?php echo $fname;?>" class="text-gray-900">
                        <?php
                            $fname = get_the_author_meta('first_name');
                            $lname = get_the_author_meta('last_name');
                        ?>
                        <?php echo $fname;?> <?php echo $lname;?>
                        </a>&nbsp;
                        <time datetime="30-10-2020" class=""><?php echo get_the_date('l jS F, Y');?></time>
                        </p>
                        <a class="read_insights underline" href="<?php the_permalink(); ?>">Read Our Insights...</a>
                    <?php
                        endwhile; endif;
                        wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="my-2 md:my-5 py-7 md:py-3">
                <div class="">
                    <div class="banner-tags flex justify-start md:justify-center">
                        <?php if(is_active_sidebar('blog-sidebar')):?>
                            <?php dynamic_sidebar('blog-sidebar');?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-3xl mx-auto px-4 bg-red-200 h-44 my-14">
            <?php get_template_part('includes/section','archive');?>
        </div>
        <div class="box pagination-box d-flex justify-content-around mt-4 " role="navigation" aria-label="Pagination Navigation">
            <?php previous_posts_link();?>
            <?php next_posts_link();?>
        </div>
    </div>
    </div>

<?php get_footer(); ?>