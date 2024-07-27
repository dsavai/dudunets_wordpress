<?php
$id = $args["post_id"];
$term = $args["taxonomy"];
$products = get_related_dudunets($id,$term->slug,$term->taxonomy);
?>

<?php if (!empty($products)):?>
<div>
    <div class="mt-14 mb-10">
        <h2 class="text-3xl font-bold">You may also like</h2>
    </div>
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($products as $product):
        $image = get_post_thumbnail($product->ID);
        $categories = get_post_terms_in_net_type($product->ID);
        $term = $categories[0];
        ?>
          <div class="border border-black/10 overflow-hidden rounded-xl">
            <div class="h-[250px] overflow-hidden">
                <a href="<?php echo get_the_permalink($product->ID)?>"class="block w-full h-full ease-in-out duration-700 hover:scale-125">
                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                </a>
            </div>
            <div class="p-8">
                <div class="mb-2">
                    <a href="<?php echo esc_url(get_term_link($term))?>" class="inline-block uppercase text-sm text-primary font-medium hover:border-b"><?php echo $term->name?></a>
                </div>
                <div class="mb-5">
                    <h3 class="text-black text-xl font-semibold">
                        <a href="#" class="text-black cursor-pointer hover:text-primary hover:border-b"><?php echo $product->post_title?></a>
                    </h3>
                </div>
<!--                <hr class="border-black/10" />-->
<!--                <div class="mt-5 flex justify-between items-center">-->
<!--                    <a href="#" class="flex items-center gap-3">-->
<!--                        <div>-->
<!--                            <img src="images/blog/blogger_profile_photo.png" alt="" />-->
<!--                        </div>-->
<!--                        <h5 class="font-medium">Dennis Savai</h5>-->
<!--                    </a>-->
<!--                    <div class="flex items-center gap-3">-->
<!--                        <span class="w-1 h-1 bg-black/20 rounded-full"></span>-->
<!--                        <span class="text-black/60 text-sm font-medium">4 min read</span>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif;?>

