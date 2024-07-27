<?php
$post_id = 142;
$thumbnail_id = get_post_thumbnail_id($post_id);
// Get the image attributes
$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
$post = get_post($post_id);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
$links = get_field("links",$post_id);
if (!empty($links)){
    $links_array = explode("|", $links);
}
$extra_links = get_field("extra_links",$post_id);
if (!empty($extra_links)){
    $extra_links_array = explode("|", $extra_links);
}
?>
<div id="subscribe">
    <div class="w-[1240px] mx-[auto]">
        <div class="bg-green-light my-[50px] px-[10%] py-[70px]">
            <div class="grid grid-cols-2 gap-[10%]">
                <div class="h-[380px] overflow-hidden">
                    <img src="<?php echo esc_url( $image[0] )?>" alt="<?php echo esc_attr( $thumbnail_alt )?>" width="<?php echo esc_attr( $image[1] )?>" height="<?php echo esc_attr( $image[2] )?>"/>
                </div>
                <div class="h-full flex justify-center flex-col">
                    <h3 class="text-primary-900 text-[40px] mb-[10px]"><?php echo $post->post_title;?></h3>
                    <p class="text-primary-900 text-[20px] mb-[15px]"><?php echo $post->post_content?></p>
                    <div class="w-[200px] mt-[20px]">
                        <?php if (!empty($links_array)):?>
                            <?php foreach ($links_array as $item):
                                $bits = explode("*",$item);
                                ?>
                                <a href="<?php echo $bits[1]?>" class="block bg-primary-900 text-white font-bold text-center border-secondary border-2 rounded-full pt-[8px] pb-[10px] px-[30px] transition delay-200 ease-in-out hover:bg-secondary hover:text-primary-900"><?php echo $bits[0]?></a>
                            <?php endforeach;?>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
