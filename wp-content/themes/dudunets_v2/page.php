<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dudunets
 */
$page = get_queried_object();
get_header();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section class="module module--banner">
            <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo !empty($image['image'])? $image['image'][0]: get_featured_background_image();?>);">
                <div class="bg-black/40 absolute inset-0"></div>
                <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                    <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="text-sm font-semibold uppercase"><?php echo $page->post_title?></span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mt-4"><?php echo isset($page->post_excerpt)?$page->post_excerpt:""?></h1>
                </div>
            </div>
        </section>
        <section class="module module--content-content">
            <div class="container mx-auto">
                <div class="w-9/12 mx-auto mt-10">
                    <section class="module module--blog-content mb-16">
                        <div class="general-content">
                            <?php echo apply_filters("the_content",$page->post_content);?>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>



<?php
get_footer();
