<?php
$post_id = 202;
$post = get_post_by_id($post_id);

?>

<?php if (!empty($post)):
    $video_link = get_field("video",$post->ID);
    $image = get_post_thumbnail($post_id);
    ?>
    <section class="module module--about px-4 lg:px-0 pb-0 lg:pt-[110px] lg:pb-14">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-14">
                <div class="lg:w-11/12 mt-6 reveal slide-left reveal-transition">
                    <?php if(is_user_logged_in()):?>
                        <small><a href="<?php echo get_edit_post_link($post_id);?>" target="_blank">Edit Section</a></small>
                    <?php endif;?>
                    <h5 class="font-medium text-secondary text-[14px] lg:text-[16px]"><?php echo $post->post_title?></h5>
                    <h1 class="mt-1 mb-3 text-[24px] lg:text-3xl font-semibold lg:font-bold leading-[30px]"><?php echo $post->post_excerpt?></h1>
                    <div class="text-black/60 font-normal leading-relaxed module-section-content"><?php echo $post->post_content?></div>
                    <!-- <a class="inline-flex gap-1 items-center font-semibold" href="<?php //echo get_page_url_by_slug("product-list")?>">
                        <span>View products</span>
                        <span>
                            <svg class="w-[20px] h-[20px] fill-current rotate-[-90deg]">
                                <use xlink:href="#icon-arrowdown"></use>
                            </svg>
                        </span>
                    </a> -->
                </div>
                <div class="relative pb-6 lg:pb-0 reveal slide-right reveal-transition mt-[20px] lg:mt-0">
                    <div class="relative block">
                        <div class="w-full h-[420px] lg:h-[570px] overflow-hidden">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>
