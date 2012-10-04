<form class="form comments-form" action="<?= site_url('/wp-comments-post.php'); ?>" method="post" accept-charset="utf-8">

    <input type="hidden" name="comment_post_ID" value="<? the_ID(); ?>" id="comment_post_ID" />

    <? if ( !is_user_logged_in() ) : ?>

        <p class="inline">
            <input type="text" name="author" placeholder="Name" value="<?= esc_attr( $commenter['comment_author'] ) ?>" id="author" />
        </p>

        <p class="inline">
            <input type="text" name="email" placeholder="Email" value="<?= esc_attr( $commenter['comment_email'] ) ?>" id="email" />
        </p>

        <p class="inline last">
            <input type="text" name="url" placeholder="Website" value="<?= esc_attr( $commenter['comment_url'] ) ?>" id="url" />
        </p>

    <? endif; ?>

    <p><textarea name="comment" placeholder="Message" id="comment" rows="10"></textarea></p>

    <p><button class="button" type="submit" name="submit" value="Trimite">Send</button></p>

</form>