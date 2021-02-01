<div class="bg-gray-100">
    <div class="cont md:grid grid-cols-5 gap-x-10 sm:px-6 py-12 md:py-20 ">
    <div class="col-span-3">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
        ?>
            <p class="text-3xl md:text-5xl lg:text-6xl font-bold pb-7 text-gray-900"><?php the_title(); ?></p>
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
    </div>
    <div class="col-span-2 pt-5 md:pt-0">
        <div class="">
            <img src="<?php the_post_thumbnail_url();?>" alt="Search Image" class="w-auto bg-cover bg-center">
        </div>
    </div> 
    <?php
            endwhile; endif;
            wp_reset_query();
        ?>
    </div>
</div>
<div class="max-w-3xl mx-auto my-20 px-4">
    <?php the_content();?>
</div>