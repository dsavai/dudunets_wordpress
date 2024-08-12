<?php
$the_page = get_post_by_id(388);
$stats = get_post_meta($the_page->ID, 'name_value_pair', true);
$image = get_post_thumbnail($the_page->ID);
?>

<section class="module module--stats">
    <div class="container mx-auto">
        <div class="mb-24 mt-10 px-4 lg:px-0">
            <div class="border border-black/10 rounded-lg overflow-hidden">
                <div class="lg:flex">
                    <div class="lg:basis-1/3">
                        <div class="relative">
                            <div class="absolute inset-0 z-10 bg-cover bg-no-repeat" style="background-image: url(<?php echo $image['image'][0]?>);"></div>
                            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary p-2 opacity-60 z-20"></div>
                            <div class="relative z-30">
                                <div class="px-8 py-8">
                                    <h3 class="text-white text-2xl font-semibold"><?php echo $the_page->post_content?></h3>
                                    <a href="#" class="inline-flex gap-3 items-center mt-7 p-2 font-bold bg-white text-secondary px-8 py-3 rounded-full hover:bg-primary transition-all duration-500 delay-500">
                                        <span>View products</span>
                                        <span>
                                                    <svg class="w-6 h-6 fill-current">
                                                        <use xlink:href="#icon-right"></use>
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:basis-8/12 grid grid-cols-1 lg:grid-cols-3">

                        <?php if (!empty($stats)): ?>
                            <?php foreach ($stats as $stat):?>
                                <div class="py-8 flex flex-col justify-center items-center border-r border-black/10">
                                    <h4 class="text-4xl font-bold"><?php echo esc_html($stat['value']); ?></h4>
                                    <p class="text-black/60"><?php echo esc_html($stat['field_name']); ?></p>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


