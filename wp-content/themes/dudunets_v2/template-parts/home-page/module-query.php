<?php
$post_id = 221;
$the_post = get_post_by_id($post_id);
?>
<?php
if (!empty($the_post)){
    echo apply_filters("the_content",$the_post->post_content);
}

