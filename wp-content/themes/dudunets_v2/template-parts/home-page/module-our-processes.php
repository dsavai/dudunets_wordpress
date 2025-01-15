<?php
$post_id = 713;
$post = get_post_by_id($post_id);
$cta = get_field("cta",$post->ID);
?>
<?php if ($post):?>
<div class="module-our-processes">
    <div class="bg-gray-feather flex flex-col justify-center items-center border-t border-black/10">
        <div class="py-6 px-4 lg:py-24 lg:px-24">
            <div class="mx-auto px-4 lg:px-0 lg:w-[800px] text-center">
                <h2 class="mb-2 text-3xl font-400"><?php echo $post->post_title?></h2>
                <p class="text-black/60 font-medium leading-relaxed"><?php echo $post->post_content?></p>
                <div class="mt-5">
                    <a href="<?php echo $cta['url']?>" class="inline-flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                        <span><?php echo $cta['title']?></span>
                        <span>
                            <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
