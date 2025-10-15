<?php
get_header();
$post = get_queried_object();
$categories = get_post_terms_in_net_type($post->ID);
$image = get_post_thumbnail($post->ID);
$timestamp = strtotime($post->post_date); // Convert a date string to a timestamp
$date = date('F d, Y', $timestamp);
$avatar = get_user_avatar($post->post_author);
$tags = get_post_tags($post->ID);
$share_urls = get_share_links($post->ID);
$term = $categories[0];
?>
    <main class="main">
        <section class="module product-single-module">
            <div class="mt-3">
                <div class="swiper productSingleSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>
                    <div class="swiper-pagination z-20"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="container m-auto">
                <div class="container-product mt-10">
                    <div class="section-about mb-10 border-b pb-5 border-black/10">
                        <div>
                            <h2 class="text-2xl font-bold">Magnetic Mosquito Screens For Windows</h2>
                            <p class="text-black/60 font-normal leading-relaxed">Supreme Pleated Insect Screens: the perfect fit for your windows, combining elegance with effective protection.</p>
                        </div>
                        <div class="mt-3">
                            <h3 class="mb-[5px]">For inquiries or order placement, call us:</h3>
                            <div class="mb-2 flex items-center">
                                <span class="mr-1">
                                    <svg class="w-5 h-5 fill-current">
                                        <use xlink:href="#icon-pin-outline"></use>
                                    </svg>
                                </span>
                                <span class="font-semibold">0721108407</span>
                                <span> or visit us:</span>
                            </div>
                            <div class="mb-2 flex items-center">
                                <span class="mr-1">
                                    <svg class="w-5 h-5 fill-current">
                                        <use xlink:href="#icon-phone-outline"></use>
                                    </svg>
                                </span>
                                <span class="font-semibold">Winsford Park,</span> 
                                <span>Baba Dogo, Nairobi</span>
                            </div>
                        </div>
                    </div>
                    <div class="section-reviews mt-5 mb-10 border-b pb-5 border-black/10">
                        <h3 class="text-lg font-semibold">Reviews</h3>
                        <div class="mt-3">
                            <div class="swiper clientReviews">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="border border-black/10 px-6 py-5 mb-4">
                                            <div class="flex gap-4">
                                                <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]">E</div>
                                                <div>
                                                    <div>
                                                        <h4 class="font-quicksand capitalize text-lg font-bold">Elton wemali</h4>
                                                        <div class="flex items-center gap-2">
                                                            <small class="text-gray text-sm font-medium">Google review</small>
                                                            <div class="bg-secondary /20 px-2 rounded-md font-bold text-sm">4.9</div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p>I absolutely appreciated the professionalism of your workmanship quality of your products. Am enjoying my mosquito-free home. Thank you Magnetic Dudu Nets</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-black/10 px-6 py-5 mb-4">
                                            <div class="flex gap-4">
                                                <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]">E</div>
                                                <div>
                                                    <div>
                                                        <h4 class="font-quicksand capitalize text-lg font-bold">Elton wemali</h4>
                                                        <div class="flex items-center gap-2">
                                                            <small class="text-gray text-sm font-medium">Google review</small>
                                                            <div class="bg-secondary /20 px-2 rounded-md font-bold text-sm">4.9</div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p>I absolutely appreciated the professionalism of your workmanship quality of your products. Am enjoying my mosquito-free home. Thank you Magnetic Dudu Nets</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="border border-black/10 px-6 py-5 mb-4">
                                            <div class="flex gap-4">
                                                <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]">E</div>
                                                <div>
                                                    <div>
                                                        <h4 class="font-quicksand capitalize text-lg font-bold">Elton wemali</h4>
                                                        <div class="flex items-center gap-2">
                                                            <small class="text-gray text-sm font-medium">Google review</small>
                                                            <div class="bg-secondary /20 px-2 rounded-md font-bold text-sm">4.9</div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p>I absolutely appreciated the professionalism of your workmanship quality of your products. Am enjoying my mosquito-free home. Thank you Magnetic Dudu Nets</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:after:font-bold"></div>
                                <div class="swiper-button-prev w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:font-bold"></div>
                                <div class="swiper-pagination z-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section-installation mt-5 mb-6">
                        <h3 class="text-lg font-semibold">Installations</h3>
                        <div class="mt-3">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="border border-black/10">
                                    <div class="h-[365px]">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/installation_01.jpg" class="w-full h-full" />
                                    </div>
                                    <div class="py-3 px-4 font-medium">GreenPark Estate, Naivasha</div>
                                </div>
                                <div class="border border-black/10">
                                    <div class="h-[365px]">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/installation_02.jpg" class="w-full h-full" />
                                    </div>
                                    <div class="py-3 px-4 font-medium"> Peponi Gardens, Westlands</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-photos mt-5 mb-6">
                        <h3 class="text-lg font-semibold">Photos</h3>
                        <div class="mt-3">
                            <div class="masonry-grid">
                                <div class="masonry-grid-item"> 
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                                </div>
                                <div class="masonry-grid-item">
                                    <img class="h-auto max-w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-video mt-5 mb-2 border-b pb-[70px] border-black/10">
                        <h3 class="text-lg font-semibold">Video</h3>
                        <div class="mt-3">
                            <div class="relative pb-6 lg:pb-0">
                                <a href="https://www.youtube.com/embed/ZXjHqf9oCFU?si=-z5Ns4Zw5MAeiAsj" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                                    <div class="absolute inset-0 bg-black/50 w-full h-[270px] md:h-[300px] lg:h-[500px] overflow-hidden"></div>
                                    <div class="absolute z-10 inset-0 flex justify-center items-center">
                                        <div class="bg-white text-red w-[80px] h-[80px] rounded-full flex justify-center items-center shadow-3xl hover:bg-primary hover:text-white cursor-pointer">
                                            <svg class="w-5 h-5 fill-current">
                                                <use xlink:href="#icon-play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full h-[270px] md:h-[300px] lg:h-[500px] overflow-hidden">
                                        <img src="http://localhost/dudunets/wp-content/uploads/2024/12/mesh_window.jpg" alt="" class="w-full h-full object-cover">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part("template-parts/home-page/module","location");?>
        </section>
    </main>
<?php
get_footer();
