<?php
/*
Template Name: Custom Blog Page
*/
$the_page = get_page_by_slug("page-not-found");
$image = get_post_thumbnail($the_page->ID);
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
                    <span class="text-sm font-semibold uppercase">404</span>
                </div>
                <h1 class="text-6xl font-bold mt-4"><?php echo $the_page->post_title ?></h1>
            </div>
        </div>
    </section>

    <section class="module module--content-content">
        <div class="container mx-auto">
            <div class="w-9/12 mx-auto mt-10">
                <section class="module module--blog-content mb-16">
                    <div class="general-content">
                        <p class="text-lg">Sorry, but the page you were trying to view does not exist.  It looks like this was the result of either:</p>
                        <ul class="mb-10">
                            <li>A mistyped address</li>
                            <li>An out-of-date link</li>
                        </ul>
                        <a href="<?php echo get_home_url()?>" class="inline-flex gap-3 items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">
                            <span>Return to Home</span>
                            <span>
                                    <svg class="w-6 h-6 fill-current">
                                        <use xlink:href="#icon-right"></use>
                                    </svg>
                                </span>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
