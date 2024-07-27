<?php
$post_id = 46;
$smartest_solution = get_post($post_id);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
$extra = get_field('benefits_list',$post_id);
if (!empty($extra)){
    $benefits_list = explode("|",$extra);
}
?>

<section class="module module--choose-us">
    <div class="mt-[80px] mb-[80px]">
        <div class="mx-[auto] text-center w-[600px] mb-[50px]">
            <h2 class="text-[30px]"><?php echo $smartest_solution->post_title?></h2>
            <p class="text-gray-dark"><?php echo $smartest_solution->post_content?></p>
        </div>
        <div class="w-[1140px] mx-[auto]">
            <div class="grid grid-cols-2 gap-[20px]">
                <div class="flex flex-1 items-center">
                    <ul class="block w-[80%]">
                        <?php if(!empty($benefits_list)):?>
                          <?php foreach ($benefits_list as $item):?>
                                <li class="font-semibold border-b-[1px] border-gray-light py-[15px]"><?php echo $item?></li>
                          <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="h-[640px]">
                    <img src="<?php echo $image[0]?>" />
                </div>
            </div>
        </div>
    </div>
</section>
