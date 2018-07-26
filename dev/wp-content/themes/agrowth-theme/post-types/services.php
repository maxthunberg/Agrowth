<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('services', [
        'has_archive' => false,
        'labels' => [
            'add_new_item' => __('Add New Services'),
            'edit_item' => __('Edit Services'),
            'name' => __('Services'),
            'search_items' => __('Search Services'),
            'singular_name' => __('services'),
        ],
        'menu_icon' => 'dashicons-laptop',
        'menu_position' => 6,
        'public' => true,
        'show_in_nav_menus' => true,
        'rewrite' => array( 'slug' => 'tjanster'),
        'supports' => array('title', 'thumbnail', 'excerpt','page'),
        // 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),


    ]);
});
