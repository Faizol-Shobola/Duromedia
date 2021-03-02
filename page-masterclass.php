<?php get_header(); ?>

<div class="wrapper">

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-400">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
    <!-- quick-guide section -->
    <div class="guide py-16 ">
        <div class="cont md:grid grid-cols-2 gap-x-10 sm:px-6 ">
            <div class="w-full flex justify-center items-center pt-10 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['url'];?>/img-7.jpg" alt="" class=" md:w-full h-full">
                </div>
            </div>
            
            <div class="">
                <div class="titl">
                    <h1 class="text-3xl md:text-5xl font-bold pb-7">The Smart Brand Masterclass: Pro</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    If you're trying to create or revamp a business during this crazy time, but are struggling with the "how", you're not alone and you're not crazy. You just need some meaningful guidance by a fella who just wants to see you thrive. The Smart Brand Masterclass: Pro will take you from startup confusion to brand clarity using a proven 10-step framework anyone can implement to launch a business that people crave. In it, we’ll simply cover what’s worth your time and avoid what isn’t, so you get to do (more of) what you love. This 1-hour online course will fly by. Here's what's included.
                    </p>
                </div>
                <div class="button pt-3">
                    <button class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-12 text-lg md:text-2xl mt-3 w-full md:w-auto">Enroll for $97</button>
                </div>
            </div>
        </div>
    </div>
    <!-- how to section -->
    <div class="how-to py-16 bg-primary-400">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl text-white md:text-6xl font-bold">Learn how to</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="grid grid-cols-9">
                    <div class="col-span-2">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, labore.</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Legalize your business & stay legit</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Use inexpensive tools to market your brand</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Choose an idea worth building a brand around</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Define your customers and earn their trust</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Clearly explain what you offer in a compelling way</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-white text-2xl">Invest your time wisely on the things that matter</p>
                            </div>
                        </div>
                            
                    </div>
                    <div class="col-span-2">
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

    <div id="testimonial" class="testimonial">
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
    <!-- For you section -->
    <div class="for-you py-16 bg-neutral-100">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">This class is for you if...</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="grid grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You want to start a business, but life keeps getting in the way</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You mean well, but you lack discipline and strategy you need to actually follow through</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You have more time on your hands than money</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You've tried tactics from other experts which work great for them, but suck for you</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You suffer from so many great ideas that you can't pick one to run with</p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You need actionable tips that you can apply immediately  </p>
                            </div>
                        </div>

                        
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                <div class="div pt-2 md:pt-8 w-full md:w-auto">
                    <button href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-secondary-400 hover:border-secondary-400 bg-secondary-400 hover:bg-secondary-400 rounded-md font-medium py-2 px-10"> Get access today</button>
                </div>
            </div>
        </div>
    </div>
    <!-- why this exist section -->
    <div class="why-this py-16">
        <div class="cont md:grid grid-cols-7 gap-x-10 sm:px-6 ">
            <div class="col-span-4 w-full flex justify-center items-center pt-10 md:py-0">
                <div class=" overflow-hidden w-11/12 h-auto rounded-xl">
                    <img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['url'];?>/img-7.jpg" alt="" class=" md:w-full h-full">
                </div>
            </div>
            
            <div class="col-span-3">
                <div class="titl">
                    <h1 class="text-3xl md:text-5xl font-bold pb-7">Why this exists...</h1>
                </div>
                <div class="sub-title">
                    <p class="text-lg">
                    If I could harness all of the failures, wins, energy, and lessons I've learned since 1008 and press rewind, this is the course I would've made for my younger self. It's designed to help anyone out there crazy enough to bet on themselves and create things that don't yet exist. Hands down, if I were in your shoes, these would be the first 10 steps I'd take in starting a business.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- cirriculum section -->
    <div class="cirriculum py-16 bg-neutral-100">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">The curriculum</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="grid grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Critical context for the mission ahead...</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 1: Pick a problem.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 2: Define your consumer.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 3: Clarify your offer.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 4: Give it a name.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 5: Make it official.</p>
                            </div>
                        </div>

                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-play-circle text-2xl text-primary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Step 6: Get visible.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- what's included section -->
    <div class="what-included py-16">
        <div class="cont">
            <div class="title text-center pb-4">
                <h1 class="text-4xl md:text-6xl font-bold">What's included</h1>
            </div>
            <div class="flex items-center flex-col">
                <div class="grid grid-cols-7">
                    <div class="col-span-1">
                    </div>
                    <div class="col-span-5">
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You want to start a business, but life keeps getting in the way </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You mean well, but you lack discipline and strategy you need to actually follow through </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You have more time on your hands than money </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You've tried tactics from other experts which work great for them, but suck for you </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You suffer from so many great ideas that you can't pick one to run with </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">Use inexpensive tools to market your brand </p>
                            </div>
                        </div>
                        <div class="flex gap-x-4 py-1">
                            <div class=""><i class="fas fa-check-circle text-2xl text-secondary-400"></i></div>
                            <div class="">
                                <p class="text-2xl">You need actionable tips that you can apply immediately   </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                    </div>
                </div>
                <div class="div pt-2 md:pt-8 w-full md:w-auto">
                    <button href="" class="text-white text-lg md:text-2xl mt-3 w-full md:w-auto border-2 border-secondary-400 hover:border-secondary-400 bg-secondary-400 hover:bg-secondary-400 rounded-md font-medium py-2 px-10"> Get access today</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>