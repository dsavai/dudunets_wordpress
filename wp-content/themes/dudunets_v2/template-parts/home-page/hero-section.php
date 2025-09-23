<?php

$sliders = get_custom_posts_by_slug("front_page_slider","ASC");

?>


<?php if(!empty($sliders)):?>
    <section class="module module--featured">
        <div class="home-slider relative block w-full h-[400px] sm:h-[350px] md:h-[400px] lg:h-screen">
            <div class="swiper-wrapper relative">
                <div class="absolute inset-0 z-2 bg-black/40"></div>
                <div style="background-image: url(https://magneticdudunets.com/wp-content/uploads/2024/07/Hero-Banner-03.jpg)" class="w-full h-full bg-fixed bg-cover bg-center aspect-square"></div>
                <div class="absolute z-10 inset-0 flex justify-center items-center">
                    <a href="https://www.youtube.com/embed/ZXjHqf9oCFU?si=-z5Ns4Zw5MAeiAsj" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                        <div class="bg-white text-red w-[80px] h-[80px] rounded-full cursor-pointer flex justify-center items-center shadow-5xl hover:bg-primary hover:text-white transition-all delay-200 ease-in-out">
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- <?php //foreach ($sliders as $slider):
                    //$image = get_post_thumbnail($slider->ID);
                    ?>
                    <div class="swiper-slide relative">
                        <div class="absolute bottom-[20%] left-[5%] z-[99] text-white w-[50%]">
                            <h1 class="text-6xl font-bold mb-2"><?php //echo $slider->post_title?></h1>
                            <p class="font-medium text-[17px] leading-6 hidden lg:block"><?php //echo $slider->post_excerpt?></p>
                        </div>
                        <div class="absolute inset-0 w-full h-full z-10 bg-gradient-to-b from-black to-black-200 rotate-180 opacity-80"></div>
                        <div style="background-image: url(<?php //echo $image['image'][0]?>)" class="w-full h-full bg-fixed bg-cover bg-center aspect-square"></div>
                    </div>
                <?php //endforeach;?> -->
            </div>
            <!-- <div class="swiper-button-next w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:after:font-bold"></div>
            <div class="swiper-button-prev w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:font-bold"></div>
            <div class="swiper-pagination z-20"></div> -->
            <div class="absolute bottom-[-25px] left-0 right-0 w-full z-20">
                <div class="mx-auto max-w-max bg-gradient-to-r z-9 from-[#0CBD92] to-[#1967C3] p-3 cursor-pointer text-white py-4 px-6 lg:px-10 flex justify-between items-center text-sm lg:text-base">
                    <div class="mr-4">
                        <svg class="w-8 h-8 fill-current">
                            <use xlink:href="#icon-file"></use>
                        </svg>
                    </div>
                    <div class="font-semibold">Request a quote now</div>
                    <div class="ml-4">
                        <svg class="w-5 h-5 fill-current">
                            <use xlink:href="#icon-big-arrow"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

