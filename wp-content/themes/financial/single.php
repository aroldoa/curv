<?php
/**
 * The Template for displaying all single posts
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(''); ?>
<section class="breadcrumb b-banner">
            <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'financial' ); ?></a></li>
                        <li class="active"><?php if(isset($financial_redux_demo['blog_title'])){?>
                                    <?php echo esc_attr($financial_redux_demo['blog_title']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog', 'financial' );
                                    }
                                    ?></li>
                    </ol>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--start  single blog area-->
        <section class="single-blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 single-blog">
                            <?php 
    while (have_posts()): the_post(); 
    $blog_facebook = get_post_meta(get_the_ID(),'_cmb_blog_facebook', true);
    $blog_twitter = get_post_meta(get_the_ID(),'_cmb_blog_twitter', true);
    $blog_google = get_post_meta(get_the_ID(),'_cmb_blog_google', true);
    $blog_other = get_post_meta(get_the_ID(),'_cmb_blog_other', true);
?> 
                        <h2><?php the_title();?></h2>
                        <article class="blog-items">
                            <ul class="post-meta nav">
                                <li><i class="pe-7s-clock"></i><?php the_time(get_option( 'date_format' ));?></li>
                                <li><?php if(isset($financial_redux_demo['blog_by'])){?>
                                    <?php echo esc_attr($financial_redux_demo['blog_by']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Posted by:', 'financial' );
                                    }
                                    ?> <?php the_author_posts_link(); ?></li>
                                <li><i class="pe-7s-chat" aria-hidden="true"></i><?php comments_popup_link( esc_html__('0 Comments', 'financial'), esc_html__('1 Comments', 'financial'), esc_html__('% Comments', 'financial') ); ?></li>
                            </ul>
                            <?php if ( has_post_thumbnail() ) { ?>
                            <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                            <?php } ?>
                            <?php the_content();?>
                            <?php wp_link_pages(); ?>
                        </article>
                        <div class="row m0 posts-social">
                            <ul class="tag">
                                <li><?php
                                                if(get_the_tag_list()) {
                                                    echo get_the_tag_list('',' </li><li> ','');
                                                }
                                            ?></li>
                            </ul>
                            <ul class="social">
                            <?php if($blog_twitter != ''){?>
                                <li><a href="<?php echo esc_url($blog_twitter); ?>"><i class=" social_twitter"></i></a></li><?php } ?>
                                <?php if($blog_facebook != ''){?>
                                <li><a href="<?php echo esc_url($blog_facebook); ?>"><i class="social_facebook"></i></a></li><?php } ?>
                                <?php if($blog_google != ''){?>
                                <li><a href="<?php echo esc_url($blog_google); ?>"><i class="social_googleplus"></i></a></li><?php } ?>
                                <?php if($blog_other != ''){?>
                                <li><a href="<?php echo esc_url($blog_other); ?>">+</a></li><?php } ?>
                            </ul>
                        </div>
                        <?php endwhile; ?>
                        <?php comments_template();?>
                    </div>
                    <div class="col-md-3 sidebar-right sidebar_res">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </section>
   <?php
get_footer();
?>