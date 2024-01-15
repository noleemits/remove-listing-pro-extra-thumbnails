<?php

add_action('init', 'remove_custom_listingpro_image_sizes');

function remove_custom_listingpro_image_sizes() {
    remove_image_size('listingpro-blog-grid');
    remove_image_size('listingpro-blog-grid2');
    remove_image_size('listingpro-blog-grid3');
    remove_image_size('listingpro-listing-grid');
    remove_image_size('listingpro-listing-gallery');
    remove_image_size('listingpro-list-thumb');
    remove_image_size('listingpro-author-thumb');
    remove_image_size('listingpro-gallery-thumb1');
    remove_image_size('listingpro-gallery-thumb2');
    remove_image_size('listingpro-gallery-thumb3');
    remove_image_size('listingpro-gallery-thumb4');
    remove_image_size('listingpro-detail_gallery');
    remove_image_size('listingpro-checkout-listing-thumb');
    remove_image_size('listingpro-review-gallery-thumb');
    remove_image_size('listingpro-thumb4');
    remove_image_size('listingpro_location270_400');
    remove_image_size('listingpro_location570_455');
    remove_image_size('listingpro_location570_228');
    remove_image_size('listingpro_location270_197');
    remove_image_size('listingpro_cats270_213');
    remove_image_size('listingpro_cats270_150');
    remove_image_size('listingpro_liststyle181_172');
    remove_image_size('lp-sidebar-thumb-v2');
}
