<? get_header(); ?>

    <div class="main">

        <? if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <article class="post">
                <header>
                    <h1><? the_title(); ?></h1>
                    <p>
                        Posted by <? the_author_posts_link(); ?>
                        on <? _e(get_the_date()); ?>
                        in <? the_category(', ') ?>
                    </p>
                </header>
                <div class="content">
                   <? the_content(); ?>
                </div>
            </article>

            <? comments_template(); ?>

        <? endwhile; ?>

    </div>

<? get_footer(); ?>
