<hr class="mt-5">
<?php comment_form(); ?>

<h5>Comentarios (<?php comments_number('no hay comentarios', 'un comentario', '% comentarios'); ?>) </h5>
<hr>

<?php
wp_list_comments(array(
    'callback' => function ($comment, $args, $depth) { ?>


    <div class="d-flex align-items-center mb-3">
        <div class="flex-shrink-0">
            <?php if ($args['avatar_size'] != 0) {
                echo get_avatar($comment, $args['avatar_size']);
            } ?>
        </div>
        <div class="flex-grow-1 ms-3">
            <strong class="mt-0"><?php printf(__('%s <span>: </span>'), get_comment_author_link()); ?></strong>

            <?php if ($comment->comment_approved == '0') { ?>
                <em class="comment-awaiting-moderation"><?php _e('Tu comentario se encuentra en estado de evaluación'); ?></em>
                <br />
                <?php } ?>

            <?php comment_text(); ?>

            <span>
            <?php comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'reply_text' => 'Responder',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth']
                    )
                )
            ); ?>
            </span>
            <span>
            <?php edit_comment_link( __( 'Editar' ), '  ', '' ); ?>
            </span>
        </div>
    </div>

<?php }
)); ?>