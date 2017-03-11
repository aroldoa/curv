<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    //'bg_color'        => '',
    'bg_image_repeat' => '',
    //'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'wrap_class'=>'',
    'ses_title'=>'',
    'type_row' => '',
    'ses_desc' => '',
    'ses_image' => '',
), $atts));

// wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
// wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$images = wp_get_attachment_image_src($ses_image,'');
if($type_row == 'type2'){
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}elseif($type_row == 'slider'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="slider-area">
            <div class="slider-carousel">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
        </section>';
}elseif($type_row == 'services'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services-area">
            <div class="container">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
        </section>';

}elseif($type_row == 'choose_us'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="why-choose-us-area">
            <div class="container">
                <div class="section-header">
                    <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                </div>
                <div class="row choose-us">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
        </section>
<style>
.why-choose-us-area:after {
    background: url('.esc_url($images[0]).') no-repeat scroll center bottom;
}
</style>
        ';

}elseif($type_row == 'process'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="process-area">
            <div class="container">
                <div class="section-header">
                    <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                </div>
                <div class="row m0 p-timeline">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
        </section> ';

}elseif($type_row == 'team'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="team-area">
            <div class="container">
                <div class="section-header">
                    <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                </div>
                <div class="team">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
        </section> ';

}elseif($type_row == 'latest_news'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="latest-news-area">
            <div class="container">
                <div class="row">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
        </section> ';

}elseif($type_row == 'problem'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="problem-group-area">
            <div class="container">
                <div class="history">
                    <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                    <p>'.htmlspecialchars_decode($ses_desc).'</p>
                </div>
                <div class="row problem-group">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
        </section>';    
}elseif($type_row == 'leaders'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="leaders-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                            <p>'.htmlspecialchars_decode($ses_desc).'</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="leaders-slider">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
                    </div>
                </div>
            </div>
        </section>';    
}elseif($type_row == 'new_email'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="email-signup-area" style="background: url('.esc_url($images[0]).');">
            <div class="container">
                <div class="email-content">
                    <h2>'.htmlspecialchars_decode($ses_title).'</h2>
                    <p>'.htmlspecialchars_decode($ses_desc).'</p>';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
        </section>';   
}elseif($type_row == 'contact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="contact-area">
            <div class="container">
                <div class="row">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
        </section>';   
}elseif($type_row == 'request'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="request-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 request-content">
                        <h2 class="tittle">'.htmlspecialchars_decode($ses_title).'</h2>
                        <p>'.htmlspecialchars_decode($ses_desc).'</p>
                    </div>
                    <div class="col-md-6 request-contact">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
        </section>';
}elseif($type_row == 'location'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="location-area" style="background: url('.esc_url($images[0]).') no-repeat scroll center center;   background-size: cover;">
            <div class="container">
                <div class="location-slider">';
     $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
        </section>';

}else{
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}
echo $output;

