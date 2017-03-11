<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
<div class="comments">
            <h3 class="comments-title"><?php echo esc_html__('Comments', 'financial'); ?></h3>
            <?php wp_list_comments('callback=financial_theme_comment'); ?>
            <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
                    <nav class="navigation comment-navigation" role="navigation">          
                        <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'financial' ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'financial' ) ); ?></div>
                    </nav><!-- .comment-navigation -->
                <?php endif; // Check for comment navigation ?>

                <?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'financial' ); ?></p>
                <?php endif; ?> 
          </div>
<?php endif; ?> 
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'contactForm',        
                'class_form' => 'row contact-form',                         
                'title_reply'=> 'Leave a reply',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col-sm-4 form-group"><input type="text"  placeholder="'.esc_html__('First name', 'financial').'" required="" class="form-control"></div>
                            ',
                    'email' => '<div class="col-sm-4 form-group"><input type="email" placeholder="'.esc_html__('Email', 'financial').'" required="" class="form-control"></div>

                    ',            
                    'site' => '<div class="col-sm-4 form-group"><input type="text"  placeholder="'.esc_html__('Website', 'financial').'" class="form-control"></div>
                    ',    
                                                                           
                ) ),   
                'comment_field' => '<div class="col-sm-12 form-group">
                                    <textarea rows="3" required="" name="comment"'.$aria_req.' placeholder="'.esc_html__('Message', 'financial').'"  ></textarea>
                            </div>
                                ',                    
                 'label_submit' => 'post a comment',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>

    <?php comment_form($comment_args); ?>

