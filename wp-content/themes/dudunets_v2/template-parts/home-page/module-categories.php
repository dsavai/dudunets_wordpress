<?php
$post_id = 208;
$the_post = get_post_by_id($post_id);

//$dudu_net_types = get_custom_posts_by_slug("dudunet-types","ASC");

$dudu_net_types = get_net_types("DESC");
?>

<?php if (!empty($the_post)):?>
    <section class="module module--products">
        <div class="container mx-auto h-full px-4 lg:px-0">
            <div class="py-14">
                <div class="text-center mx-auto mb-10">
                    <?php echo apply_filters("the_content",$the_post->post_content);?>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
                    <?php if (!empty($dudu_net_types)):?>
                        <?php foreach ($dudu_net_types as $type):
                            $image = get_net_type_image_url($type->term_id);
                            ?>
                            <div class="border-[1px] border-black/10">
                                <a title="<?php echo $type->description;?>" href="<?php echo esc_url(get_term_link($type))?>" class="block pb-5 w-full h-full hover:[&>div>img]:scale-125">
                                    <div class="mb-4 overflow-hidden max-h-[450px] h-[450px]">
                                        <img src="<?php echo $image?>" alt="<?php echo $type->name?>" class="w-full h-full object-cover ease-in-out duration-700" />
                                    </div>
                                    <div class="flex flex-col justify-center items-start px-6">
                                        <h4 class="font-quicksand text-[17px] font-bold mb-[4px] w-full hover:underline underline-offset-4 decoration-1">
                                            <span class="block truncate"><?php echo $type->description;?></span>
                                        </h4>
                                        <div class="flex items-center text-primary text-[14px] font-medium hover:underline underline-offset-4 decoration-2">
                                            <span>Learn more</span>
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
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

