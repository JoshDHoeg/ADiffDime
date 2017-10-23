<form class="searchform" action="/" method="get">
    <input class="search-bar" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input class="search-img" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" width="36px"/>
</form>
