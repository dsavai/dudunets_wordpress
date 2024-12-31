<?php
$the_post = get_post(747);
$image = get_post_thumbnail($the_post->ID);
$video_link = get_field("video_link",$the_post->ID);
?>
<div class="module-quality-lifestyle">
    <div class="container mx-auto h-full px-4 lg:px-0">
        <div class="py-14">
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-400 mb-1"><?php echo $the_post->post_title?></h2>
                <p class="font-quicksand text-gray font-bold"><?php echo $the_post->post_excerpt?></p>
            </div>
            <div class="relative cursor-default pb-6 lg:pb-0">
                <a href="<?php echo $video_link?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative cursor-default block">
                    <div class="absolute inset-0 bg-black/10 w-full h-[500px] overflow-hidden"></div>
                    <div class="absolute z-10 inset-0 flex justify-center items-center">
                        <div class="bg-white text-red w-24 h-24 rounded-full flex justify-center items-center shadow-3xl hover:bg-primary hover:text-white cursor-pointer">
                            <svg class="w-10 h-10 fill-current">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[500px] overflow-hidden">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
