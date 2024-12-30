<?php
get_header();
$videos = get_posts_by_taxonomy("showcases","inspiration_type","video","10");
$photos = get_posts_by_taxonomy("showcases","inspiration_type","photo","10");
?>
<main id="mainMain" class="module">
    <div class="container mx-auto">
        <div class="my-8">
            <h2 class="mb-2 text-3xl font-400">Inspiration showcase</h2>
            <p class="text-black/60 font-medium leading-relaxed">Lorem ipsum dolor sit amet consectetur. Fermentum feugiat risus ac tristique pharetra at leo vitae.</p>
        </div>
        <div class="section--videos mt-16">
            <div class="relative mb-10">
                <h3 class="font-quicksand font-bold relative z-10 bg-white pr-8 inline-block">Videos</h3>
                <div class="bg-black/10 w-full h-[1px] absolute top-[13px]"></div>
            </div>
            <div class="grid grid-cols-3 gap-x-4 gap-y-10" id="videos_container">
                <?php if (!empty($videos)):?>
                    <?php foreach ($videos as $video):
                        $link = get_field("video_link",$video->ID);
                        $image = get_post_thumbnail($video->ID);
                        ?>
                        <div>
                            <a href="<?php echo $link;?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative cursor-pointer block">
                                <div class="w-full h-[240px] overflow-hidden relative">
                                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="object-cover w-full h-full" />
                                    <div class="absolute left-0 bottom-0 w-16 h-12 bg-white text-red flex justify-center items-center">
                                        <svg class="w-4 h-4 fill-current">
                                            <use xlink:href="#icon-play"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="font-quicksand text-lg font-semibold w-10/12 leading-6">Building a better world, together, we can make a difference</h3>
                                    <div class="bg-black/10 h-[1px] w-full my-2"></div>
                                    <div class="text-sm text-gray font-semibold"><?php echo get_formatted_post_date($video->ID)?></div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
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
        <div class="section--photos mt-16">
            <div class="relative mb-10">
                <h3 class="font-quicksand font-bold relative z-10 bg-white pr-8 inline-block">Photos</h3>
                <div class="bg-black/10 w-full h-[1px] absolute top-[13px]"></div>
            </div>
            <div class="grid grid-cols-3 gap-x-4 gap-y-10" id="photos_container">
                <?php if (!empty($photos)):?>
                    <?php foreach ($photos as $photo):
                        $image = get_post_thumbnail($photo->ID);
                        ?>
                        <div>
                            <div class="w-full h-[240px] overflow-hidden relative">
                                <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="object-cover w-full h-full" />
                                <div class="absolute left-0 bottom-0 w-16 h-12 bg-white text-red flex justify-center items-center">
                                    <svg class="w-4 h-4 fill-current">
                                        <use xlink:href="#icon-camera"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="font-quicksand text-lg font-semibold w-10/12 leading-6">Building a better world, together, we can make a difference</h3>
                                <div class="bg-black/10 h-[1px] w-full my-2"></div>
                                <div class="text-sm text-gray font-semibold"><?php echo get_formatted_post_date($photo->ID)?></div>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
            <div class="mt-12 flex justify-center">
                <a href="#" data-taxonomy="inspiration_type" data-term="photo" data-post_type="showcases" data-container="#photos_container" class="load-more-btn flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
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