<?php



// register post type team
add_action( 'init', 'register_financial_Service' );
function register_financial_Service() {
    
    $labels = array( 
        'name' => __( 'Service', 'financial' ),
        'singular_name' => __( 'Service', 'financial' ),
        'add_new' => __( 'Add New Service', 'financial' ),
        'add_new_item' => __( 'Add New Service', 'financial' ),
        'edit_item' => __( 'Edit Service', 'financial' ),
        'new_item' => __( 'New Service', 'financial' ),
        'view_item' => __( 'View Service', 'financial' ),
        'search_items' => __( 'Search Service', 'financial' ),
        'not_found' => __( 'No Service found', 'financial' ),
        'not_found_in_trash' => __( 'No Service found in Trash', 'financial' ),
        'parent_item_colon' => __( 'Parent Service:', 'financial' ),
        'menu_name' => __( 'Service', 'financial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Service',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Service', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Service', $args );
}





?>