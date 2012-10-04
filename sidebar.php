<aside class="sidebar">

    <a class="button button-rss" href="#">Grab our rss feed</a>

    <h3>Search the blog</h3>
    <?= get_search_form(); ?>

    <h3>Blog post categories</h3>
    <ul class="categories">
        <? wp_list_categories(array('title_li' => null)); ?>
    </ul>

    <h3>Newsletter subscribe</h3>
    <div class="newsletter">
        <form class="form" action="https://dn981.infusionsoft.com/app/form/process/2e5cda73e7e183c078378c65c4606408" method="POST" target="_blank">
            <input name="inf_form_xid" type="hidden" value="2e5cda73e7e183c078378c65c4606408" />
            <input name="inf_form_name" type="hidden" value="Blog Newsletter" />
            <input name="infusionsoft_version" type="hidden" value="1.26.8.20" />
            <fieldset>
                <p>Hear about new products, features, promos, discounts, &amp; more. Sent about once a month.</p>
                <p><input type="text" name="inf_field_Email" value="" id="email" placeholder="Email" /></p>
            </fieldset>
        </form>
    </div>

</aside>