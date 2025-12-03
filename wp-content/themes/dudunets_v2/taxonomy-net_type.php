<?php
get_header();
$term = get_queried_object();
$image = get_net_type_image_url($term->term_id);
?>
    <main class="main">

        <section class="module module--products">
            <div class="container mx-auto h-full px-4 lg:px-0 mb-8">
                <div class="mt-[40px] lg:mt-[60px]">
                    <div class="mb-5 lg:mb-10 text-center">
                        <h4 class="text-sm text-secondary font-bold mb-2">All Products</h4>
                        <h2 class="text-2xl lg:text-3xl font-bold"><?php echo $term->description?></h2>
                    </div>
                    <?php get_template_part("template-parts/products/dudunet","products",array("term" => $term));?>
                </div>
            </div>
        </section>
        <section class="border-t border-[rgba(0,0,0,0.05)]">
            <?php get_template_part("template-parts/home-page/module-contact","us-form");?>
        </section>
    </main>
<?php
get_footer();