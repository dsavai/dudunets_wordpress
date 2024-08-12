<?php
$the_page = get_post_by_id(391);
$sections = get_post_meta($the_page->ID, 'name_value_pair', true);
?>

<section class="module module--what-we-offer">
    <div class="container mx-auto">
        <div class="pt-16 pb-10">
            <div class="mb-10">
                <h4 class="text-sm uppercase text-primary font-bold mb-2">ABOUT US</h4>
                <h2 class="text-3xl font-bold">What we offer</h2>
            </div>

            <?php if (!empty($sections)):?>
            <div class="grid grid-cols-3 gap-6">

                <?php foreach ($sections as $section):?>
                    <div class="flex flex-col justify-center items-center px-16 py-12 text-center mb-3 bg-white shadow-sm rounded-lg border border-gray-light">
                        <div class="text-primary">
                            <svg class="w-10 h-10 fill-current">
                                <use xlink:href="#icon-server"></use>
                            </svg>
                        </div>
                        <h4 class="text-lg font-medium my-2"><?php echo esc_html($section['field_name']); ?></h4>
                        <p class="text-sm text-black/60"><?php echo esc_html($section['value']); ?></p>
                    </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>

