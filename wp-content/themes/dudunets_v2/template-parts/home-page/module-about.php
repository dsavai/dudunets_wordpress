<?php
$post_id = 202;
$post = get_post_by_id($post_id);

?>

<?php if (!empty($post)):
    $video_link = get_field("video",$post->ID);
    $image = get_post_thumbnail($post_id);
    ?>
    <section class="module module--about px-4 lg:px-0 pt-8 pb-8 lg:pt-8 lg:pb-14">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-14">
                <div class="relative pb-6 lg:pb-0">
                    <a href="<?php echo $video_link;?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                        <div class="absolute inset-0 bg-black/10 w-full h-[410px] overflow-hidden"></div>
                        <div class="absolute z-10 inset-0 flex justify-center items-center">
                            <div class="bg-white text-red w-16 h-16 rounded-full flex justify-center items-center shadow-3xl hover:bg-primary hover:text-white">
                                <svg class="w-5 h-5 fill-current">
                                    <use xlink:href="#icon-play"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full h-[410px] overflow-hidden">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                        </div>
                    </a>
                </div>
                <div class="lg:w-10/12 mt-6">
                    <h5 class="text-gray font-bold"><?php echo $post->post_title?></h5>
                    <h1 class="mt-1 mb-2 text-3xl font-400"><?php echo $post->post_excerpt?></h1>
                    <p class="mb-6 text-black/60 font-medium leading-relaxed"><?php echo $post->post_content?></p>
                    <a class="inline-flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200" href="<?php echo get_page_url_by_slug("product-list")?>">
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
