<?php
/**
 * The Template for displaying all single posts
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(''); ?>
<?php 
    while (have_posts()): the_post(); ?>
<section class="header-breadcrumb">
            <div class="container">
                    <div class="row m0 page-cover">
                        <div class="section-header">
                            <h2><?php the_title();?></h2>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'financial' ); ?></a></li>
                            <li><?php if(isset($financial_redux_demo['service_title'])){?>
                                    <?php echo esc_attr($financial_redux_demo['service_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Services', 'financial' );
                                    }
                                    ?></li>
                            <li class="active"><?php the_title();?></li>
                        </ol>
                    </div>
                </div>
        </section>
<section class="services-bonds-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 sidebar-right sidebar_res">
                        <?php get_sidebar();?>
                    </div>
                    <div class="col-md-9 bonds-info">
                        <?php the_content();?>
                            <?php wp_link_pages(); ?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile; ?>
   <?php
get_footer();
?>