<?php
$the_page = get_post_by_id(715);
$processes = get_post_meta($the_page->ID, 'name_value_pair', true);
$cta = get_field("cta",$the_page->ID);
get_header();
?>
    <main id="mainMain" class="module">
        <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
            <div class="my-8">
                <div class="flex flex-col justify-center items-center text-center">
                    <h2 class="mb-2 text-3xl font-400">Our process</h2>
                    <p class="text-black/60 font-medium leading-relaxed">Lorem ipsum Innovation thrives on the cusp of creativity and necessity, and today's world presents. creativity and necessity, and today's world presents</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="border border-black/10 px-6 py-4">
                    <div class="text-sm text-black/60 font-bold leading-relaxed mb-2">Step one</div>
                    <div class="flex gap-4">
                        <div class="flex justify-center items-center text-lg font-bold border-[3px] border-primary min-w-[40px] h-[40px] rounded-[40px]">1</div>
                        <div>
                            <h3 class="text-lg font-quicksand font-bold">Select Window Type</h3>
                            <p class="text-black/60 font-medium leading-relaxed">Client identifies which solution they need i.e magnetic   Winow nets or retractable screens</p>
                        </div>
                    </div>
                </div>
                <div class="border border-black/10 px-6 py-4">
                    <div class="text-sm text-black/60 font-bold leading-relaxed mb-2">Step two</div>
                    <div class="flex gap-4">
                        <div class="flex justify-center items-center text-lg font-bold border-[3px] border-primary min-w-[40px] h-[40px] rounded-[40px]">2</div>
                        <div>
                            <h3 class="text-lg font-quicksand font-bold">Measurements and Sizing</h3>
                            <p class="text-black/60 font-medium leading-relaxed">We do a site visit to take measurements of the doors or windows or any other openings they need covered</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mt-8">
                    <a href="#" class="inline-flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                        <span>View our installations</span>
                        <span>
                            <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
