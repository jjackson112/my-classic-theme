<?php 
/*
Comments.php is automatically pulled 
into single posts when comments_template() is called

Below is a basic, minimal version with WP defaults
*/
?>

<?php
// If the post is password-protected
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf(
                    _nx(
                        'One Comment',
                        '%1$s Comments',
                        get_comments_number(),
                        'comments title',
                        'textdomain'
                    ),
                    number_format_i18n( get_comments_number() )
                );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                ) );
            ?>
        </ol>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments">Comments are closed.</p>
        <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(); ?>

</div>
