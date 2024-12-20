<?php
$the_page = get_post_by_id(715);
$processes = get_post_meta($the_page->ID, 'name_value_pair', true);
get_header();
?>
    <main id="mainMain" class="module">
        <section class="module module--banner">
            <div class="w-[1240px] mx-[auto]">
                <?php if (!empty($processes)):
                    $x = 1?>
                    <?php foreach ($processes as $process):?>
                       <div><?php echo $x?></div>
                <div><?php echo numToWords($x)?></div>
                        <div class="py-8 flex flex-col justify-center items-center border-r border-black/10">
                            <h4 class="text-4xl font-bold"><?php echo esc_html($process['value']); ?></h4>
                            <p class="text-black/60"><?php echo esc_html($process['field_name']); ?></p>
                        </div>
                    <?php
                $x++;
                endforeach;?>
                <?php endif;?>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>

<?php
get_footer();
