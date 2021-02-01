<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-200">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize text-primary-500">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    
        <div class="services">
            <div class="cont py-10">
                <div class="grid grid-cols-3 gap-x-10 py-10">
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-x-10 py-10">
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                    <div class="services text-center">
                        <div class="flex justify-center">
                            <img src="https://lh3.googleusercontent.com/tU5l4lTwuf7BTb8UVrWYEPUcCJtSCHGtYp_y3eRPfAcOJ0j8p916evVvSj5v7nwjWO2N45k6puk-x36Fq1qiHA=s0" alt="" class="img h-46 w-40">
                        </div>
                        <div class="title">
                            <h1 class="font-bold text-2xl py-4">lorem ipsum</h1>
                        </div>
                        <div class="subtitle">
                            <p class="">Understanding why your business matters and designing a compelling story that will make your customers fall in love with you.</p>
                        </div>
                    </div>
                </div>
                <div class="div py-2 md:py-8 text-center w-auto">
                    <a href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2border-secondary-300 hover:border-secondary-400 bg-secondary-300 hover:bg-secondary-400 rounded-md font-medium py-2 px-10"> Work with me</a>
                </div>
                
            </div>
        </div>

           <!-- testimonials section -->
   <?php $query_args = array(
        'post_type' => 'praises',
        'posts_per_page' => 2,
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
                    <img src="https://lh3.googleusercontent.com/2688dFcLeyBSzTgXe_SyxD9Ft5WKrLHN_1qpVPmol2ORPJrLZVdjmErF596bBfBvE8MtEithPVWY9qpUgUiD=w188" alt="" class="w-full h-full">
                </div>
                <div class="uppercase py-5 font-bold text-primary-500">
                    <p>- <?php the_title(); ?> |<span class="text-secondary-400"> founder of set free life events & christian lifestyle coaching</span></p>
                </div>
                <!-- <div class="">
                    <a href="" href="" class="text-white text-xl underline">A gift from me to you ></a>
                </div> -->
            </div>
        <?php endwhile; else: endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
