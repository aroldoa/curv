<?php 
$textdoimain = 'financial';
global $pre_text;

$pre_text = 'VG ';


// add

//Item Slider
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item  Slider", 'financial'),
   "base" => "item_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image Slider', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background Slider from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Heading 1", 'financial'),
      "param_name" => "heading1",
      "value" => "",
      "description" => __("Heading 1", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Heading 2", 'financial'),
      "param_name" => "heading2",
      "value" => "",
      "description" => __("Heading 2", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link slide", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Group", 'financial'),
   "base" => "service_group",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Service", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Service", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Service", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Info", 'financial'),
   "base" => "service_info",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Service", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Service", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us", 'financial'),
   "base" => "about_us",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image About  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title About", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title About", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link About", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Banner Area", 'financial'),
   "base" => "baner_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title ", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title ", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link ", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
   
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Us", 'financial'),
   "base" => "service_us",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Service", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Service", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Process", 'financial'),
   "base" => "process",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Process", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Process", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle Process", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle Process", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type Process', 'financial' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'financial' ) => 'type1',
            __( 'Type 2', 'financial' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'financial' )
      ),
   array(
         'type' => 'dropdown',
         'heading' => __( 'Top Process', 'financial' ),
         'param_name' => 'top',
         'value' => array(
            __( 'No', 'financial' ) => 'no',
            __( 'Yes', 'financial' ) => 'yes',
         ),
         'description' => __( 'Select field do you want Order.', 'financial' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Team", 'financial'),
   "base" => "team_item",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Team", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Team", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter", 'financial'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link facebook", 'financial'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link facebook", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link linkedin", 'financial'),
      "param_name" => "linkedin",
      "value" => "",
      "description" => __("Link linkedin", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link mail", 'financial'),
      "param_name" => "mail",
      "value" => "",
      "description" => __("Link mail", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Team", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Team", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Partner Logo", 'financial'),
   "base" => "partner_logo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Section", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Section", 'financial')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image  background', 'financial' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Logo  1', 'financial' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image Logo  from media library to do your signature.', 'financial' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Logo  2', 'financial' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image Logo  from media library to do your signature.', 'financial' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Logo  3', 'financial' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image Logo  from media library to do your signature.', 'financial' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Logo  4', 'financial' ),
         'param_name' => 'image5',
         'value' => '',
         'description' => __( 'Select image Logo  from media library to do your signature.', 'financial' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Logo  5', 'financial' ),
         'param_name' => 'image6',
         'value' => '',
         'description' => __( 'Select image Logo  from media library to do your signature.', 'financial' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'financial'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'financial')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of post You want show.", 'financial'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of post You want show.", 'financial')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'financial' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'ASC : lowest to highest', 'financial' ) => 'ASC',
            __( 'DESC : highest to lowest', 'financial' ) => 'DESC',
         ),
         'description' => __( 'Select field do you want Order.', 'financial' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'financial' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Title', 'financial' ) => 'title',
            __( 'Date', 'financial' ) => 'date',
            __( 'Random', 'financial') => 'random',
         ),
         'description' => __( 'Select field do you want Order.', 'financial' )
      ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Blog", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."News Slider", 'financial'),
   "base" => "news_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Item", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Item", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'financial'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link item", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link item", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Section History", 'financial'),
   "base" => "history",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  History', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image History  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title History", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title History", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text History 1", 'financial'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Text History", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text History 2", 'financial'),
      "param_name" => "text2",
      "value" => "",
      "description" => __("Text History", 'financial')
   ),
   
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."List Problem", 'financial'),
   "base" => "list_problem",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Problem", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Problem", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Problem", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Problem", 'financial')
   ),
   
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Get Started", 'financial'),
   "base" => "get_started",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Started", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Started", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Started", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Started", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item Leader", 'financial'),
   "base" => "item_leader",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Item", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Item", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact Questions", 'financial'),
   "base" => "contact_questions",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Item", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Item", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'financial'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Content", 'financial'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title Content", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Content", 'financial'),
      "param_name" => "text_content",
      "value" => "",
      "description" => __("Text Content", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link  ", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link  ", 'financial')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text button ", 'financial'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text button", 'financial')
   ),
   
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact Info", 'financial'),
   "base" => "contact_info",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image  ', 'financial' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background  from media library to do your signature.', 'financial' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title Item", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title Item", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 1", 'financial'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Text Info 1", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 2", 'financial'),
      "param_name" => "text2",
      "value" => "",
      "description" => __("Text Info 2", 'financial')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 3", 'financial'),
      "param_name" => "text3",
      "value" => "",
      "description" => __("Text Info 3", 'financial')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps", 'financial'),
   "base" => "maps",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array( 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Lat", 'financial'),
      "param_name" => "data_lat",
      "value" => "",
      "description" => __("Data Lat", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Lon", 'financial'),
      "param_name" => "data_lon",
      "value" => "",
      "description" => __("Data Lon", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data Zoom", 'financial'),
      "param_name" => "data_zoom",
      "value" => "",
      "description" => __("Data Zoom", 'financial')
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Location", 'financial'),
   "base" => "location",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array( 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon Location", 'financial'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'financial'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info", 'financial'),
      "param_name" => "text_info",
      "value" => "",
      "description" => __("Text Info", 'financial')
   ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item Location", 'financial'),
   "base" => "item_location",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array( 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'financial'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'financial'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 1", 'financial'),
      "param_name" => "text_info1",
      "value" => "",
      "description" => __("Text Info 1", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'financial'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 2", 'financial'),
      "param_name" => "text_info2",
      "value" => "",
      "description" => __("Text Info 2", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 3", 'financial'),
      "param_name" => "link3",
      "value" => "",
      "description" => __("Link 3", 'financial')
   ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 3", 'financial'),
      "param_name" => "text_info3",
      "value" => "",
      "description" => __("Text Info 3", 'financial')
   ), 
    )));
}