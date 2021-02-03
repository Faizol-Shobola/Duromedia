<?php get_header(); ?>

<div class="wrapper">
    <div class="hero  bg-gradient-to-b from-white to-neutral-100">
        <div class="md:grid py-7 md:pb-10 grid-cols-5 gap-x-10 cont h-full">
            <div class="w-auto h-full col-span-2">
                <div class="md:flex md:justify-start overflow-hidden w-full md:h-3/5 lg:h-full rounded-xl">
                    <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /img-5.png" alt="" class="md:w-full h-auto">
                </div>
                <div class="play-icon">

                </div>
            </div>
            
            <div class="col-span-3">
                <div class="title p-2">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">Wanna build a bulletproof brand?</h1>
                </div>
                <div class="tagline py-3">
                    <div class="text-3xl italic">(Oh hey there, I’m Tyson.) </div>
                </div>
                <div class="sub-title py-3">
                    <p class="text-xl">
                        <span class="font-medium">Messin' with me, you'll go from <span class="text-secondary-400">“I got this great idea, but...” </span>to <span class="text-secondary-400">“I’ve created a business I love!”</span> in weeks.</span>
                        Whether you're starting a side hustle or switching careers, we're gonna take a wormhole to get to your destination. This is the place to be for honest, proven, actionable insights & strategies from my life in branding + entrepreneurship over the last 10+ years.
                    </p>
                </div>
                <div class="button pt-5">
                    <a href="" class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-7  text-xl md:text-2xl w-full md:w-auto">Get the playbook</a>
                </div>
            </div>
        </div>
    </div>

    <!-- clients section -->
    <div class="clients">
        <div class="cont md:grid grid-cols-5 gap-x-2 py-8 ">
            <div class="client flex justify-center py-2">
                <img src="
                    <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                    /client-1.png" alt="" class="w-2/3 md:w-24 lg:w-36">
            </div>
            <div class="client flex justify-center py-2">
                <img src="
                    <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                    /client-2.png" alt="" class="w-2/3 md:w-24 lg:w-36">
            </div>
            <div class="client flex justify-center py-2">
                <img src="
                    <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                    /client-3.png" alt="" class="w-2/3 md:w-24 lg:w-36">
            </div>
            <div class="client flex justify-center py-2">
                <img src="
                    <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                    /client-4.png" alt="" class="w-2/3 md:w-24 lg:w-36">
            </div>
            <div class="client flex justify-center py-2">
                <img src="
                    <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                    /client-5.png" alt="" class="w-2/3 md:w-24 lg:w-36">
            </div>
        </div>
    </div>

    <!-- call-to-action section -->
    <div class="cta bg-primary-100">
        <div class="cont flex items-center flex-col py-14 ">
            <div class="text-center">
                <p class="uppercase text-md font-bold text-secondary-400">certified brand & entrepreneurship strategy</p>
            </div>
            <div class="py-5 text-center">
                <h1 class="text-4xl md:text-5xl font-bold">I take high-achievers from confusion to clarity so they can create brands people love.</h1>
            </div>
            <div class="btuuon">
                <a href="" class="btn text-white bg-primary-500 rounded-md font-medium py-2 px-7 text-xl md:text-2xl capitalize">meet darnell</a>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-x-12 pt-6">
                <div class="div py-2 md:py-0">
                    <a href="" href="" class="text-white text-xl underline">A gift from me to you ></a>
                </div>
                <div class="div py-2 md:py-0">
                    <a href="" href="" class="text-white text-xl underline"> What they're saying ></a>
                </div>
            </div>
        </div>
    </div>

    <!-- confidence section -->
    <div class="confidence py-16">
        <div class="cont ">
            <div class="title pb-12 text-center">
                <h1 class="text-4xl md:text-6xl font-bold">Go from hesitation to confidence.</h1>
            </div>
            <div class="md:grid grid-cols-5 gap-x-10 sm:px-6 ">
                <div class="w-full col-span-3 flex justify-center">
                    <div class=" overflow-hidden w-11/12 h-auto md:h-2/5 lg:h-4/5 rounded-xl">
                        <img src="
                            <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                            /img-7.jpg" alt="" class=" md:w-full h-full">
                    </div>
                </div>
                
                <div class="col-span-2 py-3 md:py-0">
                    <div class="sub-title">
                        <p class="text-lg">
                        If you're struggling to create or revamp a business in these strange times, you're not alone or crazy. I feel your pain, which is why I designed this online course. The Smart Brand Masterclass: Pro will take you from confusion to clarity using a proven 10-step framework anyone can follow to launch something people want badly. Lifetime course access. Audio-only option. Helpful worksheets. A downloadable guide. This bad boy's got the works! By the end, you'll know what’s worth your time so you can avoid what isn’t.
                        </p>
                    </div>
                    <div class="button pt-5">
                
                        <a href="" class="btn text-white bg-primary-900 rounded-md font-medium py-3 px-7  text-xl md:text-2xl w-full md:w-auto">Get access for $97</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- learn section -->
    <div class="learn py-10 md:py-16 bg-neutral-100">
        <div class="cont ">
            <div class="title pb-2 md:pb-12 text-center">
                <h1 class="text-4xl md:text-6xl font-bold">How do you like to learn?</h1>
            </div>
            <div class="md:grid grid-cols-4 md:gap-x-10 gap-y-10 sm:px-6 text-center">
               <div class="bg-hero-pattern bg-contain bg-center h-80 md:h-36 lg:h-56 rounded-lg w-full my-12 md:my-0">
                   <a href="#" class="text-white h-full w-full flex items-center justify-center">
                       <span class=""></span>
                       <p class="uppercase text-2xl">courses</p>
                   </a>
               </div>
               <div class="bg-hero-pattern bg-contain bg-center h-80 md:h-36 lg:h-56 rounded-lg w-full my-12 md:my-0">
                   <a href="#" class="text-white h-full w-full flex items-center justify-center">
                       <span class=""></span>
                       <p class="uppercase text-2xl">guides</p>
                   </a>
               </div>
               <div class="bg-hero-pattern bg-contain bg-center h-80 md:h-36 lg:h-56 rounded-lg w-full my-12 md:my-0">
                   <a href="#" class="text-white h-full w-full flex items-center justify-center">
                       <span class=""></span>
                       <p class="uppercase text-2xl">podcast</p>
                   </a>
               </div>
               <div class="bg-hero-pattern bg-contain bg-center h-80 md:h-36 lg:h-56 rounded-lg w-full my-12 md:my-0">
                   <a href="#" class="text-white h-full w-full flex items-center justify-center">
                       <span class=""></span>
                       <p class="uppercase text-2xl">sessions</p>
                   </a>
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

    <!-- quick-guide section -->
    <div class="guide py-16 bg-neutral-100">
        <div class="cont ">
            <div class="md:grid grid-cols-2 gap-x-10 sm:px-6 ">
                <div class="">
                    <div class="titl">
                        <h1 class="text-4xl md:text-6xl font-bold pb-7">Jumpstart your brand today.</h1>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        Before you worry about your logo, website, or storefront, first you've gotta find the problem you’re best suited to solve. And then you work your idea or business around solving that problem for those who have it. You'll save crazy time & money this way. My free 10-step quick start playbook will help you focus on what matters and avoid what doesn't. It's the best way to grow your business, even if you're on a tight budget. Check out the expanded version.
                        </p>
                    </div>
                    <div class="button pt-5">
                        <a href="" class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-7 text-xl md:text-2xl w-full md:w-auto">Get in touch</a>
                    </div>
                </div>

                <div class="w-full flex justify-center items-center pt-10 md:py-0">
                    <div class=" overflow-hidden w-11/12 h-4/5 rounded-xl">
                        <img src="<?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                            /img-3.png" alt="" class=" md:w-full h-auto">
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- achievement section -->
    <div class="achievement py-16">            
        <div class="cont md:grid  grid-cols-3 gap-x-20 sm:px-6 text-center">
            <div class="my-10 md:my-0">
                <div class="flex items-center justify-center h-56 md:h-40 lg:h-56 w-full">
                    <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /client.png" alt="" class="h-full"></span>
                </div>
                <div class="title text-center py-4">
                    <h1 class="text-5xl font-bold">200+ clients served.</h1>
                </div>
                <div class="">
                    <p class="uppercase text-md text-gray-700">across various industries & verticals worldwide</p>
                </div>
            </div>
            <div class="my-10 md:my-0">
                <div class="flex items-center justify-center h-56 md:h-40 lg:h-56 w-full">
                    <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /Books.png" alt="" class="h-full"></span>
                </div>
                <div class="title text-center py-4">
                    <h1 class="text-5xl font-bold">Three books wrote.</h1>
                </div>
                <div class="">
                    <p class="uppercase text-md text-gray-700">on self-help, motivation, & actionable topics</p>
                </div>
            </div>
            <div class="my-10 md:my-0">
                <div class="flex items-center justify-center h-56 md:h-40 lg:h-56 w-full">
                    <img src="
                        <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                        /certified.png" alt="" class="h-full"></span>
                </div>
                <div class="title text-center py-4">
                    <h1 class="text-5xl font-bold">Certified to serve.</h1>
                </div>
                <div class="">
                    <p class="uppercase text-md text-gray-700">in business, entrepreneurship, & workshop coaching</p>
                </div>
            </div>
        </div>
    </div>

    <!-- podcast section -->
    <div class="pocast py-8 md:py-16 bg-neutral-100">
        <div class="cont ">
            <div class="md:grid grid-cols-7 gap-x-10 sm:px-6 ">
                <div class="w-full flex justify-center col-span-3">
                    <div class=" overflow-hidden w-full h-full">
                        <img src="
                            <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                            /img-3.png" alt="" class=" md:w-full h-auto">
                    </div>
                </div>
                <div class="col-span-4 pt-5">
                    <div class="title">
                        <h1 class="text-4xl md:text-6xl font-bold pb-7">Jumpstart your brand today.</h1>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl">
                        “Non-Negotiable in my Podcast Line-Up. Add this Podcast to your rotation! Darnell has a great voice for motivation and leadership, both literally and figuratively. He’s smart, relatable, insightful, and approachable. If you like motivation, leadership, and personal development Podcasts, this will quickly become a must for you, too. The perfect balance of thought-provoking and easy-listening from a fresh voice you need to hear.”
                        </p>
                    </div>
                    <div class="uppercase py-5 font-bold">
                        <p class="text-secondary-400">- ALLIE BITTNER, FOUNDER OF KISS CREATIVE</p>
                    </div>
                    <div class="button">
                        <a href="" class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-7 text-xl md:text-2xl w-full md:w-auto">Get in touch</a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <!-- consultation section -->
    <div class="consultation py-16">
        <div class="cont ">
            <div class="md:grid grid-cols-7 gap-x-10 sm:px-6 "> 
                <div class="col-span-4 pb-5">
                    <div class="title">
                        <h1 class="text-4xl md:text-6xl font-bold pb-7">Gain the clarity & avoid the pitfalls.</h1>
                    </div>
                    <div class="sub-title">
                        <p class="text-xl py-2">
                        Through brand consulting, we'll get super clear on exactly what your consumers really care about, so you can do more of that. By deeply listening to your audience, you'll start to meet them where they are, so you can take them where they want to go. When your intentions match their expectations, that’s the g-spot, and that’s when you increase sales and earn loyalty.
                        </p>
                        <p class="text-xl py-3">
                        The great thing about this approach is that it works across any industry - whether you’re a startup or an O.G. company. No matter what business you’re in, branding starts with trust. We all crave being heard and seen. We all want to be loved. And we all vote with our wallets. By becoming a more human company that adores its customers more than it loves what it sells, buddy, your brand's gonna skyrocket. 
                        </p>
                    </div>
                    <div class="button pt-5">
                        <a href="" class="btn text-white bg-primary-500 rounded-md font-medium py-3 px-7 text-xl md:text-2xl w-full md:w-auto">Book a consultation</a>
                    </div>
                </div>
                <div class="w-full flex justify-center col-span-3">
                    <div class=" overflow-hidden rounded-lg w-full h-full">
                        <img src="
                            <?php $uploads = wp_upload_dir();?> <?php echo $uploads['url'];?>
                            /img-1.jpg" alt="" class=" md:w-full h-auto lg:h-full">
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>