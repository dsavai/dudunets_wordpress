<?php
$post_id = 202;
$post = get_post_by_id($post_id);

?>

<?php if (!empty($post)):
    $video_link = get_field("video",$post->ID);
    $image = get_post_thumbnail($post_id);
    ?>
    <section class="module module--about px-4 lg:px-0 pb-8 lg:pt-[110px] lg:pb-14">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-14">
                <div class="lg:w-11/12 mt-6 reveal slide-left reveal-transition">
                    <h5 class="font-medium text-secondary"><?php echo $post->post_title?></h5>
                    <h1 class="mt-1 mb-2 text-3xl font-bold"><?php echo $post->post_excerpt?></h1>
                    <div class="text-black/60 font-normal leading-relaxed"><?php echo $post->post_content?></div>
                    <a class="inline-flex gap-1 items-center font-semibold" href="<?php echo get_page_url_by_slug("product-list")?>">
                        <span>View products</span>
                        <span>
                            <svg class="w-[20px] h-[20px] fill-current rotate-[-90deg]">
                                <use xlink:href="#icon-arrowdown"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="relative pb-6 lg:pb-0 reveal slide-right reveal-transition">
                    <div class="relative block">
                        <div class="w-full lg:h-[570px] overflow-hidden">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>
