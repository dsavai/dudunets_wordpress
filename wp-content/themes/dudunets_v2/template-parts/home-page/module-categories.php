<?php
$post_id = 208;
$the_post = get_post_by_id($post_id);

//$dudu_net_types = get_custom_posts_by_slug("dudunet-types","ASC");

$dudu_net_types = get_net_types("DESC");
?>

<?php if (!empty($the_post)):?>
    <section class="module module--products">
        <div class="container mx-auto h-full px-4 lg:px-0">
            <div class="py-16">
                <?php echo apply_filters("the_content",$the_post->post_content);?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
                    <?php if (!empty($dudu_net_types)):?>
                        <?php foreach ($dudu_net_types as $type):
                            $image = get_net_type_image_url($type->term_id);
                            ?>
                            <div>
                                <a href="<?php echo esc_url(get_term_link($type))?>" class="block">
<<<<<<< HEAD
                                    <div class="mb-4 overflow-hidden max-h-[230px] h-[230px]">
=======
                                    <div class="mb-4 rounded-xl  overflow-hidden max-h-[230px] h-[230px]">
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                                        <img src="<?php echo $image?>" alt="<?php echo $type->name?>" class="w-full h-full object-cover ease-in-out duration-700 hover:scale-125" />
                                    </div>
                                    <div class="flex flex-col justify-center items-center">
                                        <h4 class="text-lg font-semibold"><?php echo $type->description;?></h4>
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
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

