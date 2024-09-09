<?php
$post_id = 202;
$post = get_post_by_id($post_id);

?>

<?php if (!empty($post)):
    $video_link = get_field("video",$post->ID);
    $image = get_post_thumbnail($post_id);
    ?>
    <section class="module module--about px-4 lg:px-0 pt-8 pb-8 lg:pt-16 lg:pb-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-12 lg:px-32">
                <div class="relative cursor-default  pb-6 lg:pb-0">
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
                <div>
                    <h5 class="text-primary font-bold"><?php echo $post->post_title?></h5>
                    <h2 class="mt-1 mb-2 text-3xl font-bold"><?php echo $post->post_excerpt?></h2>
                    <p class="mb-6 text-black/60 font-medium leading-relaxed"><?php echo $post->post_content?></p>
                    <a class="inline-flex gap-3 items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500" href="<?php echo get_page_url_by_slug("product-list")?>">
                        <span>View products</span>
                        <span>
                            <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>
