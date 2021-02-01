<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?> | <?php bloginfo('description') ?></title>
</head>
<body>
<?php wp_head();?>

<div class="min-h-screen">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="header relative bg-white z-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-4 py-2 pt-5  md:py-5 md:flex md:justify-start md:space-x-14 h-20 md:h-nav">
      <div class="col-span-3 flex justify-start items-center md:w-0 md:flex-1">
          <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
             }
          ?>
      </div>

      <div class="col-span-1 md:hidden flex justify-center items-center">
        <button type="button" class="toggle-menu bg-white rounded-md p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: menu -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>


      <?php
    wp_nav_menu( 
        array(
        'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => "hidden md:flex space-x-10", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
        'container_class'   => "h-11",
        'link_before'       => '<span class="">', // (string) Text before the link text.
        'link_after'        => '</span>', // (string) Text after the link text.
        'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        'theme_location'    => "top-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
        ) );

    ?>
    </div>

   
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->

  <div class="mobile-menu top-0 inset-x-0 transition hidden transform origin-top-right md:hidden fixed z-10">
    <div class="min-h-screen shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between px-4 pr-7">
          <div>
            <?php 
              if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
            ?>
          </div>
          <div class="-mr-2">
            <button type="button" class="close-menu bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6 ">
          <nav class="w-full">
            <?php
            wp_nav_menu( 
            array(
            'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
            'theme_location'    => "mobile-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            ) );
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>



</div>