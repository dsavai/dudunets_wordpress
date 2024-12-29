<?php
$the_page = get_post_by_id(715);
$processes = get_post_meta($the_page->ID, 'name_value_pair', true);
$cta = get_field("cta",$the_page->ID);
get_header();
?>

<?php if (!empty($processes)):?>
    <main id="mainMain" class="module">


        <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
            <div class="my-8">
                <div class="flex flex-col justify-center items-center text-center">
                    <h2 class="mb-2 text-3xl font-400"><?php echo $the_page->post_title?></h2>
                    <p class="text-black/60 font-medium leading-relaxed"><?php echo $the_page->post_excerpt?></p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <?php
                $x = 1;
                foreach ($processes as $process):?>
                    <div class="border border-black/10 px-6 py-4">
                        <div class="text-sm text-black/60 font-bold leading-relaxed mb-2">Step <?php echo numToWords($x)?></div>
                        <div class="flex gap-4">
                            <div class="flex justify-center items-center text-lg font-bold border-[3px] border-primary min-w-[40px] h-[40px] rounded-[40px]"><?php echo $x?></div>
                            <div>
                                <h3 class="text-lg font-quicksand font-bold"><?php echo esc_html($process['field_name']); ?></h3>
                                <p class="text-black/60 font-medium leading-relaxed"><?php echo esc_html($process['value']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                $x++;
                endforeach;?>
            </div>
            <?php
            $installations = get_page_by_slug('installations');
            ?>
            <div class="flex justify-center">
                <div class="mt-8">
                    <a href="<?php echo get_the_permalink($installations->ID)?>" class="inline-flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                        <span>View our installations</span>
                        <span>
                            <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </main>
<?php endif;?>
<?php
get_footer();
