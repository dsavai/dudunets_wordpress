<?php
$term = $args["term"];
$products = get_dudunet_products($term->slug);
?>
<?php if(!empty($products)):?>
    <div class="grid grid-cols-3 gap-x-6 gap-y-10">
        <?php foreach ($products as $product):
            $image = get_post_thumbnail($product->ID);
            ?>

            <div>
                <a href="<?php echo get_the_permalink($product->ID)?>" class="block">
                    <div class="mb-4 rounded-xl overflow-hidden">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h4 class="text-lg font-semibold"><?php echo $product->post_title?></h4>
                        <div class="flex items-center gap-2 text-primary font-medium mt-2">
                            <span>Read more</span>
                            <span>
                                            <svg class="w-5 h-5 fill-current">
                                                <use xlink:href="#icon-right"></use>
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
