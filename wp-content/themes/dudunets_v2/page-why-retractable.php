<?php

$page = get_page_by_slug('why-retractable');
$image = get_post_thumbnail($page->ID);

get_header();
?>
    <main id="mainMain" class="module">
        <section class="module module--banner">
            <div class="w-[1240px] mx-[auto]">
                <div class="grid grid-cols-2">
                    <div>
                        <img src="<?php echo esc_url( $image['image'][0] )?>" alt="<?php echo esc_attr( $image['image']['alt'] )?>" width="<?php echo esc_attr( $image['image'][1] )?>" height="<?php echo esc_attr( $image['image'][2] )?>" />
                    </div>
                    <div class="w-[400px] mx-auto text-center h-full">
                        <div class="mt-[50px] mb-[100px]">
                            <div class="flex justify-center text-[16px]">
                                <span class="text-primary-900 font-semibold underline">
                                    <a href="#">Home</a>
                                </span>
                                <span class="inline-block mx-[5px]">/</span>
                                <span>Why Retractable?</span>
                            </div>
                        </div>
                        <?php echo apply_filters("the_content",$page->post_content);?>
                    </div>
                </div>
            </div>
        </section>
        <section class="module module--benefits">
            <?php $sections = get_custom_posts_by_slug('why_retractable_page',"ASC");
            foreach ($sections as $section){
                echo apply_filters("the_content", $section->post_content);
            }
            ?>
        </section>
        <section class="module module--testimonials"></section>
        <section class="module module--who-we-are"></section>
        <?php get_template_part("template-parts/home-page/help","section");?>
    </main>

<?php
get_footer();
