<li id="comment-<?php comment_ID(); ?>">
    <p class="author">
        <?= get_avatar($comment, 50, get_bloginfo("template_url") . "/images/default-avatar.jpg"); ?>
        <cite><? comment_author_link($comment); ?></cite>
        <time datetime="<?= get_comment_time('c'); ?>">
            <?= sprintf('%s at %s', get_comment_date(), get_comment_time()); ?>
        </time>
    </p>
    <div class="content">
        <? comment_text(); ?>
    </div>
</li>