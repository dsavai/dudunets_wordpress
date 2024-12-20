<?php
$post_id = 207;
$post = get_post_by_id($post_id);
$three_value_input_data = get_post_meta($post->ID, 'three_value_input', true);
?>

<?php if (!empty($post)):?>

    <section class="module module--hightlight">
        <div class="border-t lg:border-b border-black/10">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-10">

                <?php foreach ($three_value_input_data as $data):?>
                    <div class="px-16 py-16 border-b lg:border-b-0 lg:border-r border-black/10 ">
                        <div class="relative">
                            <div class="absolute top-0 right-0">
                                <svg class="w-6 h-6 fill-current">
                                    <use xlink:href="#icon-rightup"></use>
                                </svg>
                            </div>
                            <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-3"><?php echo esc_html($data['field_name_1']); ?></h4>
                            <h3 class="text-2xl font-400 mb-4"><?php echo esc_html($data['field_name_2']); ?></h3>
                            <p class="text-black/60 font-medium leading-relaxed"><?php echo nl2br(esc_html($data['text_area_1'])); ?></p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

<?php endif;?>
