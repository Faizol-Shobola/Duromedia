<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php wp_head();?>
<div class="page-container relative min-h-screen">
    
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-secondary-200">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-4 py-2 pt-5  md:py-6 md:flex md:justify-start md:space-x-14 h-10 md:h-24">
      <div class="col-span-3 flex justify-start items-center md:w-0 md:flex-1">
          <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
             }
          ?>
      </div>

      <div class="col-span-1 md:hidden flex justify-center items-center">
        <button type="button" class="bg-white rounded-md p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
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
        <!-- <a href="#" class="text-base font-medium text-white">
          <span class="bg-indigo-600 hover:bg-indigo-700 px-7 py-2 rounded-md shadow-sm text-base font-medium">Masterclass</span>
        </a> -->
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

  <div class=" top-0 inset-x-0 transition transform origin-top-right h-screen md:hidden fixed">
    <div class="h-screen shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: chart-bar -->
              <span class="ml-3 text-base font-medium text-gray-900">
                Analytics
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: cursor-click -->
              <span class="ml-3 text-base font-medium text-gray-900">
                Engagement
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: shield-check -->
              <span class="ml-3 text-base font-medium text-gray-900">
                Security
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: view-grid -->
              <span class="ml-3 text-base font-medium text-gray-900">
                Integrations
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: refresh -->
              <span class="ml-3 text-base font-medium text-gray-900">
                Automations
              </span>
            </a>
          </nav>
          <?php
          wp_nav_menu( 
          array(
          'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
          'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
          'theme_location'    => "mobile-menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
          ) );
          ?>
        </div>
      </div>
      <!-- <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Pricing
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Docs
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Enterprise
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Blog
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Help Center
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Guides
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Security
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Events
          </a>
        </div>
        <div>
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
            Sign up
          </a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500">
              Sign in
            </a>
          </p>
        </div>
      </div> -->
    </div>
  </div>



</div>
