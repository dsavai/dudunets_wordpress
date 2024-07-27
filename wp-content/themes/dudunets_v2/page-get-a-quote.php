<?php
get_header();
$page = get_page_by_slug('get-a-quote');
?>
    <main id="mainMain"  class="module">
    <section class="module module--installation--message">
        <div class="text-center border-b-[1px] border-gray-100 py-[20px]">
            <p class="text-[14px]"><?php echo $page->post_excerpt;?></p>
        </div>
    </section>

    <section class="module module--get--quote mt-[60px]">
        <div class="w-[1240px] mx-[auto]">
            <div class="flex gap-[50px]">
                <?php echo $page->post_content;?>
                <div class="flex-1">
                    <div class="bg-gray-300 p-[60px]">
                        <div class="mx-auto w-[400px] text-primary-900">
                            <?php get_template_part("template-parts/forms/get-a","quote");?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
