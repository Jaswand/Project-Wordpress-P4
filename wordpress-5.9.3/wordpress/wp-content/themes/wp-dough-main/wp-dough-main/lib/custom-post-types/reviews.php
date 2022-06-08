<?php

add_action('init', 'reviewsPostType');

function reviewsPostType()
{
    $args = [
        'labels' => [
            'name' => 'reviews',
            'singular_name' => 'reviews',
            'all_items' => 'Al het reviews',
            'edit_item' => 'reviews bewerken',
            'add_new' => 'reviews aanmaken',
            'add_new_item' => 'reviews toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'reviews',
        ],
    ];

    \register_post_type('reviews', $args);

}
