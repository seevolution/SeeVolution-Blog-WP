<? if ( comments_open() ) : ?>

    <? if ( have_comments() ) : ?>

        <h3 id="comments" class="comments-title">
            <strong><?php comments_number('no response', 'one response', '% responses'); ?> to</strong>
            &#8221;<? the_title(); ?>&#8221;
        </h3>

        <ol class="comments">
            <? wp_list_comments(array('callback' => 'comment_item')); ?>
        </ol>

    <? endif; ?>

    <h3 class="comments-title">Post your reply message</h3>

    <? new_comment_form(); ?>

<? endif; ?>