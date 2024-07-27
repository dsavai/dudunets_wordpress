<?php
$post_id = 55;
$post = get_post($post_id);
$links = get_field("links",$post_id);
if (!empty($links)){
    $links_array = explode("|", $links);
}
$extra_links = get_field("extra_links",$post_id);
if (!empty($extra_links)){
    $extra_links_array = explode("|", $extra_links);
}
?>

<section class="module module--join">
    <div class="mt-[80px] mb-[80px]">
        <div class="w-[1140px] mx-[auto]">
            <div class="bg-primary-900 p-[70px] grid grid-cols-2">
                <div>
                    <h2 class="font-medium text-white text-[30px]"><?php echo $post->post_title?></h2>
                    <p class="text-white mt-[15px] text-[14px] leading-5"><?php echo $post->post_content?></p>
                </div>
                <div class="flex justify-end w-[440px]">
                    <div class="flex flex-col justify-center">
                        <?php if (!empty($links_array)):?>
                            <?php foreach ($links_array as $item):
                                $bits = explode("*",$item);
                                ?>
                                <a href="<?php echo $bits[1]?>" class="bg-white black-dark mb-[20px]  text-black text-center font-bold border-secondary border-2 rounded-full pt-[8px] pb-[10px] px-[30px] transition delay-200 ease-in-out hover:bg-secondary"><?php echo $bits[0]?></a>
                            <?php endforeach;?>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
