<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="course1 col-span-1 mx-0 py-5">
        <div class=" overflow-hidden w-full h-72 rounded-xl flex justify-center">
           
            <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class=" md:w-full h-full">
            
            <?php endif;?>


        </div>
        <div class="cat">
            <div class="title py-5">
                    <h1 class="text-3xl font-bold capitalize"><?php the_title(); ?></h1>
            </div>
            <div class="cat-title">
                <p class="uppercase text-2xl"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-5 text-center">
                <a href="<?php the_permalink(); ?>" class="text-white bg-primary-700 rounded-md font-medium py-2 px-7 text-xl md:text-xl mt-3"><?php the_field('button_text'); ?></a>
            </div>
        </div>

    </div>

<?php endwhile; else: endif; ?>
