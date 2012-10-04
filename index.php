<? get_header(); ?>

    <div class="main">

        <? if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <header>
                    <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
                    <p>
                        Posted by <? the_author_posts_link(); ?>
                        on <? _e(get_the_date()); ?>
                        in <? the_category(', ') ?>
                    </p>
                </header>
                <div class="content">
                   <? the_content(); ?>
                </div>
                <footer>
                    <a class="add-comment" href="<?php comments_link(); ?>">add yours</a>
                    <strong><?php comments_number('no response', 'one response', '% responses'); ?> to</strong>
                    &#8221;<? the_title(); ?>&#8221;
                </footer>
            </article>

        <? endwhile; ?>

        <nav class="navigation">
            <ul>
                <li class="previous"><?= previous_posts_link('&#8249; Înapoi'); ?></li>
                <li class="next"><?= next_posts_link('Înainte &#8250;'); ?></li>
            </ul>
        </nav>

    </div>

<? get_footer(); ?>
