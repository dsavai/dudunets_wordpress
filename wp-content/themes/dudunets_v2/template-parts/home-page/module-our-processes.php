<?php
$post_id = 713;
$post = get_post_by_id($post_id);
$cta = get_field("cta",$post->ID);
?>
<?php if ($post):?>
<div class="module-our-processes">
    <?php echo apply_filters('the_content',$post->post_content);?>
    <a href="<?php echo $cta?>">Learn More</a>
</div>
<?php endif;?>
