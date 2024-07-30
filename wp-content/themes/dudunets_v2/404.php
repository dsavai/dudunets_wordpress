<?php
/*
Template Name: Custom Blog Page
*/
$page = get_page_by_slug("page-not-found");
$image = get_post_thumbnail($page->ID);
get_header(); ?>

<main class="main">
    <section class="module module--banner">
        <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo $image['image'][0] ?>);">
            <div class="bg-black/40 absolute inset-0"></div>
            <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                    <span>
                        <svg class="w-5 h-5 fill-current">
                            <use xlink:href="#icon-documentfile"></use>
                        </svg>
                    </span>
                </div>
                <h1 class="text-6xl font-bold mt-4"><?php echo $page->post_title ?></h1>
            </div>
        </div>
    </section>

    <?php echo apply_filters("the_content",$page->post_content)?>
</main>

<?php get_footer(); ?>
