<?php
$financial_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
//Define Text Doimain
$lang = get_template_directory_uri() . '/languages';
load_theme_textdomain('financial', $lang);


//Theme Set up:
function financial_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    //Post formats

    add_post_type_support( 'post', 'post-formats', array( 'audio',  'gallery', 'image', 'video' ) );
    add_post_type_support( 'portfolio', 'post-formats', array( 'gallery', 'image' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in Home page, single, blog, pages ...', 'financial' ),
    'footer' =>  esc_html__( 'Footer Navigation Menu: Chosen menu in Footer', 'financial' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'financial_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function financial_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'financial' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Raleway:400,300,500,600,700,700italic,600italic&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function financial_fonts_url2() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'financial' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat:400,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function financial_fonts_url3() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'financial' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Catamaran:400,700,500,600,100,300,800&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


function financial_theme_scripts_styles() {
	$financial_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    
    wp_enqueue_style( 'financial-fonts', financial_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'financial-fonts2', financial_fonts_url2(), array(), '1.0.0' );
    wp_enqueue_style( 'financial-fonts3', financial_fonts_url2(), array(), '1.0.0' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css');
    wp_enqueue_style( 'bootstrap-select', get_template_directory_uri().'/css/bootstrap-select.min.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style( 'pe-icon-7-stroke', get_template_directory_uri().'/css/pe-icon-7-stroke.min.css');
    wp_enqueue_style( 'style-icon', get_template_directory_uri().'/vendors/elegant-icon/style-icon.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.css');
    wp_enqueue_style( 'style-default', get_template_directory_uri().'/css/style-default.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2016-03-28' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  //Javascript 
    wp_enqueue_script("financial-total", get_template_directory_uri()."/js/total.js",array(),false,true);
   wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("bootstrap-select", get_template_directory_uri()."/js/bootstrap-select.js",array(),false,true);
    wp_enqueue_script("Chart.bundle", get_template_directory_uri()."/js/Chart.bundle.min.js",array(),false,true);
    if(is_page_template('page-templates/page-sidebar.php')){
      wp_enqueue_script("canvasjs", get_template_directory_uri()."/js/canvasjs.min.js",array('jquery'),false,true); }
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/vendors/owl-carousel/owl.carousel.min.js",array('jquery'),false,true);
    wp_enqueue_script("financial-maps",$protocol.'://maps.google.com/maps/api/js',array(),false,true);
    wp_enqueue_script("financial-gmaps", get_template_directory_uri()."/js/gmaps.min.js",array('jquery'),false,true);
    wp_enqueue_script("validate", get_template_directory_uri()."/js/jquery.validate.min.js",array('jquery'),false,true);
    wp_enqueue_script("wow", get_template_directory_uri()."/vendors/wow.js/wow.min.js",array('jquery'),false,true);
    if(is_page_template('page-templates/page-sidebar.php')){
      wp_enqueue_script("chart-canvas", get_template_directory_uri()."/js/chart-canvas.js",array('jquery'),false,true); }
    wp_enqueue_script("financial-custom", get_template_directory_uri()."/js/custom.js",array('jquery'),false,true);
    if ( is_singular('service') ){
    wp_enqueue_script("piechart", get_template_directory_uri()."/js/piechart.js",array('jquery'),false,true);}
    
}
add_action( 'wp_enqueue_scripts', 'financial_theme_scripts_styles' );


//Custom Excerpt Function
function financial_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}



// Widget Sidebar
function financial_widgets_init() {
	register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'financial' ),
    'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'financial' ),        
		'before_widget' => '<div id="%1$s" class="sidebar-widget widget-categories %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h2 class="widget-tittle">',        
		'after_title'   => '</h2>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget Area', 'financial' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'financial' ),
  ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget Area', 'financial' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'financial' ),
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget Area', 'financial' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'financial' ),
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget Area', 'financial' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'financial' ),
  ) );
}
add_action( 'widgets_init', 'financial_widgets_init' );

//function tag widgets
function financial_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'financial_tag_cloud_widget' );
function financial_excerpt() {
  $financial_redux_demo = get_option('redux_demo');
  if(isset($financial_redux_demo['blog_excerpt'])){
    $limit = $financial_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function financial_service_excerpt() {
  $financial_redux_demo = get_option('redux_demo');
  if(isset($financial_redux_demo['service_excerpt'])){
    $limit = $financial_redux_demo['service_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function financial_pagination($prev = 'Prev', $next = 'Next', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
		'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
		'format' 		=> '',
		'current' 		=> max( 1, get_query_var('paged') ),
		'total' 		=> $pages,
		'prev_text' => $prev,
        'next_text' => $next,		
        'type'			=> 'list',
		'end_size'		=> 3,
		'mid_size'		=> 3
);
    $return =  paginate_links( $pagination );
	echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination text-center">', $return );
}

function financial_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '">
            <input type="search" class="form-control" placeholder="'.esc_html__('Search for...', 'financial').'" value="' . get_search_query() . '" name="s" id="s">
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'financial_search_form' );
//Custom comment List:

// Comment Form
function financial_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
  <div class="row">
              <div class="col-sm-2"> <a class="hover-img" href="javascript:void(0)"> <?php echo get_avatar($comment,$size='100' ); ?> </a> </div>
              <div class="col-sm-10 meta-info">
                <h4><?php printf( esc_html__('%s','financial'), get_comment_author_link()) ?></h4>
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                <div class="meta"><?php $d = "F d , Y"; printf(get_comment_date($d)) ?><?php echo esc_html__(' at ', 'financial'); ?><?php $t = "g:i a"; printf(get_comment_date($t)) ?></div>
                <p><?php comment_text() ?></p>
              </div>
            </div>
   
<?php
}


//Code Visual Compurso.
//require_once get_template_directory() . '/visual/shortcodes.php';
//require_once get_template_directory() . '/visual/vc_shortcode.php';
//if(class_exists('WPBakeryVisualComposerSetup')){
function financial_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'financial_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'financial'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "financial"),   
    )); 

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'financial' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'financial' ) => 'type2',
                                esc_html__( 'Section Slider', 'financial' ) => 'slider', 
                                esc_html__( 'Section Services', 'financial' ) => 'services',
                                esc_html__( 'Choose Us', 'financial' ) => 'choose_us',
                                esc_html__( 'Process', 'financial' ) => 'process',
                                esc_html__( 'Team Area', 'financial' ) => 'team',
                                esc_html__( 'Latest News', 'financial' ) => 'latest_news',
                                esc_html__( 'Section Problem', 'financial' ) => 'problem',
                                esc_html__( 'Leader Area', 'financial' ) => 'leaders',
                                esc_html__( 'New Email', 'financial' ) => 'new_email',
                                esc_html__( 'Section Contact', 'financial' ) => 'contact',
                                esc_html__( 'Section Request', 'financial' ) => 'request',
                                esc_html__( 'Section Location', 'financial' ) => 'location',
                             ),
                             'description' => esc_html__( 'Select type row', 'financial' )
      )); 
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'financial'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "financial"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'financial' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'financial' )
      )); 

// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'financial'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "financial"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Column description', 'financial'),
                              "param_name" => "desc",
                              "value" => "",
                              "description" => esc_html__("description of column", "financial"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'financial'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "financial"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'financial'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "financial"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'financial' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'financial' ) => 'none',
                                esc_html__( 'Column', 'financial' ) => 'column',
                                esc_html__( 'Service Group', 'financial' ) => 'service_group',
                                esc_html__( 'Services Promo', 'financial' ) => 'services_promo',
                                esc_html__( 'Services Right', 'financial' ) => 'service_right',
                                esc_html__( 'News Right', 'financial' ) => 'news_right',
                                esc_html__( 'List Problem', 'financial' ) => 'list_problem',
                                esc_html__( 'Contact Form', 'financial' ) => 'contact_form',
                                esc_html__( 'Item Location', 'financial' ) => 'item_location',
                             ),
                             'description' => esc_html__( 'Select type section content', 'financial' )
      )); 

}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'financial_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function financial_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
             // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'financial' ), // The plugin name.
            'slug'               => esc_html__( 'visualcomposer', 'financial' ), // The plugin slug (typically the folder name).
            'source'             => esc_url('http://shtheme.com/plugins/financial/js_composer.zip'), // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),		
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
		
		array(
            'name'      => esc_html__( 'Contact Form 7', 'financial' ),
            'slug'      => esc_html__( 'contact-form-7', 'financial' ),
            'required'  => true,
        ),
        array(
            'name'                     => esc_html__( 'financial Common', 'financial' ),
            'slug'                     => esc_html__( 'financial-common', 'financial' ),
            'required'                 => true,
            'source'                   => esc_url('http://shtheme.com/plugins/financial/financial-common.zip'),
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'financial' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'financial' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'financial' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'financial' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'financial' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'financial' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'financial' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'financial' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'financial' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'financial' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'financial' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'financial' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'financial' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'financial' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'financial' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'financial' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'financial' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}
?>