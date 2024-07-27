<?php
$post_id = 56;
$post = get_post($post_id);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
$links = get_field("links",$post_id);
if (!empty($links)){
    $links_array = explode("|", $links);
}
$extra_links = get_field("extra_links",$post_id);
if (!empty($extra_links)){
    $extra_links_array = explode("|", $extra_links);
}
?>
<!--<section class="module module--about">-->
<!--    <div class="w-[1140px] mx-[auto]">-->
<!--        <div class="grid grid-cols-2 gap-[30px] border-[1px] border-gray-light p-[45px]">-->
<!--            <div class="h-[400px] overflow-hidden">-->
<!--                <img src="--><?php //echo $image[0]?><!--" class="w-full h-full object-cover object-top" />-->
<!--            </div>-->
<!--            --><?php //echo apply_filters("the_content",$post->post_content)?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="module module--about">
    <div class="w-[1240px] mx-[auto]">
        <div class="grid grid-cols-2 gap-[30px] border-[1px] border-gray-light p-[45px]">
            <div class="h-[400px] overflow-hidden">
                <img src="<?php echo $image[0]?>" class="w-full h-full object-cover object-top" />
            </div>
           <?php echo apply_filters("the_content",$post->post_content)?>
        </div>
    </div>
</section>
