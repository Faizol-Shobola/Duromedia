<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="breadcrumb">Courses</h1>
        </div>
    </div>

    <div class="course">
        <div class="cont py-14">
            <div class="md:grid grid-cols-2 gap-y-10 md:gap-x-10 w-full">

                <?php get_template_part('includes/section','courses');?>
               
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
