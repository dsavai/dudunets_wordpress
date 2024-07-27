<?php
$post_id = 236;
$post = get_post_by_id($post_id);
if ($post){
    echo apply_filters("the_content",$post->post_content);
}
?>

