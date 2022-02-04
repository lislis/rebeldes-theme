<?php
/**
 * Custom Artist Type
 */

function rebeldes_artist_init() {
    $labels = array(
        'name'                  => _x( 'Artists', 'Post type general name', 'rebeldes' ),
        'singular_name'         => _x( 'Artist', 'Post type singular name', 'rebeldes' ),
        'menu_name'             => _x( 'Artists', 'Admin Menu text', 'rebeldes' ),
        'name_admin_bar'        => _x( 'Artist', 'Add New on Toolbar', 'rebeldes' ),
        'add_new'               => __( 'New Artist', 'rebeldes' ),
        'add_new_item'          => __( 'Add new Artist', 'rebeldes' ),
        'new_item'              => __( 'New Artist', 'rebeldes' ),
        'edit_item'             => __( 'Edit Artist', 'rebeldes' ),
        'view_item'             => __( 'View Artist', 'rebeldes' ),
        'all_items'             => __( 'All Artists', 'rebeldes' ),
        'search_items'          => __( 'Search Artists', 'rebeldes' ),
        'parent_item_colon'     => __( 'Parents:', 'rebeldes' ),
        'not_found'             => __( 'No Artists found.', 'rebeldes' ),
        'not_found_in_trash'    => __( 'No Artists found in trash.', 'rebeldes' ),
        'featured_image'        => _x( 'Artist Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rebeldes' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rebeldes' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rebeldes' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rebeldes' ),
        'archives'              => _x( 'Artist archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rebeldes' ),
        'insert_into_item'      => _x( 'Insert', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rebeldes' ),
        'uploaded_to_this_item' => _x( 'Upload to this Artist', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rebeldes' ),
        'filter_items_list'     => _x( 'Filter Artist list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rebeldes' ),
        'items_list_navigation' => _x( 'Artist list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rebeldes' ),
        'items_list'            => _x( 'Artist list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rebeldes' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => false,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'artists'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields',  'page-attributes', 'thumbnail' ),
        #'taxonomies'         => array(),
        'menu_icon'  		 => 'dashicons-admin-users',
        'map_meta_cap'       => true,
    );

    register_post_type( 'rebeldes_artists', $args );
}

add_action( 'init', 'rebeldes_artist_init' );
