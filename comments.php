
<h3 id="comments"><span class="fas fa-comment"></span>&nbsp; <?php comments_number('No Comments', '1 Comment', '% Comments' ); ?></h3>
<?php if ( have_comments() ) : ?>
    <ol class="comment-list list-unstyled">
	    <?php wp_list_comments('callback=sp_comment_format'); ?>
    </ol>
    <ul class="pager">
        <li><?php previous_comments_link('<i class="fas fa-chevron-left"></i>&nbsp; Older Comments'); ?></li>
        <li><?php next_comments_link('Newer Comments &nbsp;<i class="fas fa-chevron-right"></i>'); ?></li>
    </ul>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
    <h5 class="comment-form-title"><?php comment_form_title( 'Leave a Comment', 'Reply to %s' ); ?></h5>
    <div class="cancel-comment-reply">
        <?php cancel_comment_reply_link(); ?>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p>You must be <a href="<?php echo wp_login_url(get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?> <!-- If registration is NOT required -->
        <form role="form" class="form-horizontal" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( is_user_logged_in() ) : ?>
            <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out</a></p>
        <?php else : ?> <!-- If User is NOT Logged In -->
            <div class="form-group">
                <label class="sr-only" for="author">Name</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" placeholder="Name" <?php if ($req) echo "aria-required='true'"; ?> />
                </div>
            </div> <!-- exit form-group -->
            <div class="form-group">
                <label class="sr-only" for="author">Email</label>
                <div class="col-md-5">
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" placeholder="Email" <?php if ($req) echo "aria-required='true'"; ?> />
                </div>
            </div> <!-- exit form-group -->
        <?php endif; ?> <!-- End Check for User Logged In -->
        <div class="form-group">
            <label class="sr-only" for="comment">Comment</label>
            <div class="col-md-10">
                <textarea class="form-control input-lg" name="comment" id="comment" tabindex="3" rows="5" placeholder="Type your comment here..."></textarea>
                <span class="help-block"><small>You can use these HTML tags:<br /><code><?php echo allowed_tags(); ?></code></small></span>
            </div>
        </div> <!-- exit form-group -->

        <div class="form-group">
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary" tabindex="4" value="Post Comment" />
            <?php comment_id_fields(); ?>
            </div>
        </div> <!-- .form-group -->

        <?php do_action('comment_form', $post->ID); ?>

        </form>
    <?php endif; ?> <!-- End check for registration required -->
<?php endif; ?>
