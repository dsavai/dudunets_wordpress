<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>
    <main class="main">
        <section class="module module--banner">
            <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo $image['image'][0]?>);">
                <div class="bg-black/40 absolute inset-0"></div>
                <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                    <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="text-sm font-semibold uppercase">about us</span>
                    </div>
                    <h1 class="px-4 lg:px-0 text-4xl md:text-6xl font-bold mt-4 text-center">Know about our journey</h1>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/company/module","what_we_offer");?>
        <?php get_template_part("template-parts/company/module","what_we_do_expert");?>
        <?php get_template_part("template-parts/company/module","stats");?>
        <?php get_template_part("template-parts/company/module","vision_mission");?>
        <?php get_template_part("template-parts/company/module","team");?>
    </main>

<?php
get_footer();
