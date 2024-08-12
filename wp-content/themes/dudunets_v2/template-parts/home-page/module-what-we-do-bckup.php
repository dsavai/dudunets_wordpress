<?php
$post_id = 224;
$the_post = get_post_by_id(224);
$image = get_post_thumbnail($the_post->ID);
$values_data = get_post_meta($the_post->ID, 'name_value_pair', true);
?>
<section class="module module--what-we-do">
    <div class="py-24 px-24">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-8">
                <div class="w-[480px] h-[480px]">
                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-fullh-full object-cover" />
                </div>
                <div class="mt-10">
                    <h4 class="text-sm uppercase text-primary font-bold mb-3"><?php echo $the_post->post_title?></h4>
                    <h2 class="text-3xl font-bold"><?php echo $the_post->post_excerpt?></h2>
                    <?php if($values_data):?>
                    <div class="mt-7">
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
                                <div id="accordion-<?php echo $x?>" class="accordion_content mt-3 text-sm text-black/60">
                                    <p><?php echo esc_html($data['value']); ?></p>
                                </div>
                            </div>

                        <?php
                        $x++;
                        endforeach;?>

                    </div>
                    <?php endif;?>

                </div>
            </div>
        </div>
    </div>
</section>



