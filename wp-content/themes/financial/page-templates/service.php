<?php                
/*
 * Template Name: Services Template
 * Description: A Page Template with a Page Builder design.
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(); ?>
<section class="header-breadcrumb">
            <div class="container">
                    <div class="row m0 page-cover">
                        <div class="section-header">
                            <h2><?php if(isset($financial_redux_demo['service_title'])){?>
                                    <?php echo esc_attr($financial_redux_demo['service_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Services', 'financial' );
                                    }
                                    ?></h2>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'financial' ); ?></a></li>
                            <li class="active"><?php if(isset($financial_redux_demo['service_title'])){?>
                                    <?php echo esc_attr($financial_redux_demo['service_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Services', 'financial' );
                                    }
                                    ?></li>
                        </ol>
                    </div>
                </div>
        </section>
        <!--End breadcrumb area-->

        <!--start  latest featured area-->
        <section class="latest-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 featured-left">
                        <div class="row">
                         <?php 
    $args = array(    
                            'paged' => $paged,
                            'post_type' => 'service',
                            );
                        $wp_query = new WP_Query($args);
                        while ($wp_query -> have_posts()): $wp_query -> the_post(); 
?> 
                            <div class="col-md-4 col-sm-6">
                                <div class="items">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?php the_permalink();?>"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt=""></a><?php } ?>
                                    <a href="<?php the_permalink();?>"><h2 class="tittle"><?php the_title();?></h2></a>
                                    <p><?php if(isset($financial_redux_demo['service_excerpt'])){?>
                                <?php echo esc_attr(financial_service_excerpt($financial_redux_demo['service_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(financial_service_excerpt(50)); 
                                }
                                ?></p>
                                </div>
                            </div>

                            <?php endwhile; ?>
                        </div>
                        <div class="text-center">
            <?php financial_pagination();?>
            </div>
                    </div>
                    <div class="col-md-3 sidebar-right">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </section>

            <?php
get_footer();
?>