<?php get_header(); ?>
<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-400">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize text-primary-500">Books</h1>
        </div>
    </div>
    <div class="book py-16">
        <div class="cont ">
            <div class="md:grid grid-cols-7 gap-x-10 sm:px-6"> 
                <?php get_template_part('includes/section','bookscontent');?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>