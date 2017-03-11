<?php
/*
 * Template Name: Page Sidebar
 * Description: A Page Template with a Page Builder design.
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(''); ?>

<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post();
        ?>
<section class="breadcrumb b-banner">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'financial' ); ?></a></li>
                    <li class="active"><?php the_title();?></li>
                </ol>
            </div>
        </section>
        <!--End breadcrumb area-->
     
        <!--start  case-study-area-->
        <section class="case-study-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 case-study">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-3 sidebar-right sidebar_res">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    
    <?php }else {
        echo esc_html__( 'Page Canvas For Page Builder', 'financial' );
    }?>
    

<?php get_footer(); ?>