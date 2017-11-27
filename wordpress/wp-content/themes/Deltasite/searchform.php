<form class='general_searchwrapper' role="search" action="<?php echo home_url('/'); ?>" method="get">
    <input class='general_cb' type='checkbox'>
    <div class='general_headerlogo'></div>
    <div class='general_cb_bg'></div>
    <input class='general_searchbar' type='search' placeholder='Search by keyword'  value='<?php echo get_search_query(); ?>' name="s" title="Search">
    <div class='general_searchbar_cover'></div>
</form>
