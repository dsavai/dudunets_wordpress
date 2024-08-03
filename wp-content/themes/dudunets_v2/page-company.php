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
                    <h1 class="px-4 lg:px-0 text-4xl md:text-6xl font-bold mt-4">Know about our journey</h1>
                </div>
            </div>
        </section>
        <section class="module module--what-we-offer">
            <div class="container mx-auto">
                <div class="pt-8 lg:pt-16 pb-10">
                    <div class="mb-10 px-4 lg:px-0">
                        <h4 class="text-sm uppercase text-primary font-bold mb-2">ABOUT US</h4>
                        <h2 class="text-3xl font-bold">What we offer</h2>
                    </div>
                    <div class="grid grid-cols-1 gap-3 lg:grid-cols-3 lg:gap-6 px-4 lg:px-0">
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
            <div class="pt-8 px-4 lg:pt-20 lg:pb-24 lg:px-24">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="w-full h-[280px] lg:w-[480px] lg:h-[480px]">
                            <img src="images/what_we_do/what_we_do_image.png" alt="" class="w-fullh-full object-cover" />
                        </div>
                        <div class="mt-10 lg:w-10/12">
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
        <section class="module module--stats">
            <div class="container mx-auto">
                <div class="mb-24 mt-10 px-4 lg:px-0">
                    <div class="border border-black/10 rounded-lg overflow-hidden">
                        <div class="lg:flex">
                            <div class="lg:basis-1/3">
                                <div class="relative">
                                    <div class="absolute inset-0 z-10 bg-cover bg-no-repeat" style="background-image: url(images/about/view_products.png);"></div>
                                    <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary p-2 opacity-60 z-20"></div>
                                    <div class="relative z-30">
                                        <div class="px-8 py-8">
                                            <h3 class="text-white text-2xl font-semibold">Protect your home against mosquito  today!</h3>
                                            <a href="#" class="inline-flex gap-3 items-center mt-7 p-2 font-bold bg-white text-secondary px-8 py-3 rounded-full hover:bg-primary transition-all duration-500 delay-500">
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
                            <div class="lg:basis-8/12 grid grid-cols-1 lg:grid-cols-3">
                                <div class="py-8 flex flex-col justify-center items-center border-r border-black/10">
                                    <h4 class="text-4xl font-bold">8956</h4>
                                    <p class="text-black/60">Customer’s satisfaction</p>
                                </div>
                                <div class="py-8 flex flex-col justify-center items-center border-r border-black/10">
                                    <h4 class="text-4xl font-bold">3789</h4>
                                    <p class="text-black/60">Window nets delivered</p>
                                </div>
                                <div class="py-8 flex flex-col justify-center items-center">
                                    <h4 class="text-4xl font-bold">2098</h4>
                                    <p class="text-black/60">Door nets delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module module--vision-mission">
            <div class="pt-18 pb-20">
                <div class="container mx-auto px-4 lg:px-0">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-24">
                        <div>
                            <h4 class="text-3xl font-bold">Our Vision</h4>
                            <p class="mb-10 text-black/60 w-10/12">Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            <h4 class="text-3xl font-bold">Our Values</h4>
                            <p class="mb-10 text-black/60 w-10/12">Lorem ipsum dolor sit amet consectetur adipiscing elit sed eiusm tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="mt-7">
                                <div class="border border-black/10 py-4 px-6 rounded-lg mb-4">
                                    <a href="#accordion-1" class="accordion_title flex justify-between items-center text-md font-bold">
                                        <span>To speak the truth</span>
                                        <span>
                                            <svg class="w-6 h-6 fill-current">
                                                <use xlink:href="#icon-arrowdown"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div id="accordion-1" class="accordion_content mt-3 text-sm text-black/60">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum.</p>
                                    </div>
                                </div>
                                <div class="border border-black/10 py-4 px-6 rounded-lg mb-4">
                                    <a href="#accordion-2" class="accordion_title flex justify-between items-center text-md font-bold">
                                        <span>To serve each other</span>
                                        <span>
                                            <svg class="w-6 h-6 fill-current">
                                                <use xlink:href="#icon-arrowdown"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div id="accordion-2" class="accordion_content mt-3 text-sm text-black/60 hidden">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum.</p>
                                    </div>
                                </div>
                                <div class="border border-black/10 py-4 px-6 rounded-lg mb-4">
                                    <a href="#accordion-3" class="accordion_title flex justify-between items-center text-md font-bold">
                                        <span>To pursue excellence</span>
                                        <span>
                                            <svg class="w-6 h-6 fill-current">
                                                <use xlink:href="#icon-arrowdown"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div id="accordion-3" class="accordion_content mt-3 text-sm text-black/60 hidden">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum.</p>
                                    </div>
                                </div>
                                <div class="border border-black/10 py-4 px-6 rounded-lg mb-4">
                                    <a href="#accordion-4" class="accordion_title flex justify-between items-center text-md font-bold">
                                        <span>To practice stewardship</span>
                                        <span>
                                            <svg class="w-6 h-6 fill-current">
                                                <use xlink:href="#icon-arrowdown"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div id="accordion-4" class="accordion_content mt-3 text-sm text-black/60 hidden">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row items-center gap-6 mt-10">
                                <a href="#" class="inline-flex gap-3 items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-7 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">
                                    <span>Contact us</span>
                                    <span>
                                        <svg class="w-6 h-6 fill-current">
                                            <use xlink:href="#icon-right"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a href="#" class="text-primary font-semibold text-md border-b-[2px] border-primary">Our product  catalog</a>
                            </div>
                        </div>
                        <div class="w-full h-[600px] rounded-lg overflow-hidden">
                            <img src="images/about/vision_mission_image_01.jpg" alt="" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module module--team">
            <div>
                <div class="container mx-auto px-4 lg:px-0">
                    <h2 class="mt-1 mb-6 text-3xl font-bold">Meet our expert team</h2>
                    <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-4 lg:gap-6">
                        <div class="mb-3">
                            <div class="w-full h-[350px] overflow-hidden rounded-lg mb-5">
                                <img src="images/about/team_member_01.jpg" alt="" class="w-full h-full object-cover" />
                            </div>
                            <div class="text-sm text-black/60">Team Lead</div>
                            <h4 class="text-lg font-bold">Brian Mutwiri</h4>
                        </div>
                        <div class="mb-3">
                            <div class="w-full h-[350px] overflow-hidden rounded-lg mb-5">
                                <img src="images/about/team_member_02.jpg" alt="" class="w-full h-full object-cover" />
                            </div>
                            <div class="text-sm text-black/60">Team Lead</div>
                            <h4 class="text-lg font-bold">Ivy Mwende</h4>
                        </div>
                        <div class="mb-3">
                            <div class="w-full h-[350px] overflow-hidden rounded-lg mb-5">
                                <img src="images/about/team_member_03.jpg" alt="" class="w-full h-full object-cover" />
                            </div>
                            <div class="text-sm text-black/60">Technician</div>
                            <h4 class="text-lg font-bold">Jackson Mwangi</h4>
                        </div>
                        <div class="mb-3">
                            <div class="w-full h-[350px] overflow-hidden rounded-lg mb-5">
                                <img src="images/about/team_member_01.jpg" alt="" class="w-full h-full object-cover" />
                            </div>
                            <div class="text-sm text-black/60">Team Lead</div>
                            <h4 class="text-lg font-bold">Brian Mutwiri</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","clients");?>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>

<?php
get_footer();
