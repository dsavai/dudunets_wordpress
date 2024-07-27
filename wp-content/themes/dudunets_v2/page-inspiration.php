<?php
$page = get_queried_object();


get_header();
?>
    <main id="mainMain" class="module">
        <header class="flex justify-center mt-[70px] mb-[60px]">
            <div class="w-[600px] mx-[auto] text-center">
                <div class="flex justify-center text-[16px] mb-[30px]">
                    <span class="text-primary-900 font-[400] underline">
                        <a href="<?php echo home_url();?>">Home</a>
                    </span>
                    <span class="inline-block mx-[5px]">/</span>
                    <span><?php echo $page->post_title;?></span>
                </div>
                <h1 class="text-primary-900 text-[40px] font-[300] mb-[20px]"><?php echo $page->post_title?></h1>
                <?php echo apply_filters("the_content",$page->post_content);?>
            </div>
        </header>

        <?php
        $inspiration_sections = get_custom_posts_by_slug('inspiration_page_sec','ASC');
        if (!empty($inspiration_sections)):?>
        <div id="inspire-page">
            <section class="module module--why-us">
                <div class="mt-[80px] mb-[80px]">
                    <div class="w-[1240px] mx-[auto]">
                        <div class="grid grid-cols-2 gap-[20px]">

                            <?php foreach ($inspiration_sections as $section):
                                $image_with_attributes = get_post_thumbnail($section->ID);
                                $buttons = get_button_links($section->ID);
                                ?>

                            <div class="relative">
                                <div class="absolute top-[20px] left-0 right-0 z-10 text-center">
                                    <h4 class="text-primary-900"><?php echo $section->post_title?></h4>
                                    <h3 class="text-primary-900 font-[500] text-[30px]"><?php echo $section->post_content?></h3>
                                </div>
                                <div class="relative">
                                    <div class="h-[640px]" style="background-image: url(<?php echo $image_with_attributes['image'][0]?>);"></div>
                                    <?php if (!empty($buttons)):?>
                                    <div class="absolute bottom-[40px] left-0 flex right-0 justify-center items-center gap-[20px]">
                                        <?php foreach ($buttons as $item):
                                            $bits = explode("*",$item);
                                            ?>
                                            <a href="<?php echo $bits[1]?>" class="bg-primary-900 text-white font-bold border-secondary border-2 rounded-full pt-[8px] pb-[10px] px-[30px] transition delay-200 ease-in-out hover:bg-secondary hover:text-primary-900"><?php echo $bits[0]?></a>
                                        <?php endforeach;?>
                                    </div>
                                    <?php endif;?>

                                </div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php endif;?>
    </main>
<?php
get_footer();

