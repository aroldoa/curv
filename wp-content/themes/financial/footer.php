<?php $financial_redux_demo = get_option('redux_demo');?>
<footer class="footer-area">
            <div class="container">
                <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                <div class="row footer-top">
                    <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-area-1' ); ?>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-2' ); ?>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-3' ); ?>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-4' ); ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <?php if(isset($financial_redux_demo['footer_text'])){?>
                        <?php echo htmlspecialchars_decode(esc_attr($financial_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( '&copy; Copyright 2017 financial | All Rights Reserved.', 'financial' );
                        }
                        ?>
                        </div>
                        <div class="col-md-9 col-sm-8 footer-b-r">
                            <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'footer',
                            'container' => '',
                            'menu_class' => '', 
                            'menu_id' => '',
                            'menu'            => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'echo'            => true,
                             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                             'walker'            => new wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="nav  %2$s">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer area-->


        <?php wp_footer(); ?>
    </body>
</html>