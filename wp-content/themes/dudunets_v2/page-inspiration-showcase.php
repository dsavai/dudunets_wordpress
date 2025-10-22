<?php
get_header();
$videos = get_posts_by_taxonomy("showcases","inspiration_type","video","10");
$photos = get_posts_by_taxonomy("showcases","inspiration_type","photo","10");
?>
<main id="mainMain" class="module">
    <div class="container mx-auto px-4 lg:px-0 pt-8 pb-8 lg:pt-8 lg:pb-14">
        <div class="lg:my-8">
            <h2 class="mb-2 text-3xl font-400">Inspiration showcase</h2>
            <p class="text-black/60 font-medium leading-relaxed">Lorem ipsum dolor sit amet consectetur. Fermentum feugiat risus ac tristique pharetra at leo vitae.</p>
        </div>
        <div class="section--videos mt-8">
            <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4 lg:gap-y-10">
                <div class="cu">
                    <img src="https://picsum.photos/400/300" alt="Video Thumbnail" class="w-full h-auto">
                    <div class="w-full truncate mt-2">
                        <p class="text-black font-medium leading-relaxed">Magnetic window</p>
                    </div>
                </div>
                <div>
                    <img src="https://picsum.photos/400/300" alt="Video Thumbnail" class="w-full h-auto">
                    <div class="w-full truncate mt-2">
                        <p class="text-black font-medium leading-relaxed">Magnetic window</p>
                    </div>
                </div>
                <div>
                    <img src="https://picsum.photos/400/300" alt="Video Thumbnail" class="w-full h-auto">
                    <div class="w-full truncate mt-2">
                        <p class="text-black font-medium leading-relaxed">Magnetic window</p>
                    </div>
                </div>
            </div> -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4 lg:gap-y-10" id="showcase_gallery">
                <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2024/07/IMG_2123-scaled.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2024/07/IMG_2123-scaled.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
               <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2024/07/IMG-20250516-WA0143.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2024/07/IMG-20250516-WA0143.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2025/07/Untitled-design-8.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2025/07/Untitled-design-8.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2024/07/door_screen.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2024/07/door_screen.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2025/07/20250708_170555-min-scaled-e1752227826141.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2025/07/20250708_170555-min-scaled-e1752227826141.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://magneticdudunets.com/wp-content/uploads/2025/07/272210998_145075624581233_326708659839289387_n-211.jpg" data-caption="Buy Magnetic Mosquito Nets For Windows">
                        <div class="w-full h-[400px] overflow-hidden">
                            <img src="https://magneticdudunets.com/wp-content/uploads/2025/07/272210998_145075624581233_326708659839289387_n-211.jpg" alt="Buy Magnetic Mosquito Nets For Windows" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>
            </div>

            <div class="mt-12 flex justify-center">
                <a href="#"  data-taxonomy="inspiration_type" data-term="video" data-post_type="showcases" data-container="#videos_container" class="load-more-btn flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                    <span>Load more</span>
                    <span>
                        <svg class="w-8 h-8 fill-current">
                            <use xlink:href="#icon-menudots"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();