<?php


if (!class_exists("Redux_Framework_sample_config")) {

    class Redux_Framework_sample_config {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {
            // This is needed. Bah WordPress bugs.  ;)
            if ( defined('TEMPLATEPATH') && strpos( Redux_Helpers::cleanFilePath( __FILE__ ), Redux_Helpers::cleanFilePath( TEMPLATEPATH ) ) !== false) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);    
            }
        }

        public function initSettings() {

            if ( !class_exists("ReduxFramework" ) ) {
                return;
            }       
            
            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            // If Redux is running as a plugin, this will remove the demo notice and links
            //add_action( 'redux/plugin/hooks', array( $this, 'remove_demo' ) );
            // Function to test the compiler hook and demo CSS output.
            //add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 2); 
            // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
            // Change the arguments after they've been declared, but before the panel is created
            //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );
            // Change the default value of a field after it's been set, but before it's been useds
            //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );
            // Dynamically add a section. Can be also used to modify sections/fields
            add_filter('redux/options/' . $this->args['opt_name'] . '/sections', array($this, 'dynamic_section'));

            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        function compiler_action($options, $css) {
            //echo "<h1>The compiler hook has run!";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )

            /*
              // Demo of how to use the dynamic CSS and write your own static CSS file
              $filename = dirname(__FILE__) . '/style' . '.css';
              global $wp_filesystem;
              if( empty( $wp_filesystem ) ) {
              require_once( ABSPATH .'/wp-admin/includes/file.php' );
              WP_Filesystem();
              }

              if( $wp_filesystem ) {
              $wp_filesystem->put_contents(
              $filename,
              $css,
              FS_CHMOD_FILE // predefined mode settings for WP files
              );
              }
             */
        }

        function dynamic_section($sections) {
            //$sections = array();
            $sections[] = array(
                'title' => esc_html__('Section via hook', 'redux-framework-demo'),
                'desc' => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
                'icon' => 'el-icon-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }

        function change_arguments($args) {
            //$args['dev_mode'] = true;

            return $args;
        }


        function change_defaults($defaults) {
            $defaults['str_replace'] = "Testing filter hook!";

            return $defaults;
        }

        // Remove the demo link and the notice of integrated demo from the redux-framework plugin
        function remove_demo() {

            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if (class_exists('ReduxFrameworkPlugin')) {
                remove_filter('plugin_row_meta', array(ReduxFrameworkPlugin::get_instance(), 'plugin_meta_demo_mode_link'), null, 2);
            }

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array(ReduxFrameworkPlugin::get_instance(), 'admin_notices'));
        }

        public function setSections() {

            // Background Patterns Reader
            $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
            $sample_patterns_url = ReduxFramework::$_url . '../sample/patterns/';
            $sample_patterns = array();

            if (is_dir($sample_patterns_path)) :

                if ($sample_patterns_dir = opendir($sample_patterns_path)) :
                    $sample_patterns = array();

                    while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

                        if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                            $name = explode(".", $sample_patterns_file);
                            $name = str_replace('.' . end($name), '', $sample_patterns_file);
                            $sample_patterns[] = array('alt' => $name, 'img' => $sample_patterns_url . $sample_patterns_file);
                        }
                    }
                endif;
            endif;

            ob_start();

            $ct = wp_get_theme();
            $this->theme = $ct;
            $item_name = $this->theme->get('Name');
            $tags = $this->theme->Tags;
            $screenshot = $this->theme->get_screenshot();
            $class = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'redux-framework-demo'), $this->theme->display('Name'));
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_html_e('Current theme preview', 'pontus'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_html_e('Current theme preview', 'pontus'); ?>" />
            <?php endif; ?>

                <h4>
            <?php echo $this->theme->display('Name'); ?>
                </h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(__('By %s', 'redux-framework-demo'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(__('Version %s', 'redux-framework-demo'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . esc_html__('Tags', 'redux-framework-demo') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo $this->theme->display('Description'); ?></p>
                <?php
                if ($this->theme->parent()) {
                    printf(' <p class="howto">' . esc_html__('This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'pontus') . '</p>', esc_html__('http://codex.wordpress.org/Child_Themes', 'redux-framework-demo'), $this->theme->parent()->display('Name'));
                }
                ?>

                </div>

            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

            $sampleHTML = '';
            if (file_exists(dirname(__FILE__) . '/info-html.html')) {
                /** @global WP_Filesystem_Direct $wp_filesystem  */
                global $wp_filesystem;
                if (empty($wp_filesystem)) {
                    require_once(ABSPATH . '/wp-admin/includes/file.php');
                    WP_Filesystem();
                }
                $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
            }
            
            // ACTUAL DECLARATION OF SECTIONS          

            $this->sections[] = array(
                'icon' => 'el-icon-cogs',
                'title' => __('General Settings', 'financial'),
                'fields' => array(                  
                    array(
                        'id' => 'author_content',
                        'type' => 'textarea',
                        'title' => __('Author content', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Vergatheme'
                    ),
                    array(
                        'id' => 'description_content',
                        'type' => 'textarea',
                        'title' => __('Description content', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Decent Material CV'
                    ),
                    array(
                        'id' => 'keywords_content',
                        'type' => 'textarea',
                        'title' => __('SEO Description', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => ' '
                    ),
                    array(
                        'id' => 'viewport_content',
                        'type' => 'textarea',
                        'title' => __('Viewport content', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'width=device-width, initial-scale=1'
                    ),
                    array(
                        'id' => 'seo_des',
                        'type' => 'textarea',
                        'title' => __('SEO Description', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'seo_key',
                        'type' => 'textarea',
                        'title' => __('SEO Keywords', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => ''
                    ), 
                )
            );
            
            $this->sections[] = array(
                'icon' => ' el-icon-picture',
                'title' => __('Logo & Favicon Settings', 'financial'),
                'fields' => array(      
                    array(
                        'id' => 'favicon',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Custom Favicon', 'financial'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Upload your Favicon.', 'financial'),
                        'subtitle' => __('', 'financial'),
                        'default' => ''
                    ),
                    array(
                        'id' => 'logo',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Logo Upload', 'financial'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'financial'),
                        'subtitle' => __('Upload your logo.', 'financial'),
                        'default' => ''
                    ),
                )
            );

            $this->sections[] = array(
                'icon' => ' el-icon-credit-card',
                'title' => __('Header Settings', 'financial'),
                'fields' => array(  
                    array(
                        'id' => 'header_mail',
                        'type' => 'text',
                        'title' => __('Header Mail', 'financial'),
                        'subtitle' => __('Input Header Mail', 'financial'),
                        'default' => 'info@example.com',
                    ), 
                    array(
                        'id' => 'header_phone',
                        'type' => 'text',
                        'title' => __('Header Phone', 'financial'),
                        'subtitle' => __('Input Header Phone', 'financial'),
                        'default' => ' 1900 666 888',
                    ), 
                    array(
                        'id' => 'header_time',
                        'type' => 'text',
                        'title' => __('Header text Time', 'financial'),
                        'subtitle' => __('Input Header Time', 'financial'),
                        'default' => '07:30 – 19:00 Monday to Friday',
                    ), 

                )
            );
            
            $this->sections[] = array(
                'icon' => 'el-icon-list',
                'title' => __('Blog Settings', 'financial'),
                'fields' => array(
                    array(
                        'id' => 'blog_title',
                        'type' => 'text',
                        'title' => __('Blog title', 'financial'),
                        'subtitle' => __('Input Blog title', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Blog'
                    ),
                    array(
                        'id' => 'blog_excerpt',
                        'type' => 'text',
                        'title' => __('Blog custom excerpt leng', 'financial'),
                        'subtitle' => __('Input Blog custom excerpt leng', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => '30'
                    ),
                    array(
                        'id' => 'read_more',
                        'type' => 'text',
                        'title' => __('Button Text For Post', 'financial'),
                        'subtitle' => __('Input Button Text', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Read more'
                    ),
                    array(
                        'id' => 'blog_share',
                        'type' => 'text',
                        'title' => __('Button Text Share', 'financial'),
                        'subtitle' => __('Input Text Share', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Share'
                    ),
                    array(
                        'id' => 'blog_by',
                        'type' => 'text',
                        'title' => __('Text by', 'financial'),
                        'subtitle' => __('Input Text by', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Posted by:'
                    ),
                 )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-list',
                'title' => __('Service Settings', 'financial'),
                'fields' => array(
                    array(
                        'id' => 'service_title',
                        'type' => 'text',
                        'title' => __('Service Title', 'financial'),
                        'subtitle' => __('Input Service Title', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Services'
                    ),
                    array(
                        'id' => 'service_excerpt',
                        'type' => 'text',
                        'title' => __('Service custom excerpt leng', 'financial'),
                        'subtitle' => __('Input Service custom excerpt leng', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => '30'
                    ),
                 )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-list',
                'title' => __('Page Settings', 'financial'),
                'fields' => array(
                    
                    array(
                        'id' => 'page_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('Page image background Upload', 'financial'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'financial'),
                        'subtitle' => __('Upload page background image.', 'financial'),
                        'default' => ''
                    ),
                    
                 )
            );


               
            $this->sections[] = array(
                'icon' => 'el-icon-graph',
                'title' => __('404 Settings', 'financial'),
                'fields' => array(
                    array(
                        'id' => '404_image',
                        'type' => 'media',
                        'url' => true,
                        'title' => __('404 image background Upload', 'financial'),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('', 'financial'),
                        'subtitle' => __('Upload page background image.', 'financial'),
                        'default' => ''
                    ),
                     array(
                        'id' => '404_title',
                        'type' => 'text',
                        'title' => __('404  Title', 'financial'),
                        'subtitle' => __('Input 404  Title', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => '404 Page'
                    ),  
                    array(
                        'id' => '404_desc',
                        'type' => 'textarea',
                        'title' => __('404 Desc', 'financial'),
                        'subtitle' => __('Input 404 Desc', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer interdum sem ac magna. Integer in lectus sed ligula commodo commodo. In molestie, neque et porta lobortis, ligula sem auctor mauris, a luctus lacus quam sit amet augue. Aliquam eu felis.'
                    ), 
                    array(
                        'id' => '404_text',
                        'type' => 'text',
                        'title' => __('404 Text Button', 'financial'),
                        'subtitle' => __('Input 404 Text Button', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'Go Home'
                    ), 
                               
                 )
            );
            $this->sections[] = array(
                'icon' => 'el-icon-graph',
                'title' => __('Form Settings', 'financial'),
                'fields' => array(
                     array(
                        'id' => 'form_email',
                        'type' => 'text',
                        'title' => __('Form email', 'financial'),
                        'subtitle' => __('Form email', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'info@domain.com'
                    ),                 
                 )
            );
            $this->sections[] = array(
                'icon' => 'el-icon-graph',
                'title' => __('Apply Online Settings', 'financial'),
                'fields' => array(
                     array(
                        'id' => 'apply_email',
                        'type' => 'text',
                        'title' => __('Apply email receive', 'financial'),
                        'subtitle' => __('Apply email receive', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => 'info@domain.com'
                    ), 
                     array(
                        'id' => 'apply_pagesend',
                        'type' => 'text',
                        'title' => __('Apply page send', 'financial'),
                        'subtitle' => __('Apply page send', 'financial'),
                        'desc' => __('', 'financial'),
                        'default' => '#'
                    ), 
                    array(
                        'id' => 'apply_template',
                        'type' => 'editor',
                        'title' => __('Apply template', 'financial'),
                        'subtitle' => __('Apply template', 'financial'),
                        'default' => '',
                    ),                     
                 )
            );
            
            $this->sections[] = array(
                'icon' => ' el-icon-credit-card',
                'title' => __('Footer Settings', 'financial'),
                'fields' => array(  
                    array(
                        'id' => 'footer_text',
                        'type' => 'editor',
                        'title' => __('Footer Text', 'financial'),
                        'subtitle' => __('Copyright Text', 'financial'),
                        'default' => '&copy; Copyright 2016 financial | All Rights Reserved.',
                    ), 

                )
            );
            $this->sections[] = array(
                'icon' => 'el-icon-website',
                'title' => __('Styling Options', 'financial'),
                'fields' => array(
                    array(
                            'id' => 'header_bg',
                            'type' => 'media',
                            'url' => true,
                            'title' => __('Background header', 'financial'),
                            'compiler' => 'true',
                            //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                            'desc' => __('', 'financial'),
                            'subtitle' => __('Upload your background header.', 'financial'),
                            'default' => ''
                        ),
                    array(
                        'id' => 'rtl',
                        'type' => 'checkbox',
                        'title' => __('Support RTL language', 'financial'),
                        'subtitle' => '',
                        'desc' => '',
                        'default' => '0'// 1 = on | 0 = off
                    ),
                    array(
                        'id' => 'chosen-color',
                        'type' => 'checkbox',
                        'title' => __('Enable edit color', 'financial'),
                        'subtitle' => '',
                        'desc' => '',
                        'default' => '0'// 1 = on | 0 = off
                    ),
                    array(
                        'id' => 'main-color-1',
                        'type' => 'color',
                        'title' => __('Theme Main Color 1', 'financial'),
                        'subtitle' => __('Pick the main color for the theme (default: #ffe79b).', 'financial'),
                        'default' => '#86b535',
                        'validate' => 'color',
                    ),  
                    
                    
                    array(
                        'id' => 'body-font2',
                        'type' => 'typography',
                        'output' => array('body'),
                        'title' => __('Body Font', 'financial'),
                        'subtitle' => __('Specify the body font properties.', 'financial'),
                        'google' => true,
                        'default' => array(
                            'color' => '#989898',
                            'font-size' => '14px',
                            'font-weight' => '300',
                            'font-family' => '"Roboto Slab", serif',
                        ),
                    ),
                     array(
                        'id' => 'custom-css',
                        'type' => 'ace_editor',
                        'title' => __('CSS Code', 'financial'),
                        'subtitle' => __('Paste your CSS code here.', 'financial'),
                        'mode' => 'css',
                        'theme' => 'monokai',
                        'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default' => "#header{\nmargin: 0 auto;\n}"
                    ),
                )
            );

        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id' => 'redux-opts-1',
                'title' => esc_html__('Theme Information 1', 'pontus'),
                'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'pontus')
            );

            $this->args['help_tabs'][] = array(
                'id' => 'redux-opts-2',
                'title' => esc_html__('Theme Information 2', 'pontus'),
                'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'pontus')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'pontus');
        }

        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name' => 'redux_demo', // This is where your data is stored in the database and also becomes your global variable name.
                'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
                'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
                'menu_type' => 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu' => true, // Show the sections below the admin menu item or not
                'menu_title' => esc_html__('financial Options', 'pontus'),
                'page' => esc_html__('financial Options', 'pontus'),
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => 'AIzaSyBM9vxebWLN3bq4Urobnr6tEtn7zM06rEw', // Must be defined to add google fonts to the typography module
                //'admin_bar' => false, // Show the panel pages on the admin bar
                'global_variable' => '', // Set a different name for your global variable other than the opt_name
                'dev_mode' => true, // Show the time the page took to load, etc
                'customizer' => true, // Enable basic customizer support
                // OPTIONAL -> Give you extra features
                'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
                'menu_icon' => '', // Specify a custom URL to an icon
                'last_tab' => '', // Force your panel to always open to a specific tab (by id)
                'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
                'page_slug' => '_options', // Page slug used to denote the panel
                'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
                'default_show' => false, // If true, shows the default value next to each field that is not the default value.
                'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
                // CAREFUL -> These options are for advanced use only
                'transient_time' => 60 * MINUTE_IN_SECONDS,
                'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                //'domain'              => 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
                //'footer_credit'       => '', // Disable the footer credit of Redux. Please leave if you can help it.
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'show_import_export' => true, // REMOVE
                'system_info' => false, // REMOVE
                'help_tabs' => array(),
                'help_sidebar' => '', // esc_html__( '', $this->args['domain'] );            
            );


            // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.     
            $this->args['share_icons'][] = array(
                'url' => 'https://github.com/ReduxFramework/ReduxFramework',
                'title' => 'Visit us on GitHub',
                'icon' => 'el-icon-github'
                    // 'img' => '', // You can use icon OR img. IMG needs to be a full URL.
            );
            $this->args['share_icons'][] = array(
                'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                'title' => 'Like us on Facebook',
                'icon' => 'el-icon-facebook'
            );
            $this->args['share_icons'][] = array(
                'url' => 'http://twitter.com/reduxframework',
                'title' => 'Follow us on Twitter',
                'icon' => 'el-icon-twitter'
            );
            $this->args['share_icons'][] = array(
                'url' => 'http://www.linkedin.com/company/redux-framework',
                'title' => 'Find us on LinkedIn',
                'icon' => 'el-icon-linkedin'
            );



            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace("-", "_", $this->args['opt_name']);
                }
                $this->args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'pontus'), $v);
            } else {
                $this->args['intro_text'] = esc_html__('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'pontus');
            }

            // Add content after the form.
            $this->args['footer_text'] = esc_html__('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'pontus');
        }

    }

    new Redux_Framework_sample_config();
}


if (!function_exists('redux_my_custom_field')):

    function redux_my_custom_field($field, $value) {
        print_r($field);
        print_r($value);
    }

endif;

if (!function_exists('redux_validate_callback_function')):

    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';
        /*
          do your validation

          if(something) {
          $value = $value;
          } elseif(something else) {
          $error = true;
          $value = $existing_value;
          $field['msg'] = 'your custom error message';
          }
         */

        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }


endif;
