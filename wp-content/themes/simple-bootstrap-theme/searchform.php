

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="<?php echo $unique_id; ?>">
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'twentyseventeen'); ?></span>
    </label>
    <input type="search" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="Search for ..." value="<?php echo get_search_query(); ?>" name="s" />
    <span class="input-group-btn">
        <button type="submit" class="search-submit btn btn-secondary">Go!</button>
    </span>

    <input type="hidden" value="product" name="post_type" id="post_type" />
</form>