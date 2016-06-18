<?php
/**
 * PHT functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PHT
 */

if ( ! function_exists( 'pht_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pht_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PHT, use a find and replace
	 * to change 'pht' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pht', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'pht' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pht_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'pht_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pht_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pht_content_width', 640 );
}
add_action( 'after_setup_theme', 'pht_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pht_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pht' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pht_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pht_scripts() {





	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');




}
add_action( 'wp_enqueue_scripts', 'pht_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function register_custom_post_type() {
	global $wp_post_types;

	$wp_post_types['book']->show_in_rest = true;
	$wp_post_types['book']->rest_base = 'book';
	$wp_post_types['book']->rest_controller_class = 'WP_REST_Posts_Controller';


}
add_action( 'init', 'register_custom_post_type', 30 );


if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

}
function disqus_embed($disqus_shortname="phukethappinesstrip") {
	global $post;
	wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
	echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
function getUniqueCode($length = "")
{
	$code = md5(uniqid(rand(), true));
	if ($length != "") return substr($code, 0, $length);
	else return $code;
}
function example_disable_saving_subs( $save, $form_id ) {
	// Set $save = false based on condition
	//var_dump($_POST);die;
	return $save;
}

function ninja_forms_register_example(){
	add_action( 'ninja_forms_post_process', 'ninja_forms_example' );
}
add_action( 'init', 'ninja_forms_register_example' );
function ninja_forms_example(){
	global $ninja_forms_processing;

	//Get all the user submitted values
	$all_fields = $ninja_forms_processing->get_all_fields();

	if( is_array( $all_fields ) ){ //Make sure $all_fields is an array.
		//Loop through each of our submitted values.
		foreach( $all_fields as $field_id => $user_value ){
			//Update an external database with each value
		}

		//var_dump($all_fields);die;
		//echo $ninja_forms_processing->get_form_setting( 'sub_id' );die;
	}
}
add_filter( 'ninja_forms_save_submission', 'example_disable_saving_subs', 2, 10 );

