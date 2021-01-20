<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="course1 col-span-1 mx-0">
        <div class=" overflow-hidden w-full h-72 md:h-2/5 lg:h-72 rounded-xl flex justify-center">
           
            <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class=" md:w-full h-full">
            
            <?php endif;?>


        </div>
        <div class="content">
            <div class="title text-3xl py-5">
                <h1 class="capitalize font-bold text-center"><?php the_title(); ?></h1>
            </div>
            <div class="">
                <p class="text-justify"><?php the_excerpt();?></p>
            </div>
            <div class="mt-5 text-center">
                <a href="<?php the_field('button_link'); ?>" class="text-white bg-blue-700 rounded-md font-medium py-3 px-7  text-xl md:text-xl mt-3 w-auto"><?php the_field('button_text'); ?></a>
            </div>
        </div>

    </div>

<?php endwhile; else: endif; ?>