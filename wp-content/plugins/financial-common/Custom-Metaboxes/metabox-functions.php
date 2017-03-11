<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "financial";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(   
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(  
            array(
                'name' => 'Link share Facebook',
                'desc' => 'Share this post on facebook',
                'id'   => $prefix . 'blog_facebook',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Link share Twitter',
                'desc' => 'Share this post on twitter',
                'id'   => $prefix . 'blog_twitter',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Link share Google Plus',
                'desc' => 'Share this post on google Plus',
                'id'   => $prefix . 'blog_google',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Link share Other',
                'desc' => 'Share this post on Other Page',
                'id'   => $prefix . 'blog_other',
                'type'    => 'text',
            ),  
            

        )
    );
    // Add other metaboxes as needed

$meta_boxes[] = array(
        'id'         => 'project_setting',
        'title'      => 'Project Setting',
        'pages'      => array('gallery'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(  
            array(
                    'name' => 'Selected Size',
                    'desc' => 'Selected Size Gallery With Page Masonry,',
                    'id'   => $prefix . 'gallery_size',
                    'type'    => 'select',
                    'options' => array(
                        array( 'name' => 'Small', 'value' => 'small', ),
                        array( 'name' => 'Large', 'value' => 'large', ),
                        ),
                    'default' => 'small',
                ),  

        )
    );
 
	// Add other metaboxes as needed

	// Add other metaboxes as needed
	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
