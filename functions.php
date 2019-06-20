<?php
/**
 * irynapalko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package irynapalko
 */

function register_my_menus() {
	register_nav_menus(
			array( 
				'menu-1' => esc_html__( 'Primary', 'irynapalko' ),
				'menu-footer' =>   ( 'menu-footer' )
			)
	);
}

add_action( 'init', 'register_my_menus' );

if ( ! function_exists( 'irynapalko_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function irynapalko_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on irynapalko, use a find and replace
		 * to change 'irynapalko' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'irynapalko', get_template_directory() . '/languages' );

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
		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'irynapalko' ),
		// ) );

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
		add_theme_support( 'custom-background', apply_filters( 'irynapalko_custom_background_args', array(
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
add_action( 'after_setup_theme', 'irynapalko_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function irynapalko_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'irynapalko_content_width', 640 );
}
add_action( 'after_setup_theme', 'irynapalko_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function irynapalko_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'irynapalko' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'irynapalko' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'irynapalko_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function irynapalko_scripts() {
	wp_enqueue_style( 'irynapalko-style', get_stylesheet_uri() );

	wp_enqueue_script( 'irynapalko-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'irynapalko-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'irynapalko_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
 * Регистрация типа записи `Партнеры`
 */
function partner_post_type() {
   
	// массив меток для полей и кнопок
	$labels = array(
		 'name' => _x("Партнеры", "post type general name"),
		 'singular_name' => _x("Партнер", "post type singular name"),
		 'menu_name' => 'Партнеры',
		 'add_new' => _x("Добавить нового", "team item"),
		 'add_new_item' => __("Добавить нового партнера"),
		 'edit_item' => __("Исправить партнера"),
		 'new_item' => __("Новый партнер"),
		 'view_item' => __("Просмотреть партнера"),
		 'search_items' => __("Поиск партнеров"),
		 'not_found' =>  __("Не найдено партнеров"),
		 'not_found_in_trash' => __("Не найдено партнеров в корзине"),
		 'parent_item_colon' => ''
	);
	 
	 // Регистрация типа записи
	register_post_type('partner' , array(
		 	'labels' => $labels,
		 	'public' => true,
		 	'has_archive' => false,
		 	'menu_icon' => get_stylesheet_directory_uri() . '/lib/PartnerProfiles/team-icon.png',
		 	'rewrite' => false,
		 	'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'partner_post_type', 0 );

/* мероприятия */
function wptp_create_post_type() {
	$labels = array(
		'name' => __( 'Мероприятия' ),
		'singular_name' => __( 'Мероприятие' ),
	  	'add_new' => __( 'Новое мероприятие' ),
	  	'add_new_item' => __( 'Добавить новое мероприятие' ),
	  	'edit_item' => __( 'Изменить мероприятие' ),
	  	'new_item' => __( 'Новое мероприятие' ),
	  	'view_item' => __( 'Просмотреть мепроприятие' ),
	  	'search_items' => __( 'Поиск мероприятий' ),
	  	'not_found' =>  __( 'Не найдено мероприятий' ),
	  	'not_found_in_trash' => __( 'В корзине не обнаружено мероприятий' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		//'rewrite' => array( 'slug' => 'events' ),  // вот это добавил 26.11
		'taxonomies' => array('activities_category'),
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail'
		),
	);
	register_post_type( 'activities', $args );
}
add_action( 'init', 'wptp_create_post_type' );


function wptp_register_taxonomy() {
	register_taxonomy( 'activities_category', 'activities',
	  	array(
			'labels' => array(
				'name'              => 'Категории мероприятий',
				'singular_name'     => 'Категория меропрития',
				'search_items'      => 'Поиск категорий меропрития',
				'all_items'         => 'Все категории мероприятий',
				'edit_item'         => 'Изменить категорию',
				'update_item'       => 'Обновить категорию',
				'add_new_item'      => 'Добавить новую категорию',
				'new_item_name'     => 'Новое имя категории',
				'menu_name'         => 'Категории мероприятий',
		  	),
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'rewrite' => array( 'slug' => 'events' ),
		'show_admin_column' => true
		)
	  );
}
add_action( 'init', 'wptp_register_taxonomy' );

function wptp_create_post_type_reviews() {
	$labels = array(
	  'name' => __( 'Отзывы' ),
	  'singular_name' => __( 'Отзыв' ),
	  'add_new' => __( 'Новый отзыв' ),
	  'add_new_item' => __( 'Добавить новый отзыв' ),
	  'edit_item' => __( 'Редактировать отзыв' ),
	  'new_item' => __( 'Новый отзыв' ),
	  'view_item' => __( 'Смотреть отзыв' ),
	  'search_items' => __( 'Искать отзывы' ),
	  'not_found' =>  __( 'Отзывов не найдено' ),
	  'not_found_in_trash' => __( 'Корзина пуста' ),
	  );
	$args = array(
	  'labels' => $labels,
	  'has_archive' => true,
	  'public' => true,
	  'hierarchical' => false,
	  'menu_position' => 5,
	  'taxonomies' => array('reviews_category'),
	  'supports' => array(
		'title',
		'editor',
		'excerpt',
		'custom-fields',
		'thumbnail'
		),
	//   'taxonomies' => array('category'),
	  );
	register_post_type( 'reviews', $args );
}
add_action( 'init', 'wptp_create_post_type_reviews' );

function wptp_register_taxonomy_reviews() {
	register_taxonomy( 'reviews_category', 'reviews',
	  array(
		'labels' => array(
		  	'name'              => 'Категории отзывов',
		  	'singular_name'     => 'Категория отзыва',
		  	'search_items'      => 'Поиск по категориям',
		  	'all_items'         => 'Все категории',
		  	'edit_item'         => 'Изенить категорию',
		  	'update_item'       => 'Обновить категорию',
		  	'add_new_item'      => 'Добавить новую категорию',
		  	'new_item_name'     => 'Добавить имя новой категории',
		  	'menu_name'         => 'Категории отзывов',
		),
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'rewrite' => array( 'slug' => 'reviews' ),
		'show_admin_column' => true
		)
	  );
  }
add_action( 'init', 'wptp_register_taxonomy_reviews' );

/**
 * Регистрация типа записи `speaker`
 */
function speaker_post_type() {
   
	// массив меток для полей и кнопок
	$labels = array(
		'name' => _x("Спикеры", "post type general name"),
		'singular_name' => _x("Спикер", "post type singular name"),
		'menu_name' => 'Спикеры',
		'add_new' => _x("Добавить нового", "speaker item"),
		'add_new_item' => __("Добавить новый профиль"),
		'edit_item' => __("Изменить профиль"),
		'new_item' => __("Новый профиль"),
		'view_item' => __("Просмотреть профиль"),
		'search_items' => __("Поиск профилей"),
		'not_found' =>  __("Профилей не найдено"),
		'not_found_in_trash' => __("Профилей в корзине обнаружено"),
		'parent_item_colon' => ''
	);
	 
	// Регистрация типа записи
	register_post_type('speaker' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => get_stylesheet_directory_uri() . '/lib/SpeakerProfiles/speaker-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'speaker_post_type', 0 );


/**
 * Удаляем тег <p> вокруг изображений в контенте
 *
 * @param type $content
 * @return type
 */
function onwp_remove_img_ptags_func( $content ){
	return preg_replace('/<p>\s*(<a[^>]+>)?\s*(<img[^>]+>)\s*(a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'onwp_remove_img_ptags_func');

//define('RATINGS_IMG_EXT', 'gif');
define('RATINGS_IMG_EXT', 'png');

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  	array_pop($excerpt);
	  	$excerpt = implode(" ",$excerpt).'...';
	} else {
	  	$excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

add_action( 'wpcf7_init', 'wpcf7_add_form_tag_current_url' );
function wpcf7_add_form_tag_current_url() {
    // Add shortcode for the form [current_url]
    wpcf7_add_form_tag( 'current_url',
        'wpcf7_current_url_form_tag_handler',
        array(
            'name-attr' => true
        )
    );
}

// Parse the shortcode in the frontend
function wpcf7_current_url_form_tag_handler( $tag ) {
    global $wp;
    $url = home_url( $wp->request );
    return '<input type="hidden" name="'.$tag['name'].'" value="'.$url.'" />';
}