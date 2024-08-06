<div class="search-modal">
   <div class="close-window"></div>
   <form class="search-modal__search" role="search" method="get" action="<?php echo esc_url(site_url()); ?>">
      <input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s"
         placeholder="<?php esc_html_e('Type here...', 'restaurant_site') ?>" />
      <input type="submit" class="search-modal__headerfont" value="<?php esc_html_e('Search', 'restaurant_site') ?>" />
   </form>
</div>