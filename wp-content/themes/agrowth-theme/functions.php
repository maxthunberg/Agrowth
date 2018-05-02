<?php
//declare(strict_types=1);

$page_for_posts = get_option('page_for_posts');

// Register Services custom post type.
require get_template_directory().'/post-types/services.php';

// Register consultants custom post type.
require get_template_directory().'/post-types/consultants.php';

// Remove wordpress default text editor
add_action( 'init', 'init_remove_text_editor' );
function init_remove_text_editor() {
	remove_post_type_support( 'page', 'editor' );
}
// Add scripts and styles
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/scss/swiper.min.css',false,'1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/scss/globals/styles.css',false,'1.1','all');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', '', '', true);
    // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.js', '','', true);
    wp_enqueue_script('jquery');

    wp_register_script('scrollreveal', get_template_directory_uri() . '/js/scrollreveal.min.js', '','', true);
    wp_enqueue_script('scrollreveal');

    wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', '','', true);
    wp_enqueue_script('swiper');

    wp_register_script('carbon-js', get_template_directory_uri() . '/js/carbon-components.min.js', '','', true);
    wp_enqueue_script('carbon-js');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', '','', true);
    wp_enqueue_script('main');

});

//Generates menu items and allows for custum menus in wp-panel
if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'main' => __( 'Main Menu', '' ),
    'sidenav' => __( 'Sidenav', '' ),
		'footer' => __( 'Footer Menu', '' )
	) );
}

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'nav-primary'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul>' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}


function fallbackmenu1(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function fallbackmenu2(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }


//widgets
// 
// function register_widget_2() {
//
// 	register_sidebar( array(
// 		'name'          => 'widget-2',
// 		'id'            => 'widget_2',
//  		// 'before_widget' => '<div class="widget-2 widget">',
// 		// 'after_widget'  => '</div>',
// 		'before_title'  => '<h3 class="widget-2--title">',
// 		'after_title'   => '</h3>',
// 	) );
//
// }
//
// add_action( 'widgets_init', 'register_widget_2' );
//
// function register_widget_3() {
//
// 	register_sidebar( array(
// 		'name'          => 'widget-3',
// 		'id'            => 'widget_3',
//  		// 'before_widget' => '<div class="widget-3 widget">',
// 		// 'after_widget'  => '</div>',
// 		'before_title'  => '<h3 class="widget-3--title">',
// 		'after_title'   => '</h3>',
// 	) );
//
// }
// add_action( 'widgets_init', 'register_widget_3' );
//
// function register_widget_4() {
//
// 	register_sidebar( array(
// 		'name'          => 'widget-4',
// 		'id'            => 'widget_4',
//  		// 'before_widget' => '<div class="widget-4 widget">',
// 		// 'after_widget'  => '</div>',
// 		'before_title'  => '<h3 class="widget-4--title">',
// 		'after_title'   => '</h3>',
// 	) );
//
// }
// add_action( 'widgets_init', 'register_widget_4' );


function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

// To be able to add thumbnail images
add_theme_support( 'post-thumbnails' );


// Set limit for excerpts

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

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function get_excerpt($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'<div class="blog-read-more"><a class="read-more" href="'.$permalink.'">LÄS MER</a></div>';
    return $excerpt;
}

function get_excerpt_no_read_more($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt."....";
    return $excerpt;
}
function get_title_excerpt_no_read_more($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_title();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt;
    return $excerpt;
}

// Adds a option page for ACF
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Options',
		'menu_title'	=> 'Theme General Options',
		'menu_slug' 	=> 'theme-general-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-options',
	));

}

// Allow SVG uploads
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Breadcrumbs // Breadcrumbs // Breadcrumbs // Breadcrumbs // Breadcrumbs // Breadcrumbs

function the_breadcrumb() {
global $post;
echo '<ul id="breadcrumbs">';
if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo '</a></li><li class="separator"> / </li>';
		if (is_category() || is_single()) {
				echo '<li>';
				the_category(' </li><li class="separator"> / </li><li> ');
				if (is_single()) {
						echo '</li><li class="separator"> / </li><li>';
						the_title();
						echo '</li>';
				}
		} elseif (is_page()) {
				if($post->post_parent){
						$anc = get_post_ancestors( $post->ID );
						$title = get_the_title();
						foreach ( $anc as $ancestor ) {
								$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
						}
						echo $output;
						echo '<strong title="'.$title.'"> '.$title.'</strong>';
				} else {
						echo '<li><strong> '.get_the_title().'</strong></li>';
				}
		}
}
elseif (is_tag()) {single_tag_title();}
elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
echo '</ul>';
}


// REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS // REMOVES COMMENTS


// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');
// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);
// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');
// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');
// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}


add_action('init', 'df_disable_comments_admin_bar');


// set and get number of post viewOffset
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


function includeFlexibleServices($servicename) {
  include( get_template_directory() . '/phtml-components/flexible-content/flexible-services.phtml');
}


//contact form 7 remove auto p tags
add_filter( 'wpcf7_autop_or_not', '__return_false' );


// Change upload size for media library
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

//removes wp-toolbar
add_filter('show_admin_bar', '__return_false');

// add_action( 'after_setup_theme', 'theme_setup' );
