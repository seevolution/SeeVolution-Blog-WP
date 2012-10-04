<div class="search">
    <form action="<?= home_url('/'); ?>" class="form" method="get">
        <fieldset>
            <input type="text" name="s" value="<? the_search_query(); ?>" />
        </fieldset>
    </form>
</div>