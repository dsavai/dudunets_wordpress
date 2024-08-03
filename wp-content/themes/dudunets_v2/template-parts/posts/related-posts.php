<?php
$post_id = $args['post_id'];
$related_posts = get_related_posts($post_id,2);
?>

<?php if (!empty($related_posts)):?>
<div class="grid grid-cols-2 gap-6">

</div>
<?php endif;?>

<div>
    <div class="mt-8 mb-5 lg:mt-14 lg:mb-10">
        <h2 class="text-2xl md:text-3xl font-bold">You may also like</h2>
    </div>
    <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 lg:gap-6">
        <?php foreach ($related_posts as $related_post):
            $categories = get_the_category($related_post->ID);
            $image = get_post_thumbnail($related_post->ID);
            $timestamp = strtotime($related_post->post_date); // Convert a date string to a timestamp
            $date = date('F d, Y', $timestamp);
            $avatar = get_user_avatar($related_post->post_author);
            $tags = get_post_tags($related_post->ID);


            ?>
            <div class="border border-black/10 overflow-hidden rounded-xl">
                <div class="h-[250px] overflow-hidden">
                    <a href="<?php echo get_the_permalink($related_post->ID)?>"class="block w-full h-full ease-in-out duration-700 hover:scale-125">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                    </a>
                </div>
                <div class="p-8">
                    <div class="mb-2">
                        <a href="<?php echo get_category_permalink($categories[0]->term_id)?>" class="inline-block uppercase text-sm text-primary font-medium hover:border-b"><?php echo $categories[0]->name ?></a>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-black text-xl font-semibold">
                            <a href="<?php echo get_the_permalink($related_post->ID)?>" class="text-black cursor-pointer hover:text-primary hover:border-b"><?php echo $related_post->post_title;?></a>
                        </h3>
                    </div>
                    <hr class="border-black/10" />
                    <div class="mt-5 flex justify-between items-center">
                        <a href="#" class="flex items-center gap-3">
                            <div>
                                <?php echo $avatar?>
                            </div>
                            <h5 class="font-medium"><?php echo get_author_name_by_post_id($related_post->ID)?></h5>
                        </a>
                        <div class="flex items-center gap-3">
                            <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                            <span class="text-black/60 text-sm font-medium"><?php echo estimate_reading_time($related_post->ID); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        wp_reset_postdata();
        endforeach;?>
    </div>
</div>


