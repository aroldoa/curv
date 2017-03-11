<?php
/*
 * Template Name: Other Page
 * Description: A Page Template with a Page Builder design.
 */
 $financial_redux_demo = get_option('redux_demo');
get_header(''); ?>

<?php if (have_posts()){ ?>
    
        <?php while (have_posts()) : the_post();
        ?>
<section class="header-breadcrumb">
            <div class="container">
                    <div class="row m0 page-cover">
                        <div class="section-header">
                            <h2><?php the_title();?></h2>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'financial' ); ?></a></li>
                            <li class="active"><?php the_title();?></li>
                        </ol>
                    </div>
                </div>
        </section>
            <?php the_content(); ?>
        <?php endwhile; ?>
    
    <?php }else {
        echo esc_html__( 'Page Canvas For Page Builder', 'financial' );
    }?>
    

<?php get_footer(); ?>