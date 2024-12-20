<?php
$the_page = get_post_by_id(387);
$values_data = get_post_meta($the_page->ID, 'values', true);
$image = get_post_thumbnail($the_page->ID);
?>
<section class="module module--vision-mission">
    <div class="pt-18 pb-20">
        <div class="container mx-auto px-4 lg:px-0">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-24">
                <div>
                    <h4 class="text-3xl font-bold">Our Vision</h4>
                    <p class="mb-10 text-black/60 w-10/12"><?php echo get_field("our_vision",$the_page->ID)?></p>
                    <h4 class="text-3xl font-bold">Our Values</h4>
                    <p class="mb-10 text-black/60 w-10/12"><?php echo get_field("our_values",$the_page->ID)?></p>

                    <?php if($values_data):?>
                        <div class="accordion_module mt-7">
                            <?php
                            $x = 1;
                            foreach ($values_data as $data):?>
                                <div class="border border-black/10 py-4 px-6 rounded-lg mb-4">
                                    <a href="#accordion-<?php echo $x?>" class="accordion_title flex justify-between items-center text-md font-bold">
                                        <span><?php echo esc_html($data['field_name']); ?></span>
                                        <span>
                                            <svg class="w-6 h-6 fill-current">
                                                <use xlink:href="#icon-arrowdown"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div id="accordion-<?php echo $x?>" class="accordion_content mt-3 text-sm text-black">
                                        <p><?php echo esc_html($data['value']); ?></p>
                                    </div>
                                </div>
                            <?php
                            $x++;
                            endforeach;?>

                        </div>
                    <?php endif;?>
                    <div class="flex flex-col lg:flex-row items-center gap-6 mt-10">
                        <a href="<?php echo get_page_url_by_slug("contact")?>" class="inline-flex gap-3 items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-7 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">
                            <span>Contact us</span>
                            <span>
                                        <svg class="w-6 h-6 fill-current">
                                            <use xlink:href="#icon-right"></use>
                                        </svg>
                                    </span>
                        </a>
                        <a href="<?php echo get_page_url_by_slug("product-list")?>" class="text-primary font-semibold text-md border-b-[2px] border-primary">Our product  catalog</a>
                    </div>
                </div>
                <div class="w-full h-[600px] rounded-lg overflow-hidden">
                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</section>



