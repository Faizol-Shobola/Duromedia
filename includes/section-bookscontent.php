<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <div class="col-span-4 pb-5">
        <div class="title">
            <h1 class="text-4xl md:text-6xl font-bold pb-7"><?php the_title(); ?></h1>
        </div>
        <div class="sub-title">
            <p class="text-xl py-3">
            <?php the_content(); ?>
            </p>
        </div>
        <div class="button pt-5">
            <a href="<?php the_field('button_link'); ?>" class="btn text-white bg-primary-900 rounded-md font-medium py-3 px-7 text-xl md:text-2xl w-full md:w-auto"><?php the_field('button_text'); ?></a>
        </div>
    </div>
    <div class="w-full flex justify-center col-span-3">
        <div class=" overflow-hidden rounded-lg w-full h-4/5">
        <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="md:w-full h-full">

        <?php endif;?>      

        </div>
    </div>
<?php endwhile; else: endif; ?>
    

                
          