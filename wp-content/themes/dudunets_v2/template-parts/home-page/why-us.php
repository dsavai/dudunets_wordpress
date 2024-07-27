<?php


// Example usage:
$post = get_custom_post_type_by_slug('why-us', 'front-page-sections');

if ($post) {
    // Do something with the custom post
    echo apply_filters("the_content",$post->post_content);
}
