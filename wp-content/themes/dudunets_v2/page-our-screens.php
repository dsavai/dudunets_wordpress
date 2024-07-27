<?php
$page = get_page_by_slug('our-screens');
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
                                    <a href="<?php echo get_home_url()?>">Home</a>
                                </span>
                                <span class="inline-block mx-[5px]">/</span>
                                <span>Our Screens</span>
                            </div>
                        </div>
                        <?php echo apply_filters("the_content",$page->post_content);?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $sections = get_custom_posts_by_slug("our_screens_page_sec","ASC");
        foreach ($sections as $section){
            echo apply_filters("the_content", $section->post_content);
        }
        ?>

        <?php get_template_part("template-parts/home-page/help","section");?>
    </main>

<?php
get_footer();
