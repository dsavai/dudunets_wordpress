<?php
$post_id = 713;
$post = get_post_by_id($post_id);
$cta = get_field("cta",$post->ID);
?>
<?php if ($post):?>
<div class="module-our-processes">
    <h3><?php echo $post->post_title?></h3>
    <?php echo apply_filters('the_content',$post->post_content);?>
    <a href="<?php echo $cta['url']?>"><?php echo $cta['title']?></a>
</div>
<?php endif;?>
