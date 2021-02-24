<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">I Work With...</h1>
        </div>
    </div>

    <!-- work section -->
    <div class="work py-6 md:py-16 bg-neutral-100">
        <div class="cont ">
            <div class="md:grid grid-cols-2 gap-x-10 sm:px-6 ">
                <div class="w-full flex justify-center pt-5 md:py-0">
                    <div class="w-11/12">
                        <img src=" <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>/img-1.jpg" alt="" class="rounded-lg md:w-full h-auto">
                    </div>
                </div>
                <div class="pt-12 md:pt-0">
                    <div class="title">
                        <h1 class="text-3xl font-bold pb-7 text-secondary-400">...people like Angie</h1>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        a 34-year young, self-taught online marketer who’s married with a daughter in pre-school. She loves working from home, but her true passion is candid photography. As her own boss, Angie has to handle branding, billing, taxes, scheduling, and meetings - all of which have started to burn her out. Though her demanding clients afford her the perks of disposable income, her business isn’t growing. She isn't fulfilled. Angie wears way too many hats, works too many hours a week and spends too little time with her family.
                        </p>
                        <p class="text-xl pt-4">
                        Her dreams of traveling the country to shoot landscapes and artistry start to fizzle. Angie's aware she’s not living her best life but lacks clarity on how exactly to make the transition from one career to another. The blunt truth is that she’s too comfy in her current lifestyle to take the leap and excuses herself from going after her heart’s wishes because she’s a young mom. Like so many work-from-home parents, she’s cozied up in the warm blanket of complacency. 
                        </p>
                        <p class="text-xl pt-4">
                        The comfort Angie feels from serving a roster of well-paying clients keeps her from being the best mom, wife, and creative she can be. She knows better and wants better, but she needs help; she needs coaching.
                        </p>
                        <p class="text-xl pt-6 pb-3">
                        Remind you of someone? Then... 
                        </p>
                    </div>
                    <div class="button py-3">
                        <button class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-7 text-xl md:text-2xl mt-3 w-full md:w-auto">Let's work together</button>
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
                <div class="text-lg pb-4">
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