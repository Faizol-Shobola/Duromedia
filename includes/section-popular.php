<div class="cont md:grid grid-cols-5 gap-x-10 sm:px-6 py-6 md:py-12 ">
<div class="col-span-3">
    <?php
    query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=1');
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <p class="text-lg pb-6 text-gray-600">Most Popular</p>
        <p class="text-2xl md:text-4xl lg:text-5xl font-bold pb-7 text-gray-900"><?php the_title(); ?></p>
        <span class=" pb-10 block">
        By
            <a href="" class="bg-secondary-400 p-1 mx-1 text-xs leading-7 text-white"><?php the_author(); ?></a>
        on
            <time datetime="30-10-2020" class=""><?php echo get_the_date('l jS F, Y');?></time>
        </span>
        <?php 
            $categories = get_the_category();
            foreach($categories as $cat): ?>

                <a class="bg-primary-500 p-1 mx-1 text-xs leading-7 text-white" href="<?php echo get_category_link($cat->term_id);?>"class="" >
                    <?php echo $cat->name;?>
                </a>

        <?php endforeach;?>

        <a class="block btn text-white bg-secondary-400 rounded-md py-3 px-7 text-md my-8 text-center capitalize w-44" href="<?php the_permalink(); ?>">Read full story</a>
</div>
<div class="col-span-2">
    <div class="">
        <img src="<?php the_post_thumbnail_url();?>" alt="Search Image" class="w-auto bg-cover bg-center">
    </div>
</div> 
<?php
        endwhile; endif;
        wp_reset_query();
    ?>
</div>
<div class=" max-w-md mx-auto my-2 px-4">
<?php get_search_form();?>
</div>