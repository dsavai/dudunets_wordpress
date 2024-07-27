<?php
get_header();
$page = get_queried_object();
?>

    <main id="mainMain" class="module">
        <header class="flex justify-center mt-[70px] mb-[60px]">
            <div class="w-[600px] mx-[auto] text-center">
                <div class="flex justify-center text-[16px] mb-[30px]">
                    <span class="text-primary-900 font-[400] underline">
                        <a href="<?php get_home_url()?>">Home</a>
                    </span>
                    <span class="inline-block mx-[5px]">/</span>
                    <span class="text-primary-900 font-[400] underline">
                        <a href="<?php echo get_page_url_by_slug('inspiration')?>">Inspiration</a>
                    </span>
                    <span class="inline-block mx-[5px]">/</span>
                    <span>Home Comfort</span>
                </div>
                <?php echo apply_filters("the_content",$page->post_content)?>
            </div>
        </header>
        <div id="home-confort">
            <section class="module module--inspiration--filter">

            </section>
        </div>
    </main>
<?php
get_footer();
