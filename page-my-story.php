<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="breadcrumb">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <!-- video section -->
    <div class="story-wrapper">
        <div class="story max-w-4xl mx-auto px-8 py-10">
            <div class="video w-auto h-auto flex justify-center py-5">
                <div class="div">
                <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /img-7.jpg" alt="" class="w-full h-full">            
                </div>
            </div>
            <div class="">
                <div class="title pb-4">
                    <h1 class="text-4xl md:text-5xl font-bold">The highlight reel version.</h1>
                </div>
                <div class="text-lg text">
                    <?php 
                        the_content();
                    ?>
                </div>
                <div class="rounded-full h-full w-40 md:w-24 overflow-hidden my-6">
                    <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /img-2.jpg" alt="" class="w-full h-full">
                </div>
                    <div class="flex flex-col md:flex-row items-center gap-x-12">
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <a href="" class="text-primary-400 hover:text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-primary-400  hover:border-primary-500 hover:bg-primary-500  rounded-md font-medium py-2 px-10">I work with</a>
                        </div>
                        <div class="div py-2 md:py-0 w-full md:w-auto">
                            <a href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-primary-400 hover:border-primary-500 bg-primary-400 hover:bg-primary-500 rounded-md font-medium py-2 px-10"> Work with me</a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
   <!-- testimonials section -->
   <?php $query_args = array(
        'post_type' => 'praises',
        'posts_per_page' => 5,
        'order' => 'rand'
    );

    $query = new WP_Query( $query_args ); ?>

    <div id="testimonial" class="testimonial bg-secondary-200">
        <div class="cont py-10 center">
         <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="flex items-center justify-center flex-col text-center text-primary-400">
                <div class="text-lg font-bold italic pb-4">
                    <p><?php the_content(); ?> 
                    </p>
                </div>
                <div class="rounded-full h-full w-52 md:w-24 overflow-hidden mx-auto">
<?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="w-full h-full">
            
            <?php endif;?>                </div>
                <div class="uppercase py-5 font-bold text-primary-500">
                    <p>- <?php the_title(); ?> |<span class="text-secondary-400"> <?php the_field('client-title'); ?></span></p>
                </div>
     
            </div>
        <?php endwhile; else: endif; ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>