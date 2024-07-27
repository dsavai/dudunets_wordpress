<?php

$page = get_page_by_slug("get-screens");
get_header();
?>
    <main id="mainMain"  class="module">
        <section class="module module--installation--message">
            <div class="text-center border-b-[1px] border-gray-100 py-[20px]">
                <p class="text-[14px]"><?php echo $page->post_excerpt;?></p>
            </div>
        </section>
        <section class="module module--menu">
            <div class="mt-[50px] mb-[50px]">
                <div class="flex justify-center text-[16px]">
                    <span class="text-primary-900 font-semibold underline">
                        <a href="<?php echo get_home_url()?>">Home</a>
                    </span>
                    <span class="inline-block mx-[5px]">/</span>
                    <span>Get Screens</span>
                </div>
            </div>
        </section>
        <?php echo apply_filters("the_content",$page->post_content);?>
        <?php get_template_part("template-parts/home-page/help","section");?>
    </main>
<?php
get_footer();
