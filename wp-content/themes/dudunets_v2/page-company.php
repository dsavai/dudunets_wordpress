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
                    <h1 class="text-6xl font-bold mt-4">Know about our journey</h1>
                </div>
            </div>
        </section>
        <section class="module module--what-we-offer">
            <div class="container mx-auto">
                <div class="pt-16 pb-10">
                    <div class="mb-10">
                        <h4 class="text-sm uppercase text-primary font-bold mb-2">ABOUT US</h4>
                        <h2 class="text-3xl font-bold">What we offer</h2>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="flex flex-col justify-center items-center px-16 py-12 text-center mb-3 bg-white shadow-sm rounded-lg border border-gray-light">
                            <div class="text-primary">
                                <svg class="w-10 h-10 fill-current">
                                    <use xlink:href="#icon-server"></use>
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium my-2">Pleated mosquito net</h4>
                            <p class="text-sm text-black/60">Lorem ipsum dolor sit amet consectetur. Pellentesque dolor aliquam.</p>
                        </div>
                        <div class="flex flex-col justify-center items-center px-16 py-12 text-center mb-3 bg-white shadow-sm rounded-lg border border-gray-light">
                            <div class="text-primary">
                                <svg class="w-10 h-10 fill-current">
                                    <use xlink:href="#icon-server"></use>
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium my-2">Roller mosquito net</h4>
                            <p class="text-sm text-black/60">Lorem ipsum dolor sit amet consectetur. Pellentesque dolor aliquam.</p>
                        </div>
                        <div class="flex flex-col justify-center items-center px-16 py-12 text-center mb-3 bg-white shadow-sm rounded-lg border border-gray-light">
                            <div class="text-primary">
                                <svg class="w-10 h-10 fill-current">
                                    <use xlink:href="#icon-server"></use>
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium my-2">Barrier free insect net</h4>
                            <p class="text-sm text-black/60">Lorem ipsum dolor sit amet consectetur. Pellentesque dolor aliquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module module--expert">
            <div class="pt-20 pb-24 px-24">
                <div class="container mx-auto">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="w-[480px] h-[480px]">
                            <img src="images/what_we_do/what_we_do_image.png" alt="" class="w-fullh-full object-cover" />
                        </div>
                        <div class="mt-10 w-10/12">
                            <h4 class="text-sm uppercase text-primary font-bold mb-3">WHAT WE DO</h4>
                            <h2 class="text-3xl font-bold mb-5">Expert solution for complex issue.</h2>
                            <p class="text-black/60">Magnectic dudu nets has collaboration with best companies of Europe to provide quality Insect Screen Systems to Indian Consumers. The company has exclusive contract for manufacturing, assembling & distribution with Greenweb, Germany & with T.I.E, Italy.</p>
                            <a href="#" class="inline-flex gap-3 items-center mt-7 bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">
                                <span>View products</span>
                                <span>
                                    <svg class="w-6 h-6 fill-current">
                                        <use xlink:href="#icon-right"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part("template-parts/company/module","stats");?>
        <?php get_template_part("template-parts/company/module","vision_mission");?>
        <?php get_template_part("template-parts/company/module","team");?>
        <?php get_template_part("template-parts/home-page/module","clients");?>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>

<?php
get_footer();
