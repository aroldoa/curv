<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
    <head>
    <?php 
$financial_redux_demo = get_option('redux_demo'); 
?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
        <link rel="shortcut icon" href="<?php if(isset($financial_redux_demo['favicon']['url'])){?><?php echo esc_url($financial_redux_demo['favicon']['url']); ?><?php }?>">
        <?php }?>
        <!--    fonts-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Preloader -->
        <div class="sampleContainer">
            <div class="loader">
                <span class="dot dot_1"></span>
                <span class="dot dot_2"></span>
                <span class="dot dot_3"></span>
                <span class="dot dot_4"></span>
            </div>
        </div>

        <header>
            <div class="header-top">
                <div class="container">
                    <ul class="nav top-nav">
                        <li><a href="#"><i class="pe-7s-mail" aria-hidden="true"></i><?php if(isset($financial_redux_demo['header_mail'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($financial_redux_demo['header_mail']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'info@example.com', 'financial' );
                                    }
                                    ?></a></li>
                        <li><a href="#"><i class="pe-7s-call"></i><?php if(isset($financial_redux_demo['header_phone'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($financial_redux_demo['header_phone']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( ' 1900 666 888', 'financial' );
                                    }
                                    ?></a></li>
                        <li><a href="#"><i class="pe-7s-clock"></i><?php if(isset($financial_redux_demo['header_time'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($financial_redux_demo['header_time']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '07:30 to 19:00 Monday to Friday', 'financial' );
                                    }
                                    ?></a></li>
                    </ul>
                    <a class="search" href="#"><i class="pe-7s-search"></i></a>
                </div>
            </div>
            <div class="header-bottom navbar-static-top" id="main_navbar">
                <nav class="navbar navbar-default">
                    <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'financial' );
                                    ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php $financial_redux_demo = get_option('redux_demo');if(isset($financial_redux_demo['logo']['url'])){?>
                                    <?php  if($financial_redux_demo['logo']['url'] != ''){ ?>
                        <img src="<?php echo esc_url($financial_redux_demo['logo']['url']); ?>" alt="">
                        <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="">
                        <?php }}else{ ?>
                        <img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="">
                        <?php } ?>
                        </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php 
                      wp_nav_menu( 
                      array( 
                            'theme_location' => 'primary',
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
                            'items_wrap'      => '<ul class="nav navbar-nav navbar-right %2$s">%3$s</ul>',
                            'depth'           => 0,        
                        )
                     ); ?> 

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>