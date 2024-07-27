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
                    <h3 class="text-lg font-semibold mb-1">Mosquito net for window</h3>
                    <p class="text-sm leading-loose">Early mornings or late evenings in good weather is balcony time for any family. The problem we face while sitting in a balcony is unpleasant and harmful bites of mosquitoes and other insects. To solve this, Insect Shield has introduced <a href="#">Pleated Mosquito Net</a>  for Large openings. This innovative product adapts to various problems related to the installation of mosquito net in balconies. More of tensioning cords & deeper bottom track is used to neutralize wind pressure in the balcony. Our zigzag mesh is made of waterproof polyester resistant to atmospheric pollution and salinity. Three-part wide width mosquito net can cover large balconies without compromising on view while the 2 support handles ensure smoother movement. When not needed, pleated mosquito net for balcony retracts into minimal stack space at both ends. The mesh is made of waterproof polyester so it can be cleaned by piped water. Balcony nets have a warranty of 60 months from the date of installation.</p>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>
<?php
get_footer();
