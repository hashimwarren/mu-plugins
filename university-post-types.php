<?php

// LESSON28 register new post type

function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events'
        ),
        'menu_icon' => 'dashicons-calendar' //find menu icons https://developer.wordpress.org/resource/dashicons
    ) );
}

add_action('init', 'university_post_types');

?>