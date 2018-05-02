<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('consultants', [
        'has_archive' => false,
        'labels' => [
            'add_new_item' => __('Add New Consultants'),
            'edit_item' => __('Edit Consultants'),
            'name' => __('Consultants'),
            'search_items' => __('Search Consultants'),
            'singular_name' => __('consultants'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 6,
        'public' => true,

        'show_in_nav_menus' => true,
        'rewrite' => array( 'slug' => 'konsulter'),
        'supports' => array('title', 'thumbnail', 'excerpt'),
        // 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),


    ]);
});
