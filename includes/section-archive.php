<?php if( have_posts() ): while( have_posts() ): the_post();?>

     <article class="py-10 px-6 border-b-2">
                <div class="">
                    <div class="">
                        <div>
                            <a href="<?php the_permalink();?>" class="">
                            <?php if(has_post_thumbnail()):?>
                                <div class="border-8 overflow-hidden h-44 md:h-60">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="bg-cover w-full">
                                </div>

                            <?php endif;?>
                            </a>
                        </div>
                        <div class="">
                            <h2 class="text-2xl md:text-5xl font-bold py-6"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <span class="">
                            By
                                <a href="" class="bg-green-600 p-1 mx-1 text-xs leading-7 text-white"><?php the_author(); ?></a>
                            in 
                            <!-- <a class="post-meta-tag" href="">  -->
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $cat): ?>

                                <a class="bg-blue-600 p-1 mx-1 text-xs leading-7 text-white" href="<?php echo get_category_link($cat->term_id);?>"class="" >
                                    <?php echo $cat->name;?>
                                </a>

                            <?php endforeach;?>
                            <!-- </a> -->
                            on
                            <time datetime="<?php echo get_the_date('l jS F, Y');?>"><?php echo get_the_date('l jS F, Y');?></time>
                            </span>
                            <div class="py-4 text-md md:text-lg text-justify"><?php the_excerpt();?></div>
                        </div>
                    </div>
                </div>
            </article>


<?php endwhile; else: endif;?>