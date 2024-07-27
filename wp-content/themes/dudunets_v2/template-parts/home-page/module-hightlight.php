<?php
$post_id = 207;
$post = get_post_by_id($post_id);
?>

<?php if (!empty($post)):
    echo apply_filters("the_content",$post->post_content);
    ?>

<?php endif;?>
