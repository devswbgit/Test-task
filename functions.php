<?php

// wp_enqueue_style script
function ideals_scripts() {

    $style_ver = filemtime( get_stylesheet_directory() . '/css/style.css' );
    $js_ver = filemtime( get_stylesheet_directory() . '/js/main.min.js' );

    wp_enqueue_style( 'ideals-main-style', get_template_directory_uri() . '/css/style.css', array(), $style_ver );
    
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null );

    wp_deregister_script( 'jquery' );
    
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true );

	wp_enqueue_script('ideals-main-script', get_template_directory_uri() . '/js/main.min.js', array(), $js_ver, true);
}
add_action('wp_enqueue_scripts', 'ideals_scripts');


//include shortcode
include "shortcodes/news.php";
include "shortcodes/slider-merch.php";
include "shortcodes/clients.php";



//add custom image size
add_image_size( 'image-size-302', 302, 302, true );
add_image_size( 'merch-image-size', 265, 332, true );
add_image_size( 'image-size-210', 210, 210, false );
add_image_size( 'client-image-size', 260, 120, false );
add_image_size( 'preview-image-size', 809, 455, false );

// Register for widgets
function ideals_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar primary', 'ideals'),
		'id' => 'sidebar-primary',
		'description' => esc_html__('Add widgets here.', 'ideals'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><span class="decor-widget-title"></span>',
    ));
    
	register_sidebar(array(
		'name' => esc_html__('Footer primary', 'ideals'),
		'id' => 'footer-primary',
		'description' => esc_html__('Add widgets here.', 'ideals'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

    register_sidebar(array(
        'name' => esc_html__('Latest posts in footer', 'ideals'),
        'id' => 'latest-posts',
        'description' => esc_html__('Add widgets here.', 'ideals'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'ideals_widgets_init');

//Theme support
function theme_support_ideals() {

    add_theme_support('custom-logo', array(
        'height' => 65,
        'width' => 65,
        'flex-width' => true,
        'flex-height' => true,
    ));

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'theme_support_ideals' );


// Menu in header location.
register_nav_menus(array(
    'menu-header' => esc_html__('Primary', 'ideals'),
));

// create custom post type News.
function create_news() {
    register_post_type('news', array(
        'labels' => array(
            'name' => 'news',
            'singular_name' => 'news',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New news',
            'edit' => 'Edit',
            'edit_item' => 'Edit news',
            'new_item' => 'New news',
            'view' => 'View',
            'view_item' => 'View news',
            'search_items' => 'Search news',
            'not_found' => 'No news found',
            'not_found_in_trash' => 'No news found in Trash',
            'parent' => 'Parent news'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'revisions', 'author'),
        'menu_icon' => 'dashicons-admin-network',
        'has_archive' => true,
        'rewrite' => array('slug' => 'news-list', 'with_front' => false)
        )
    );
}

add_action('init', 'create_news');


// create custom post type Clients.
function create_clients() {
    register_post_type('clients', array(
        'labels' => array(
            'name' => 'Clients',
            'singular_name' => 'clients',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New clients',
            'edit' => 'Edit',
            'edit_item' => 'Edit clients',
            'new_item' => 'New clients',
            'view' => 'View',
            'view_item' => 'View clients',
            'search_items' => 'Search clients',
            'not_found' => 'No clients found',
            'not_found_in_trash' => 'No clients found in Trash',
            'parent' => 'Parent clients'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'revisions', 'author'),
        'menu_icon' => 'dashicons-admin-network',
        'has_archive' => true,
        'rewrite' => array('slug' => 'clients', 'with_front' => false)
        )
    );
}

add_action('init', 'create_clients');


// create custom post type Merch.
function create_merch() {
    register_post_type('merch', array(
        'labels' => array(
            'name' => 'merch',
            'singular_name' => 'merch',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New merch',
            'edit' => 'Edit',
            'edit_item' => 'Edit merch',
            'new_item' => 'New merch',
            'view' => 'View',
            'view_item' => 'View merch',
            'search_items' => 'Search merch',
            'not_found' => 'No merch found',
            'not_found_in_trash' => 'No merch found in Trash',
            'parent' => 'Parent merch'
        ),
        'public' => true,
        'menu_position' => 15,
        'supports' => array('title', 'editor', 'thumbnail', 'comments', 'revisions', 'author'),
        'menu_icon' => 'dashicons-admin-network',
        'has_archive' => true,
        'rewrite' => array('slug' => 'merch', 'with_front' => false)
        )
    );
}

add_action('init', 'create_merch');

//add dot span for 'Merch' menu item
function ideals_add_arrow( $item_output, $item, $depth, $args ){
    
    if ( $item->title == 'Merch' && $item->ID === 17 ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-dot"></span>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'ideals_add_arrow', 10, 4);

//add option page for Home Page block
$args_page_compare_meta = array(
	'page_title' => 'Theme Pages Options',
	'menu_title' => '',
	'menu_slug' => '',
	'capability' => 'edit_posts',
	'position' => false,
	'parent_slug' => '',
	'icon_url' => false,
	'redirect' => true,
	'post_id' => 'theme_pages_options',
	'autoload' => false,
	'update_button'		=> __('Update', 'acf'),
	'updated_message'	=> __("Options Updated", 'acf'),
);

acf_add_options_page( $args_page_compare_meta );

//Change title for archive / taxonomy
function ideals_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'ideals_archive_title' );


//Redirect from singular page to general page
function custom_redirects() {
    if ( is_singular( 'clients' ) ) {
        wp_redirect( '/clients', 301 );
        exit;
    }
}

add_action( 'template_redirect', 'custom_redirects' );