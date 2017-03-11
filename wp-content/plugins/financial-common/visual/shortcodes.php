<?php 
$textdoimain = 'financial';
global $pre_text;

$pre_text = 'VG ';




//add

//Item Slider
add_shortcode('item_slider', 'item_slider_func');
function item_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'heading1' => '',
        'heading2' => '',
        'desc' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item slider-img">
      <div class="slider-img">
          <img src="<?php echo esc_url($images[0]);?>" alt="">
      </div>
      <div class="s-content">
          <h3 class="wow slideInLeft"><?php echo htmlspecialchars_decode(esc_attr($heading1));?></h3>
          <h2 class="wow slideInRight"><?php echo htmlspecialchars_decode(esc_attr($heading2));?></h2>
          <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
          <a class="btn button" href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
      </div>
  </div>
<?php  return ob_get_clean();
} 

add_shortcode('service_group', 'service_group_func');
function service_group_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'desc' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
       <div class="col-md-4 service-group-1">
              <div class="box-i">
                  <img src="<?php echo esc_url($images[0]);?>" alt="">
              </div>
              <div class="content">
                  <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                  <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                  <a class="read-button" href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?><i class="arrow_right"></i></a>
              </div>
          </div>
<?php  return ob_get_clean();
} 
add_shortcode('service_info', 'service_info_func');
function service_info_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'desc' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
       <div class="col-md-3 col-sm-6">
                  <div class="s-info">
                      <span><?php echo htmlspecialchars_decode(esc_attr($title));?></span>
                  </div>
                  <div class="s-info-text">
                      <h4><?php echo htmlspecialchars_decode(esc_attr($desc));?></h4>
                  </div>
              </div>
<?php  return ob_get_clean();
}  
add_shortcode('about_us', 'about_us_func');
function about_us_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
        'title' => '',
        'desc' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    ?> 
    <section class="about-us-area" style="background: url('<?php echo esc_url($images1[0]);?>') no-repeat scroll center center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 a-text">
                        <div class="section-header">
                            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                            <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                            <a class="btn button" href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo esc_url($images2[0]);?>" alt="">
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
}  
add_shortcode('baner_area', 'baner_area_func');
function baner_area_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'desc' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
     <section class="call-action-baner-area" style="background: url('<?php echo esc_url($images[0]);?>') no-repeat scroll center center;">
            <div class="baner-content">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
                <a class="btn button" href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
            </div>
        </section>
<?php  return ob_get_clean();
} 
add_shortcode('service_us', 'service_us_func');
function service_us_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'desc' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
       <div class="service-group-1">
              <div class="box-i">
                  <img src="<?php echo esc_url($images[0]);?>" alt="">
              </div>
              <div class="content">
                  <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                  <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
              </div>
          </div>
<?php  return ob_get_clean();
} 

add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'type' => 'type1',
        'top' => 'no',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1'){ ?>
      <div class="column <?php if($top == 'yes'){echo esc_html__( 'top', 'financial' );}?>">
        <div class="timeline">
            <div class="media">
                <div class="media-body">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                </div>
                <div class="media-left">
                <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>
                </div>
            </div>
            <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
    </div>
    <?php }else{ ?>
    <div class="column <?php if($top == 'yes'){echo esc_html__( 'top', 'financial' );}?>">
        <div class="timeline">
            <div class="media">
                <div class="media-left">
                <span><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>
                </div>
                <div class="media-body">
                    <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                </div>
            </div>
            <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
} 
add_shortcode('team_item', 'team_item_func');
function team_item_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'twitter' => '#',
        'facebook' => '#',
        'linkedin' => '#',
        'mail' => '#',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
          <div class="team-item">
              <div class="team-img">
                  <img src="<?php echo esc_url($images[0]);?>" alt="">
                  <ul class="social-icon">
                      <li><a href="<?php echo esc_url($twitter);?>"><i class="social_twitter"></i></a></li>
                      <li><a href="<?php echo esc_url($facebook);?>"><i class="social_facebook"></i></a></li>
                      <li><a href="<?php echo esc_url($linkedin);?>"><i class="social_linkedin"></i></a></li>
                      <li><a href="<?php echo esc_url($mail);?>"><i class="icon_mail"></i></a></li>
                  </ul>
              </div>
              <div class="text">
                  <a href="<?php echo esc_url($link);?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?></h4></a>
                  <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
              </div>
          </div>
      </div>
<?php  return ob_get_clean();
} 

add_shortcode('partner_logo', 'partner_logo_func');
function partner_logo_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image1' => '',
        'image2' => '',
        'image3' => '',
        'image4' => '',
        'image5' => '',
        'image6' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,'');
    $images2 = wp_get_attachment_image_src($image2,'');
    $images3 = wp_get_attachment_image_src($image3,'');
    $images4 = wp_get_attachment_image_src($image4,'');
    $images5 = wp_get_attachment_image_src($image5,'');
    $images6 = wp_get_attachment_image_src($image6,'');
    ?> 
    <section class="partner-logo-area" style="background: url('<?php echo esc_url($images1[0]);?>') no-repeat scroll 0 0;  background-size: cover;">
            <div class="container">
                <div class="row">
                   <div class="section-header">
                        <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo esc_url($images2[0]);?>" alt="">
                    </div>
                    <div class="col-md-3 middle_client">
                        <img src="<?php echo esc_url($images3[0]);?>" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo esc_url($images4[0]);?>" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo esc_url($images5[0]);?>" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo esc_url($images6[0]);?>" alt="">
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
} 

add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'number'        =>      '3',
        'orderpost' => '',
        'orderby' => '', 
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,'');
    ?> 
    <div class="col-md-6 l-news-left">
        <h2 class="tittle"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        <?php 
                
    $args = array(    
        'paged' => $paged,
        'post_type' => 'post',
        'posts_per_page' => $number,
        'order' => $orderpost,
        'orderby' => $orderby, 
        );
    $wp_query = new WP_Query($args);
    $j = 0;
    while ($wp_query -> have_posts()): $wp_query -> the_post(); 
    $j++;
    ?>
        <div class="news-info">
            <div class="media">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="media-left">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                </div>
                <?php } ?>
                <div class="media-body">
                    <h3><?php the_title();?></h3>
                    <ul class="nav post-meta">
                        <li><?php the_author_posts_link(); ?></li>
                        <li><?php comments_popup_link( esc_html__('0 Comments', 'financial'), esc_html__('1 Comments', 'financial'), esc_html__('% Comments', 'financial') ); ?></li>
                        <li><a href="#"><?php the_time(get_option( 'date_format' ));?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <a class="read-button" href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?><i class="arrow_right"></i></a>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('news_slider', 'news_slider_func');
function news_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
      <div class="slider-contennt">
          <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
          <div class="slider-img"><img class="img-circle" src="<?php echo esc_url($images[0]);?>" alt=""></div>
          <a href="<?php echo esc_url($link);?>"><h4><?php echo htmlspecialchars_decode(esc_attr($title));?><span> <?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span></h4></a>
      </div>
  </div>
<?php  return ob_get_clean();
} 

add_shortcode('history', 'history_func');
function history_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'text1' => '',
        'text2' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="history-area">
      <div class="container">
          <div class="history">
              <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
              <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
          </div>
          <div class="row">
              <div class="col-sm-6">
                  <div class="history-content text-1">
                      <p><?php echo htmlspecialchars_decode(esc_attr($text1));?></p>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="history-content text-2">
                      <p><?php echo htmlspecialchars_decode(esc_attr($text2));?></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="history-image">
      </div>
  </section>
  <style>
  .history-area .history-image:after {
    background: url("<?php echo esc_url($images[0]);?>") no-repeat scroll center bottom;
  }
  </style>
<?php  return ob_get_clean();
} 

add_shortcode('list_problem', 'list_problem_func');
function list_problem_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '#',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <li><a href="<?php echo esc_url($link);?>"><?php echo htmlspecialchars_decode(esc_attr($title));?></a></li>
<?php  return ob_get_clean();
} 

add_shortcode('get_started', 'get_started_func');
function get_started_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="gets-started-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 text">
                        <p><?php echo htmlspecialchars_decode(esc_attr($title));?></p>
                    </div>
                    <div class="col-sm-3">
                        <div class="get-button">
                            <a href="<?php echo esc_url($link);?>"><button type="submit"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php  return ob_get_clean();
} 

add_shortcode('item_leader', 'item_leader_func');
function item_leader_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
        <img src="<?php echo esc_url($images[0]);?>" alt="">
        <div class="text">
            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('contact_questions', 'contact_questions_func');
function contact_questions_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'title1' => '',
        'text_content' => '',
        'link' => '#',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="contact-questions">
        <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        <div class="row m0 customer-support">
            <div class="content">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title1));?></h2>
                <p><?php echo htmlspecialchars_decode(esc_attr($text_content));?></p>
                <a href="<?php echo esc_url($link);?>"><button type="submit" class="btn button"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></button></a>
            </div>
        </div>
    </div>
    <style>
    .contact-area .contact-questions .customer-support:after {
      background: url("<?php echo esc_url($images[0]);?>") no-repeat scroll left center;
    }
    </style>
<?php  return ob_get_clean();
} 

add_shortcode('contact_info', 'contact_info_func');
function contact_info_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'image' => '',
        'text1' => '',
        'text2' => '',
        'text3' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="contact-info">
        <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        <ul>
            <li>
                <div class="media">
                    <div class="media-left">
                       <i class="pe-7s-map-marker" aria-hidden="true"></i> 
                    </div>
                    <div class="media-body">
                        <?php echo htmlspecialchars_decode(esc_attr($text1));?>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media-left">
                       <i class="pe-7s-call" aria-hidden="true"></i> 
                    </div>
                    <div class="media-body">
                        <?php echo htmlspecialchars_decode(esc_attr($text2));?>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media-left">
                       <i class="pe-7s-clock" aria-hidden="true"></i> 
                    </div>
                    <div class="media-body">
                        <?php echo htmlspecialchars_decode(esc_attr($text3));?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <style>
    .contact-area .contact-info:after {
      background: url("<?php echo esc_url($images[0]);?>") no-repeat scroll 100% bottom;
    }
    </style>
<?php  return ob_get_clean();
} 

add_shortcode('maps', 'maps_func');
function maps_func($atts, $content = null){
    extract(shortcode_atts(array(
        'data_lat' => '',
        'data_lon' => '',
        'data_zoom' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="map">
            <div id="mapBox" class="row m0" data-lat="<?php echo esc_attr($data_lat);?>" data-lon="<?php echo esc_attr($data_lon);?>" data-zoom="<?php echo esc_attr($data_zoom);?>"></div>
        </section> 
<?php  return ob_get_clean();
} 

add_shortcode('location', 'location_func');
function location_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'link' => '#',
        'text_info' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="media">
        <div class="media-left">
            <a href="<?php echo esc_url($link);?>">
                <i class="<?php echo esc_attr($icon);?>"></i>
            </a>
        </div>
        <div class="media-body">
            <?php echo htmlspecialchars_decode(esc_attr($text_info));?>
        </div>
    </div>
<?php  return ob_get_clean();
} 
add_shortcode('item_location', 'item_location_func');
function item_location_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link1' => '#',
        'text_info1' => '',
        'link2' => '#',
        'text_info2' => '',
        'link3' => '#',
        'text_info3' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="item">
        <div class="location-content">
            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
            <div class="media">
                <div class="media-left">
                    <a href="<?php echo esc_url($link1);?>">
                        <i class="pe-7s-map-marker"></i>
                    </a>
                </div>
                <div class="media-body">
                    <?php echo htmlspecialchars_decode(esc_attr($text_info1));?>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="<?php echo esc_url($link2);?>">
                        <i class="pe-7s-call"></i>
                    </a>
                </div>
                <div class="media-body">
                    <?php echo htmlspecialchars_decode(esc_attr($text_info2));?>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="<?php echo esc_url($link3);?>">
                        <i class="pe-7s-clock"></i>
                    </a>
                </div>
                <div class="media-body">
                    <?php echo htmlspecialchars_decode(esc_attr($text_info3));?>
                </div>
            </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 