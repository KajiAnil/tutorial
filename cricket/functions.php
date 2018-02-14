<?php 
if ( ! function_exists( 'cricket_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
		function cricket_setup(){
	/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cricket
	, use a find and replace
		 * to change 'cricket
	' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cricket
	', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'cricket
		' ),
			'header' => __( 'Header Menu', 'cricket
		' ),
			'footer' => __( 'Footer Menu', 'cricket
		' ),
			'category' => __( 'category Menu', 'cricket
		' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cricket
	_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cricket_setup' );


// NAVIGATION FILTER
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
// NAVIGATION LINK CLASS

function add_class_to_all_menu_anchors($classes){
	$classes['class'] = 'nav-link';
	return $classes;
}
add_filter('nav_menu_link_attributes', 'add_class_to_all_menu_anchors',10);
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');

/**
 * Enqueue scripts and styles.
 */
function cricket_resources() {
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover/hover.css' );
	wp_enqueue_style( 'hover-ripple', get_template_directory_uri() . '/css/hover/ripple.css' );
 	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.min.css' );
 	wp_enqueue_style( 'owl-carousel-default', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css' );
 	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css' );
 	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css' );
 	wp_enqueue_style( 'cricket-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'jquery-v3.2.1', get_template_directory_uri() . '/js/jquery.min.js');
 	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
 	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
 	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/scripts.js');
 	wp_enqueue_script( 'ticker', get_template_directory_uri() . '/js/ticker.js');
	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/mousewheel.js');
}
add_action( 'wp_enqueue_scripts', 'cricket_resources' );

/*
 * Implementing Custom meta box.
 */
  require get_template_directory() . '/inc/custommetabox.php';
/**
 * Implementing additional function page for admin page.
 */
  require get_template_directory() . '/inc/function-admin.php';

/**
 * Enqueuing the script page for admin page.
 */
  require get_template_directory() . '/inc/enqueue.php';
/**
 * Enqueuing the Theme Support page for admin page.
 */
  require get_template_directory() . '/inc/theme-support.php';

/**
 *  Register custom navigation walker
 */
  require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 *  Register custom pagination
 */
  require get_template_directory() . '/inc/wp_bootstrap_pagination.php';



add_action( 'init', 'create_jobs_category_taxonomies', 0 );
function create_jobs_category_taxonomies() {

    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Category' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'cat-news' ),
    );

    register_taxonomy( 'cat-news', array( 'news_slider' ), $args );
}


// All custom post type here
function custom_post_type(){
	// Latest Update Here
	register_post_type('latestUpdate_slider',
		   array( 
		   	'labels' => array(
		    'name' => __('Update Sliders'), 
		    'singular_name' => __('Update Slider'), 
		), 
		   'public' => true, 
		   'has_archive' => true, 
		   'supports' => array('title',
		   'editor', 'thumbnail', 'excerpt'
		),
	   'menu_icon' => 'dashicons-slides', 
	)); 


	// News slider
	register_post_type('News_Slider',
	   array( 
	   	'labels' => array(
	    'name' => __('News'), 
	    'singular_name' => __('News'), 
	), 
	   'public' => true, 
	   'has_archive' => true, 
	   'supports' => array('title',
	   'editor', 'thumbnail', 'excerpt'
	),
	   'menu_icon' => 'dashicons-format-aside'
	)); 

	// BLogs slider
	register_post_type('blog_Slider',
	   array( 
	   	'labels' => array(
	    'name' => __('Blog'), 
	    'singular_name' => __('Blogs'), 
	), 
	   'public' => true, 
	   'has_archive' => true, 
	   'supports' => array('title',
	   'editor', 'thumbnail', 'excerpt'
	),
	   'menu_icon' => 'dashicons-format-aside'
	)); 

	// Demo slider

	register_post_type( 'demo',
		array(
			'labels'          => array(
				'name'          => __( 'demo' ),
				'singular_name' => __( 'Demo' ),
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array('slug' => 'demo'),
			'supports'      => array( 'title','thumbnail'),
			'menu_icon'     => 'dashicons-businessman'
		)
	);

	// // Player info

	// register_post_type( 'player_info',
	// 	array(
	// 		'labels'          => array(
	// 			'name'          => __( 'Player Info' ),
	// 			'singular_name' => __( 'Player Info' ),
	// 		),
	// 		'public'        => true,
	// 		'has_archive'   => true,
	// 		'rewrite'       => array('slug' => 'player-info'),
	// 		'supports'      => array( 'title','thumbnail'),
	// 		'menu_icon'     => 'dashicons-businessman'
	// 	)
	// );


	flush_rewrite_rules();

}
add_action('init','custom_post_type');

/*
 *  Result or testimonial selector
 *  For Custom Metabox Result post type
*/
function admin_script () {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $(function(){
                $('#custom-post-type-1, #custom-post-type-2').hide();
                var $btns = $('#type-radio-button').find(':radio');
                $btns.each(function(i,btn){
                    if( $(btn).is(':checked') ){
                        if(i===0){
                            $('#custom-post-type-2').slideDown(300);
                            $('#custom-post-type-1').slideUp(300);
                        } else if(i===1){
                            $('#custom-post-type-1').slideDown(300);
                            $('#custom-post-type-2').slideUp(300);
                        } else {
                            $('#custom-post-type-1, #custom-post-type-2').slideDown(300);
                        }
                    }
                    $(btn).on('click',function(){
                        if(i===0){
                            $('#custom-post-type-2').slideDown(300);
                            $('#custom-post-type-1').slideUp(300);
                        } else if(i===1){
                            $('#custom-post-type-1').slideDown(300);
                            $('#custom-post-type-2').slideUp(300);
                        } else {
                            $('#custom-post-type-1, #custom-post-type-2').slideDown(300);
                        }
                    });
                });
            });

        });
    </script>
    <?php
}
add_action('admin_head','admin_script');