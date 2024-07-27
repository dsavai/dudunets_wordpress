<?php
$page = get_page_by_slug('why-magnetic-dudunets');
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
                                <span>Why Magnetic Dudunets?</span>
                            </div>
                        </div>
                        <?php echo apply_filters("the_content",$page->post_content);?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $page = get_post_by_id(154);
        echo apply_filters("the_content",$page->post_content);
        ?>
        <?php get_template_part("template-parts/home-page/testimonial","section");?>
        <section class="module module--who-we-are">
            <?php
            $page = get_post_by_id(155);
            echo apply_filters("the_content",$page->post_content);
            ?>

        </section>
        <?php get_template_part("template-parts/home-page/help","section");?>
    </main>
<?php
get_footer();
