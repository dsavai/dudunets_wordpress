<?php
$post_id = $args['post_id'];
$related_posts = get_related_posts($post_id,2);
?>

<?php if (!empty($related_posts)):?>
<div class="grid grid-cols-2 gap-6">

</div>
<?php endif;?>

<div>
    <div class="mt-8 mb-5 lg:mt-14">
        <h2 class="mb-2 text-3xl font-400">You may also like</h2>
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
            <div class="bg-white border border-black/10 overflow-hidden">
                <div class="h-[250px] overflow-hidden">
                    <a href="<?php echo get_the_permalink($related_post->ID)?>"class="block w-full h-full ease-in-out duration-700 hover:scale-125">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                    </a>
                </div>
                <div class="p-8">
                    <div class="mb-2">
                        <a href="<?php echo get_category_permalink($categories[0]->term_id)?>" class="inline-block uppercase text-[13px] text-gray hover:text-primary font-bold hover:underline underline-offset-4 decoration-2"><?php echo $categories[0]->name ?></a>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-black text-xl font-quicksand font-semibold line-clamp-2">
                            <a href="<?php echo get_the_permalink($related_post->ID)?>" class="text-black cursor-pointer hover:border-b"><?php echo $related_post->post_title;?></a>
                        </h3>
                    </div>
                    <hr class="border-black/10" />
                    <div class="mt-5 flex justify-between items-center">
                        <a href="#" class="flex items-center gap-3">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <?php echo $avatar?>
                            </div>
                            <h5 class="font-bold text-[14px] hover:text-primary"><?php echo get_author_name_by_post_id($related_post->ID)?></h5>
                        </a>
                        <div class="lg:flex items-center gap-3 hidden">
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


