<?php
function comment_item($comment, $args) {
    $GLOBALS['comment'] = $comment;
    get_template_part('comment');
}
function new_comment_form() {
    $GLOBALS['commenter'] = wp_get_current_commenter();
    get_template_part('comment', 'form');
}
?>