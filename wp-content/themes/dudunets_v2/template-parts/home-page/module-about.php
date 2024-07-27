<?php
$post_id = 202;
$post = get_post_by_id($post_id);

?>

<?php if (!empty($post)):
    $video_link = get_field("video",$post->ID);
    $image = get_post_thumbnail($post_id);
    ?>
    <section class="module module--about pt-16 pb-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-12 px-32">
                <div class="relative cursor-default">
                    <a href="<?php echo $video_link;?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative cursor-default block">
                        <div class="absolute inset-0 bg-black/10 w-full h-[360px] rounded-xl overflow-hidden"></div>
                        <div class="absolute z-10 inset-0 flex justify-center items-center">
                            <div class="bg-white w-24 h-24 rounded-full shadow-2xl flex justify-center items-center text-primary hover:bg-secondary cursor-pointer">
                                <svg class="w-10 h-10 fill-current">
                                    <use xlink:href="#icon-play"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full h-[360px] rounded-xl overflow-hidden">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                        </div>
                    </a>
                </div>
               <?php echo apply_filters("the_content",$post->post_content);?>
            </div>
        </div>
    </section>

<?php endif;?>
