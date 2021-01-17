<?php if( have_posts() ): while( have_posts() ): the_post();?>

     <article class="post">
                <div class="inner">
                    <div class="box post-box d-flex">
                        <div>
                            <a href="<?php the_permalink();?>" class="post-card-image-link">
                            <?php if(has_post_thumbnail()):?>

                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

                            <?php endif;?>
                            </a>
                        </div>
                        <div>
                            <h2 class="post-title text-left"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <span class="post-meta">
                            By
                            <?php
                                $fname = get_the_author_meta('first_name');
                                $lname = get_the_author_meta('last_name');
                            ?>


                            <a href="" title="" class="author"><?php echo $fname;?> <?php echo $lname;?></a>
                            in 
                            <!-- <a class="post-meta-tag" href="">  -->
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $cat): ?>

                                <a href="<?php echo get_category_link($cat->term_id);?>"class="post-meta-tag" >
                                    <?php echo $cat->name;?>
                                </a>

                            <?php endforeach;?>
    <!-- </a> -->
                            on
                            <time datetime="<?php echo get_the_date('l jS F, Y');?>"><?php echo get_the_date('l jS F, Y');?></time>
                            </span>
                            <p class="post-excerpt"><?php the_excerpt();?></p>
                        </div>
                    </div>
                </div>
            </article>


<?php endwhile; else: endif;?>