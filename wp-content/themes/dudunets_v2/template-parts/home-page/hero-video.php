<?php

$videos = get_custom_posts_by_slug("front_page_videos","ASC");

$video = $videos[0];
$image = get_post_thumbnail($video->ID);
$video_link = get_field("video_url",$video->ID);
?>


<?php if(!empty($videos)):?>
    <section class="module module--featured">
        <div class="home-slider relative block w-full h-[400px] sm:h-[350px] md:h-[400px] lg:h-screen">
            <div class="swiper-wrapper relative">
                <div class="absolute inset-0 z-2 bg-black/40"></div>
                <div style="background-image: url(<?php echo $image['image'][0]?>)" class="w-full h-full bg-fixed bg-cover bg-center aspect-square"></div>
                <div class="absolute z-10 inset-0 flex justify-center items-center">
                    <a href="<?php echo $video_link;?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                        <div class="bg-white text-red w-[80px] h-[80px] rounded-full cursor-pointer flex justify-center items-center shadow-5xl hover:bg-primary hover:text-white transition-all delay-200 ease-in-out">
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
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

