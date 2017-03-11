<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'desc' =>'',
	'type' => '',
), $atts));

if($type == 'column'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'service_group'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="row m0 service-group">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";
}elseif($type == 'services_promo'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="row m0 services-promo">
                    <div class="section-header">
                        <h2>'.$title.'</h2>
                        <p>'.$desc.'</p>
                    </div>
                    <div class="row services-info">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                    </div>'.$this->endBlockComment($el_class) . "\n";
}elseif($type == 'service_right'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".' <div class="'.$css_class.' col-md-offset-6 why-r-texts">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";
}elseif($type == 'news_right'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".' <div class="col-md-6 l-news-right">
                        <div class="l-slider">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div> '.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'list_problem'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".' <div class="col-sm-4 col-xs-12">
                        <div class="lists">
                            <ul class="nav">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</ul>
                        </div>
                    </div>'.$this->endBlockComment($el_class) . "\n";
}elseif($type == 'contact_form'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".' <div class="'.$css_class.'">
                        <div class="contact-forms">
                            <h2>'.$title.'</h2>
                            <p>'.$desc.'</p>';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div>
                    </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'item_location'){

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);



//$column_id = (!empty($column_id) ? ' id="'.esc_attr($column_id).'"' : '');

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".' <div class="item">
                        <div class="location-content">
                            <h2>'.$title.'</h2>';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div>
                    </div>'.$this->endBlockComment($el_class) . "\n";

}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo $output;