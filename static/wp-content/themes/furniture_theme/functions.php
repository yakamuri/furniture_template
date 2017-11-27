<?php

function awesome_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjss', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'awesome_theme_setup');

//Image Thumbnails
add_theme_support( 'post-thumbnails' );

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function awesome_custom_post_type (){

	$labels = array(
		'name' => 'Products',
        'singular_name' => 'Products',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Products',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
        );
$args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
),
'taxonomies' => array('category', 'post_tag'),
//'menu_position' => 5,
'exclude_from_search' => false
);
register_post_type('products',$args);
}
add_action('init','awesome_custom_post_type');


/*-----------------Custom Post Type Projects--------------------*/


function projects_custom_post_type (){

    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Projects',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Project',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
    ),
    'taxonomies' => array('category', 'post_tag'),
    //'menu_position' => 5,
    'exclude_from_search' => false
    );
    register_post_type('projects',$args);
    }
add_action('init','projects_custom_post_type');

/*--------------------------------------------------------------*/


    function feature_image() {
        if( class_exists('Dynamic_Featured_Image') ) {
            global $dynamic_featured_image;

            $featured_images = $dynamic_featured_image->get_featured_images();

            return $featured_images;
        }
        return array();
    }

/************************* load child pages *************************/

    function wpb_child_page($parentId) {
        $args = array(
        'sort_order' => 'ASC',
        'child_of' => $parentId
        );
        $pages = get_pages($args);
        foreach ($pages as $page) {

            echo '<div class="col-sm-6 col-xs-12">';
                echo get_template_part('template_parts/content', $page->post_name);
            echo '</div>';

        }
    }
    add_action('wpb_childpages', 'wpb_child_page');
?>