<?php
get_header();
$term = get_queried_object();
$image = get_net_type_image_url($term->term_id);
?>
    <main class="main">
        <section class="module module--banner">
            <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo $image?>);">
                <div class="bg-black/40 absolute inset-0"></div>
                <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                    <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="text-sm font-semibold uppercase"><?php echo $term->name?></span>
                    </div>
                    <h1 class="text-6xl font-bold mt-4"><?php echo $term->description?></h1>
                </div>
            </div>
        </section>
        <section class="module module--products">
            <div class="container mx-auto h-full">
                <div class="py-16">
                    <div class="mb-10">
                        <h4 class="text-sm uppercase text-primary font-bold mb-2">OUR PRODUTS</h4>
                        <h2 class="text-3xl font-bold"><?php echo $term->description?></h2>
                    </div>
                    <?php get_template_part("template-parts/products/dudunet","products",array("term" => $term));?>
                </div>
            </div>
        </section>
        <section class="module module--seoblock seoblock-content">
            <div class="container mx-auto">
                <div class="py-6 px-8 border border-black/10 mb-24 rounded-xl">
                    <h3 class="text-lg font-semibold mb-1"><?php echo $term->description;?></h3>
                    <p class="text-sm leading-loose"><?php echo get_field("inner-page-description", $term);?></p>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>
<?php
get_footer();
