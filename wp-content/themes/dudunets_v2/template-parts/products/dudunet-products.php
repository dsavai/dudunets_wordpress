<?php
$term = $args["term"];
$products = get_dudunet_products($term->slug);
?>
<?php if(!empty($products)):?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4 lg:gap-y-10">
        <?php foreach ($products as $product):
            $image = get_post_thumbnail($product->ID);
            ?>

            <div class="border-[1px] border-black/10">
                <a href="<?php echo get_the_permalink($product->ID)?>" class="block pb-5 w-full h-full hover:[&>div>img]:scale-125">
                    <div class="mb-4 overflow-hidden max-h-[230px] h-[230px]">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover ease-in-out duration-700" />
                    </div>
                    <div class="flex flex-col justify-center items-start px-6">
                        <h4 class="font-quicksand text-[17px] font-bold mb-[4px] w-full hover:underline underline-offset-4 decoration-1">
                            <span class="block truncate"><?php echo $product->post_title?></span>
                        </h4>
                        <div class="flex items-center text-primary text-[14px] font-bold hover:underline underline-offset-4 decoration-2">
                            <span>Read more</span>
                            <span>
                                <svg class="w-6 h-4 fill-current rotate-[-90deg]">
                                    <use xlink:href="#icon-arrowdown"></use>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>



        <?php endforeach;?>
    </div>
<?php endif;?>
<?php
// Restore original post data
wp_reset_postdata();
