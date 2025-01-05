<?php
$id = $args["post_id"];
$term = $args["taxonomy"];
$products = get_related_dudunets($id,$term->slug,$term->taxonomy);
?>

<?php if (!empty($products)):?>
<div>
    <div class="mt-8 mb-5 lg:mt-14">
        <h2 class="mb-2 text-3xl font-400">You may also like</h2>
    </div>
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($products as $product):
        $image = get_post_thumbnail($product->ID);
        $categories = get_post_terms_in_net_type($product->ID);
        $term = $categories[0];
        ?>
          <div class="border-[1px] border-black/10">
            <a href="<?php echo get_the_permalink($product->ID)?>"class="block pb-5 w-full h-full hover:[&>div>img]:scale-125">
                <div class="mb-4 overflow-hidden max-h-[230px] h-[230px]">
                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover ease-in-out duration-700" />
                </div>
                <div class="flex flex-col justify-center items-start px-6">
                    <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-1"><?php echo $term->name?></h4>
                    <h3 class="font-quicksand text-[17px] font-bold mb-[4px] w-full hover:underline underline-offset-4 decoration-1">
                        <span class="block truncate"><?php echo $product->post_title?></span>
                    </h3>
                </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif;?>

