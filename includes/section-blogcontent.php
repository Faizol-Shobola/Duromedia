    <div class="container-fluid p-0 post-container py-5 position-relative">
        <div class="container py-3">
            <div class="topbar text-left">
                <div class="post-info position-relative mb-3 font-weight-bold">
                    <span class="post-count"></span>
                        <span class="post-category"> 
                         <?php 
                            $categories = get_the_category();
                            foreach($categories as $cat): ?>

                                <a href="<?php echo get_category_link($cat->term_id);?>"class="post-cat px-2" >
                                    <?php echo $cat->name;?>
                                </a>

                            <?php endforeach;?>
                        </span>
                </div>
                <div class="title-info position-relative">
                    <h1 class="title"><?php the_title();?></h1>
                </div>
                <div class="row post-meta position-relative">
                    <div class="col-2 col-md-1 avatar">
                        <a href="">
                            <img class="rounded-circle border border-white" src="http://duromedia.test/wp-content/themes/Dmedia/asset/images/working-with-apps-cup-coffee.jpg" alt="" width="40" height="40">
                        </a>
                    </div>
                    <div class="col-10 col-md-11 avatar-info">
                        <a href="/guide/author/vaishali/" title="Vaishali Raheja" class="author author-5eeeaaac3aee230c7c4185b2 vaishali">
                        <?php
                            $fname = get_the_author_meta('first_name');
                            $lname = get_the_author_meta('last_name');
                        ?>
                        <?php echo $fname;?> <?php echo $lname;?>
                        </a>
                        <p class="date mt-2"><?php echo get_the_date('l jS F, Y');?></p>
                    </div>
                </div>
                <div class="post-cover">
                        <?php if(has_post_thumbnail()):?>
        
                      <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">

                       <?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <div class="container single-post-except text-left pt-5">
       
        <p class="px-3"><?php the_content();?></p>
    </div>