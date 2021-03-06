<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div data-search class="ly--search ly--search--sm" role="search">
    <svg class="ly--search-magnifier" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M6 2c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm0-2C2.7 0 0 2.7 0 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6zM16 13.8L13.8 16l-3.6-3.6 2.2-2.2z"></path>
      <path d="M16 13.8L13.8 16l-3.6-3.6 2.2-2.2z"></path>
    </svg>
    <label id="search-input-label-1" class="ly--label" for="search__input-2">Search</label>
    <input class="ly--search-input" type="text" role="search" value="<?php the_search_query(); ?>" name="s" id="s search" aria-labelledby="search-input-label-1" />
    <svg class="ly--search-close ly--search-close--hidden" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
      <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
    </svg>
    </div>
</form>
