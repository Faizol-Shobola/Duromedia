<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-400">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize text-primary-900">Books</h1>
        </div>
    </div>
    
    <div class="books wrapper">
    <div class="books py-10 md:py-16">
        <div class="cont ">
            <div class="md:grid grid-cols-3 gap-x-13  md:gap-x-10 gap-y-10 sm:px-6 text-center">

            <?php get_template_part('includes/section','books');?>
               
            </div>
        </div>
    </div>
      <!-- testimonials section -->
    <?php $query_args = array(
        'post_type' => 'praises',
        'posts_per_page' => 2,
        'order' => 'asend'
    );

    $query = new WP_Query( $query_args ); ?>

    <div id="testimonial" class="testimonial bg-secondary-400">
        <div class="cont py-10 center">
         <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="flex items-center justify-center flex-col text-center text-primary-400">
                <div class="text-lg font-bold italic pb-4">
                    <p><?php the_content(); ?> 
                    </p>
                </div>
                <div class="rounded-full h-full w-52 md:w-24 overflow-hidden mx-auto">
                    <img src="https://lh3.googleusercontent.com/2688dFcLeyBSzTgXe_SyxD9Ft5WKrLHN_1qpVPmol2ORPJrLZVdjmErF596bBfBvE8MtEithPVWY9qpUgUiD=w188" alt="" class="w-full h-full">
                </div>
                <div class="uppercase py-5">
                    <p class="text-primary-900 font-bold">- <?php the_title(); ?> | <span class="text-secondary-900"><?php the_field('client-title'); ?></span></p>
                </div>
                <!-- <div class="">
                    <a href="" href="" class="text-white text-xl underline">A gift from me to you ></a>
                </div> -->
            </div>
        <?php endwhile; else: endif; ?>

        </div>
    </div>
    </div>


</div>

<?php get_footer(); ?>
