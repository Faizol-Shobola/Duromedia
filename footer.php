<?php wp_footer();?>

</div>
<footer class="footer bg-primary-500 py-9 sm:p-4 absolute insect-0 w-full">
    <div class="max-w-2xl mx-auto md:px-4 px-4  text-white text-center">
        <div class="flex justify-center">
            <div class="max-w-xl p-0 sm:px-2 md:p-7 ">
                <h1 class="text-2xl md:text-4xl font-black">Coaching. Delivered. For Free.</h1>
                <p class="text-sm md:text-xl text-center py-6 px-4 md:px-10 ">Get powerful branding insights + other undeniably cool things (like this) delivered to your inbox monthly when you join the Bulletproof Hustle tribe.</p>
            </div>
        </div>
        <div class="flex">
            <div class="flex-auto contactform">
                <?php if(is_active_sidebar('footer-sidebar')):?>
                    <?php dynamic_sidebar('footer-sidebar');?>
                <?php endif;?>
            </div>
        </div>
        <div class="flex justify-center gap-x-8">
                <div class="icon-instagram">
                    <a href="#" class="fab fa-instagram text-2xl"></a>
                </div>
                <div class="icon-facebook">
                    <a href="#" class="fab fa-facebook-f text-2xl"></a>
                </div>
                <div class="icon-twittwer">
                    <a href="#" class="fab fa-twitter text-2xl"></a>
                </div>
                <div class="icon-linkedin">
                    <a href="#" class="fab fa-linkedin-in text-2xl"></a>
                </div>
        </div>
        <div class="mt-2 md:my-5 pt-7 md:pt-10">
            <div class="banner-tags flex flex-col text-sm items-center flex-wrap">
                <?php if(is_active_sidebar('footer-sidebar-2')):?>
                    <?php dynamic_sidebar('footer-sidebar-2');?>
                <?php endif;?>
            </div>
        </div>
        
    </div>
</footer>
    
</body>
</html>

