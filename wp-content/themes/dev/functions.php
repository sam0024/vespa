<?php

//theme_option start
include('lib/redux-framework.php');
include('lib/sample/sample-config.php');
//theme_option end


/**
 * enqueue scripts and styles
 */
function wp_dev_scripts() {
	//style
	wp_enqueue_style('bootstrap_css', 
		get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.0.0', 'all');
	wp_enqueue_style('icofont_css', 
		get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('remixicon_css', 
	    get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '2.5.0', 'all');
	wp_enqueue_style('boxicons_css', 
	    get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '', 'all');
	wp_enqueue_style('owl_css', 
		get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style('venobox_css', 
	    get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '', 'all');
	wp_enqueue_style('aos_css', 
	    get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '', 'all');
	wp_enqueue_style('template_css', 
	    get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all');
	wp_enqueue_style('theme_css', get_template_directory_uri());

    //script
	wp_enqueue_script( 'jquery_js', 
		get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '3.5.1', true );
	wp_enqueue_script( 'bootstrap_js', 
		get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '5.0.0', true );
	wp_enqueue_script( 'easing_js', 
		get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '', true );
	wp_enqueue_script( 'waypoints_js', 
		get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array(), '4.0.1', true );
	wp_enqueue_script( 'counterup_js', 
		get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array(), '2.1.0', true );
	wp_enqueue_script( 'owl_js', 
		get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '2.3.4', true );
	wp_enqueue_script( 'venobox_js', 
		get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '1.9.1', true );
	wp_enqueue_script( 'aos_js', 
		get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '', true );
	wp_enqueue_script( 'main_js', 
		get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'wp_dev_scripts' );

// custom post type
function c_post_type() {
  
    // service start
    register_post_type( 'service',
        array(
            'labels' => array(
                'name'                  => __( 'Services' ),
                'singular_name'         => __( 'Service' ),
                'menu_name'             => _x( 'Services', 'dev' ),
		        'name_admin_bar'        => _x( 'Service', 'dev' ),
		        'add_new'               => __( 'Add New', 'dev' ),
		        'add_new_item'          => __( 'Add New Service', 'dev' ),
		        'new_item'              => __( 'New Service', 'dev' ),
		        'edit_item'             => __( 'Edit Service', 'dev' ),
		        'view_item'             => __( 'View Service', 'dev' ),
		        'all_items'             => __( 'All Services', 'dev' ),
		        'search_items'          => __( 'Search Services', 'dev' ),
		        'not_found'             => __( 'No services found.', 'dev' ),
		        'not_found_in_trash'    => __( 'No services found in Trash.', 'dev' )

            ),

            'public'             => true,
		    'publicly_queryable' => true,
            'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
            'rewrite'            => array('slug' => 'services'),
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-sticky',
		    'supports'           => array( 'title' )
  
    ));
    // service end
    // more service start
    register_post_type( 'more_service',
        array(
            'labels' => array(
                'name'                  => __( 'More Services' ),
                'singular_name'         => __( 'More Service' ),
                'menu_name'             => _x( 'More Services', 'dev' ),
		        'name_admin_bar'        => _x( 'More Service', 'dev' ),
		        'add_new'               => __( 'Add New', 'dev' ),
		        'add_new_item'          => __( 'Add New Service', 'dev' ),
		        'new_item'              => __( 'New Service', 'dev' ),
		        'edit_item'             => __( 'Edit Service', 'dev' ),
		        'view_item'             => __( 'View Service', 'dev' ),
		        'all_items'             => __( 'All Services', 'dev' ),
		        'search_items'          => __( 'Search Services', 'dev' ),
		        'not_found'             => __( 'No services found.', 'dev' ),
		        'not_found_in_trash'    => __( 'No services found in Trash.', 'dev' )

            ),

            'public'             => true,
		    'publicly_queryable' => true,
            'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
            'rewrite'            => array('slug' => 'more-services'),
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-sticky',
		    'supports'           => array( 'title' )
  
    ));
    // more service end
    // team start
    register_post_type( 'team',
        array(
            'labels' => array(
                'name'                  => __( 'Team Members' ),
                'singular_name'         => __( 'Team Member' ),
                'menu_name'             => _x( 'Team Members', 'dev' ),
		        'name_admin_bar'        => _x( 'Team Member', 'dev' ),
		        'add_new'               => __( 'Add New', 'dev' ),
		        'add_new_item'          => __( 'Add New Member', 'dev' ),
		        'new_item'              => __( 'New Member', 'dev' ),
		        'edit_item'             => __( 'Edit Member', 'dev' ),
		        'view_item'             => __( 'View Member', 'dev' ),
		        'all_items'             => __( 'All Members', 'dev' ),
		        'search_items'          => __( 'Search Members', 'dev' ),
		        'not_found'             => __( 'No members found.', 'dev' ),
		        'not_found_in_trash'    => __( 'No members found in Trash.', 'dev' )

            ),

            'public'             => true,
		    'publicly_queryable' => true,
            'capability_type'    => 'post',
		    'has_archive'        => true,
		    'hierarchical'       => false,
            'rewrite'            => array('slug' => 'team-members'),
            'menu_position'      => 7,
            'menu_icon'          => 'dashicons-sticky',
		    'supports'           => array( 'title' )
  
    ));
    // team end
}

add_action( 'init', 'c_post_type' );

//custom menu
function wp_custom_menu() {

  register_nav_menus(
    array(

      'main_menu'      => __( 'Primary Menu' ),
      'social_menu'    => __( 'Social Menu' ),
      'footer_menu'    => __( 'Footer Menu' )

    ));
}

add_action( 'init', 'wp_custom_menu' );

?>