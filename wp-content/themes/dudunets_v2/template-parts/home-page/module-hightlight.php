<?php
$post_id = 1001;
$post = get_post_by_id($post_id);
$three_value_input_data = get_post_meta($post->ID, 'three_value_input', true);
$content = get_post_field('post_content', $post_id);
$image = get_post_thumbnail($post_id);
$cta = get_field("cta",$post_id);
?>

<div class="module-our-processes">
    <div class="container mx-auto px-4 lg:px-0 pb-8 lg:pt-[110px] lg:pb-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-14">
            <div class="lg:w-11/12 mt-6 reveal slide-left reveal-transition">
                <h5 class="font-medium text-secondary"><?php echo get_the_excerpt($post_id);?></h5>
                <h1 class="mt-1 mb-2 text-3xl font-bold"><?php echo get_the_title($post_id);?></h1>
                <div class="text-black/60 font-normal leading-relaxed">
                    <?php echo apply_filters('the_content', $content); ?>
                </div>
                <a class="inline-flex gap-1 items-center font-semibold" href="<?php echo $cta['url']?>">
                    <span>Learn more</span>
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
                        <img src="<?php echo $image['image'][0]?>" class="w-full h-full" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
