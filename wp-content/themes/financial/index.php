<?php
 $financial_redux_demo = get_option('redux_demo');
get_header(); ?>
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
?> 
                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a><?php if ( is_sticky() )
     echo '<span class="featured-post">' . esc_html__( 'Sticky', 'financial' ) . '</span>';
     ?></h2>
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
                            <a  href="<?php the_permalink();?>"> 
          <?php if ( has_post_thumbnail() ) { ?>
                            <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                            <?php } ?> </a>
                            <p><?php if(isset($financial_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(financial_excerpt($financial_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(financial_excerpt(50)); 
                                }
                                ?></p>
                                <a href="<?php the_permalink();?>" class="readmore"><?php if(isset($financial_redux_demo['read_more'])){?>
                                    <?php echo esc_attr($financial_redux_demo['read_more']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'financial' );
                                    }
                                    ?></a>
                        </article>
                        <?php endwhile; ?>
                        <div class="text-center">
                        <?php financial_pagination();?>
                        </div>
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