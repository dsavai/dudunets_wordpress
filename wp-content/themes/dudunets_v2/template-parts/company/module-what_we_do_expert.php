<?php
$post_id = 390;
$the_post = get_post_by_id($post_id);
$image = get_post_thumbnail($the_post->ID);
?>

<section class="module module--expert">
    <div class="pt-20 pb-24 px-24">
        <div class="container mx-auto">
            <div class="px-4 lg:px-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-8">
                    <div class="w-[480px] h-[480px]">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-fullh-full object-cover" />
                    </div>
                    <div class="mt-10 w-10/12">
                        <h4 class="text-sm uppercase text-primary font-bold mb-3"><?php echo $the_post->post_title?></h4>
                        <h2 class="text-3xl font-bold mb-5"><?php echo $the_post->post_excerpt?></h2>
                        <p class="text-black/60"><?php echo $the_post->post_content?></p>
                        <a href="<?php get_page_url_by_slug("product-list")?>" class="inline-flex gap-3 items-center mt-7 bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">
                            <span>View products</span>
                            <span>
                                <svg class="w-6 h-6 fill-current">
                                    <use xlink:href="#icon-right"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
