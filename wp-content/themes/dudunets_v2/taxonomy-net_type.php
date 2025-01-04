<?php
get_header();
$term = get_queried_object();
$image = get_net_type_image_url($term->term_id);
?>
    <main class="main">
        
        <section class="module module--products px-4 lg:px-0 pt-8 pb-8 lg:pt-8 lg:pb-0">
            <div class="container mx-auto h-full">
                <div class="lg:pb-8">
                    <div class="mb-10">
                        <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-3">OUR PRODUTS</h4>
                        <h2 class="mt-1 mb-2 text-3xl font-400"><?php echo $term->description?></h2>
                    </div>
                    <?php get_template_part("template-parts/products/dudunet","products",array("term" => $term));?>
                </div>
            </div>
        </section>
        <section class="module module--seoblock seoblock-content px-4 lg:px-0 pt-8 pb-8 lg:pt-8 lg:pb-14">
            <div class="container mx-auto">
                <div class="py-6 px-8 border border-black/10">
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
