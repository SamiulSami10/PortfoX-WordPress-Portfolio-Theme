<?php

// Theme Support Registration
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['audio', 'video', 'image', 'gallery']);
add_theme_support('custom-logo');

// Sidebar Registration
register_sidebar([
    'name'        => 'Right Sidebar',
    'description' => 'This is the Right Sidebar',
    'id'          => 'rs'
]);

register_sidebar([
    'name'        => 'Left Sidebar',
    'description' => 'This is the Left Sidebar',
    'id'          => 'ls'
]);

register_sidebar([
    'name'        => 'Bottom Sidebar',
    'description' => 'This is the Bottom Sidebar',
    'id'          => 'bs'
]);

// Menu Register
register_nav_menus([
    'mainmenu'   => 'Main Menu',
    'footermenu' => 'Footer Menu'
]);





// Custom Post Type Register
//Gallery
register_post_type('gallery', [
    'public' => true,
    'labels' => [
        'name'          => 'Gallery',
        'all_items'     => 'All Gallery',
        'add_new'       => 'Add New Gallery',
        'add_new_item'  => 'Add New Image Gallery',
        'featured_image' => 'Gallery Image',
        'set_featured_image' => 'Set Gallery Image',
    ],
    'supports' => [
        'title',
        'editor',
        'thumbnail',
    ],

    'menu_position' => 5,
    'menu_icon' => 'dashicons-cover-image
    ',
]);





//News 
register_post_type('news', [
    'public' => true,
    'labels' => [
        'name'          => 'News',
        'all_items'     => 'All News',
        'add_new'       => 'Add New News',
        'add_new_item'  => 'Add New News',
        'featured_image' => 'Image for News',
        'set_featured_image' => 'Set image for news',
    ],
    'supports' => [
        'editor',
        'thumbnail',
    ],
    'menu_position' => 6,
    'menu_icon' => 'dashicons-admin-site',
]);





// Taxonomy Register 
//Gallery Tag Register
register_taxonomy( 'gal_tag', 'gallery', [

    'public' => true,

] );

// Gallery Category Register 
register_taxonomy( 'gal_cat','gallery',[

    'public' => true,
    'hierarchical' => true,

] );


//News Tag Register
register_taxonomy( 'news_tag', 'news', [

    'public' => true,

] );

//News Category Register
register_taxonomy ('news_cat','news',[

    'public' => true,
    'hierarchical' => true,

]);