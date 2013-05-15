<?php


//THUMBNAIL SIZES
/*
add_theme_support( 'post-thumbnails' );
add_image_size( 'col', 190, 999 );
add_image_size( 'single', 300, 999 );
*/


//CUSTOM HEADER
/*
add_custom_image_header( $header_callback, $admin_header_callback, $admin_image_div_callback );
define('HEADER_IMAGE', '');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 100);
define('NO_HEADER_TEXT', true );
define('HEADER_TEXTCOLOR', '');
*/


//CREATE SIDEBAR
/*
register_sidebar(array(
  'name' => 'Sidfot',
  'id' => 'sidfot',
  'before_title' => '',
  'after_title' => ''
));
*/


//CUSTOM EXCERPT
/*
function custom_excerpt_length( $length ) {return 20;}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
*/


//INCLUDE
/*
require( get_template_directory() . '/inc/theme-options.php' );
*/


//CUSTOM POST-TYPES
/*
add_action('init', 'reg_post_types');
function reg_post_types() 
{		
	//Products
	$labels = array(
	'name' => _x('Products', 'post type general name'),
	'singular_name' => _x('Products', 'post type singular name')
	);
	$args = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true, 
	'show_in_menu' => true, 
	'rewrite' => true,
	'capability_type' => 'post',
	'supports' => array('title','editor','excerpt','thumbnail')
	); 
	register_post_type('products',$args);
}
*/


// CUSTOM LOGIN PICTURE
/*
   function my_custom_login_logo() {
    echo '<style type="text/css">
    h1 a {background-image: none !important;}
	#nav {display: none;}
    #backtoblog {display: none;}
    .login form .input {margin-top: 17px !important; text-align: center !important;}
    #login {text-align: center !important;}
	.login form {-moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;}
</style>';
   }
   add_action('login_head', 'my_custom_login_logo');
*/


//CUSTOM DASHBOARD CSS
/*
function custom_admin_styles() {
    echo '<style type="text/css">

#footer {display:none;}
.wp-menu-image {display:none;}
#wphead {display:none;}
.icon32 {display:none;}
.postbox-container {width:100% !important;}
#adminmenu li.wp-has-current-submenu .wp-menu-arrow, #adminmenu li.menu-top.current .wp-menu-arrow {display:none;}
#adminmenushadow {display:none;}
#poststuff h3, .metabox-holder h3 {font-family:sans-serif;}
.widefat th {font-family:sans-serif;}
.wrap h2, .subtitle {text-shadow:none !important;}
#post-body {background:none;}
.wp-menu-separator {display:none;}
.stuffbox {background:White;}
.fixed .column-comments {display:none;}
.column-author {display:none;}
#postbox-container-2 {display:none;}
a, #adminmenu a, #poststuff #edButtonPreview, #poststuff #edButtonHTML, #the-comment-list p.comment-author strong a, #media-upload a.del-link, #media-items a.delete, .plugins a.delete, .ui-tabs-nav a {color: black;}
#adminmenuback, #adminmenuwrap {background:#ffffff;}
#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {background: #666;}
#adminmenuback, #adminmenuwrap {display: none;}
#wpcontent, #footer {margin-left: 15px;}
#screen-options-link-wrap {display: none;}
#contextual-help-link-wrap {display: none;}
#dashboard-widgets .meta-box-sortables {margin: 0;}
.update-nag {display: none;}
#wp-admin-bar-updates {display: none;}
.postbox-container .meta-box-sortables.empty-container, #side-sortables.empty-container {border: none;}
</style>';
}
add_action('admin_head', 'custom_admin_styles');


//REMOVE ADMINBAR CONTENT
/*
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    // we can remove a menu item, like the Comments link, just by knowing the right $id
    $wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('new-content');
	$wp_admin_bar->remove_menu('site-name');
*/

//CUSTOM ADMINBAR
/*
    $wp_admin_bar->add_menu( array(
        'id' => 'wpadmin',
        'title' => __('Adminpanel'),
        'href' => admin_url( '')
    ) );
    
    $wp_admin_bar->add_menu( array(
        'id' => 'sidor',
        'title' => __('Sidor'),
        'href' => admin_url('/edit.php?post_type=page')
    ) );
    
    $wp_admin_bar->add_menu( array(
        'id' => 'bildspelet',
        'title' => __('Bildspelet'),
        'href' => admin_url('/edit.php?post_type=slide')
    ) );
    
    $wp_admin_bar->add_menu( array(
        'id' => 'produkter',
        'title' => __('Produkter'),
        'href' => admin_url('/edit.php?post_type=product')
    ) );
    
    $wp_admin_bar->add_menu( array(
        'id' => 'cf7',
        'title' => __('Formul&auml;r'),
        'href' => admin_url('/admin.php?page=wpcf7')
    ) );
    
    $wp_admin_bar->add_menu( array(
        'id' => 'utseende',
        'title' => __('Utseende')
    ) );
        
    	$wp_admin_bar->add_menu( array(
            'parent' => 'utseende',
	        'id' => 'logotyp',
    	    'title' => __('Logotyp'),
	        'href' => admin_url('/themes.php?page=custom-header')
	    ) );    

    	$wp_admin_bar->add_menu( array(
            'parent' => 'utseende',
	        'id' => 'meny',
    	    'title' => __('Huvudmeny'),
	        'href' => admin_url('/nav-menus.php')
	    ) );    

    	$wp_admin_bar->add_menu( array(
            'parent' => 'utseende',
	        'id' => 'sidfot',
    	    'title' => __('Sidfot'),
	        'href' => admin_url('/widgets.php')
	    ) );
	    
    	$wp_admin_bar->add_menu( array(
            'parent' => 'utseende',
	        'id' => 'F&auml;rgtema',
    	    'title' => __('F&auml;rgtema'),
	        'href' => admin_url('/themes.php?page=theme_options')
	    ) );
	    
    $wp_admin_bar->add_menu( array(
        'id' => 'settings',
        'title' => __('Allm&auml;nna Inst&auml;llningar'),
        'href' => admin_url('/options-general.php')
    ) );
	    
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
*/


// REMOVE DASHBOARD WIDGETS
/*
function disable_default_dashboard_widgets() {

	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');

	remove_meta_box('sf_announce', 'dashboard', 'normal');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');
*/


//GRID SYSTEM
		
		/*clear*/
		function clear_handler( $atts, $content = null ) 
		{ return '<div class="clear">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'clear', 'clear_handler' );

		/*grid_1*/
		function grid_1_handler( $atts, $content = null ) 
		{ return '<div class="grid_1">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_1', 'grid_1_handler' );
		/*grid_2*/
		function grid_2_handler( $atts, $content = null ) 
		{ return '<div class="grid_2">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_2', 'grid_2_handler' );
		/*grid_3*/
		function grid_3_handler( $atts, $content = null ) 
		{ return '<div class="grid_3">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_3', 'grid_3_handler' );
		/*grid_4*/
		function grid_4_handler( $atts, $content = null ) 
		{ return '<div class="grid_4">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_4', 'grid_4_handler' );
		/*grid_5*/
		function grid_5_handler( $atts, $content = null ) 
		{ return '<div class="grid_5">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_5', 'grid_5_handler' );
		/*grid_6*/
		function grid_6_handler( $atts, $content = null ) 
		{ return '<div class="grid_6">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_6', 'grid_6_handler' );
		/*grid_7*/
		function grid_7_handler( $atts, $content = null ) 
		{ return '<div class="grid_7">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_7', 'grid_7_handler' );
		/*grid_8*/
		function grid_8_handler( $atts, $content = null ) 
		{ return '<div class="grid_8">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_8', 'grid_8_handler' );
		/*grid_9*/
		function grid_9_handler( $atts, $content = null ) 
		{ return '<div class="grid_9">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_9', 'grid_9_handler' );
		/*grid_10*/
		function grid_10_handler( $atts, $content = null ) 
		{ return '<div class="grid_10">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_10', 'grid_10_handler' );
		/*grid_11*/
		function grid_11_handler( $atts, $content = null ) 
		{ return '<div class="grid_11">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_11', 'grid_11_handler' );
		/*grid_12*/
		function grid_12_handler( $atts, $content = null ) 
		{ return '<div class="grid_12">' . do_shortcode($content) . '</div>'; }
		add_shortcode( 'grid_12', 'grid_12_handler' );

?>