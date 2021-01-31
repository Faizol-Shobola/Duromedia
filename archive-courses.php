<?php get_header(); ?>

<div class="wrapper">
    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary-100">
        <div class="title text-center">
            <h1 class="text-4xl md:text-6xl font-bold capitalize text-primary-900">Courses</h1>
        </div>
    </div>

    <div class="course">
        <div class="cont py-14">
            <div class="md:grid grid-cols-2 gap-y-10 md:gap-x-10 w-full">

                <?php get_template_part('includes/section','courses');?>
               
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>
