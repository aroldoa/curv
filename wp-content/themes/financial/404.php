<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php if(isset($financial_redux_demo['404_image']['url']) && $financial_redux_demo['404_image']['url'] != ''){?>
<section class="404-area about-us-area " style=" background: url('<?php echo esc_url($financial_redux_demo['404_image']['url']);?>')  no-repeat scroll center center;     background-size: cover;">
<?php }else{?>
<section class="404-area about-us-area ">
<?php } ?>
            <div class="container">
                <div class="row">
                    <div class="section-404 col-md-12 a-text">
                        <div class="section-header">
                            <h2><i class="fa fa-exclamation-circle" aria-hidden="true"></i><?php if(isset($financial_redux_demo['404_title'])){?>
                                    <?php echo esc_attr($financial_redux_demo['404_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__('404', 'financial' );
                                    }
                                    ?></h2>
                            <p><?php if(isset($financial_redux_demo['404_desc'])){?>
                                    <?php echo esc_attr($financial_redux_demo['404_desc']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Oops... Page not found!', 'financial' );
                                    }
                                    ?></p>
                            <a class="btn button" href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($financial_redux_demo['404_text'])){?>
                                    <?php echo esc_attr($financial_redux_demo['404_text']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Home', 'financial' );
                                    }
                                    ?><i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <?php get_footer(); ?>