<?php
$the_post = get_post(747);
$image = get_post_thumbnail($the_post->ID);
$video_link = get_field("video_link",$the_post->ID);
?>
<div class="module-quality-lifestyle">
    <div class="container mx-auto h-full px-4 lg:px-0">
        <div class="py-14">
            <div class="mb-10 text-center reveal fade-up reveal-transition">
                <?php if(is_user_logged_in()):?>
                            <small><a href="<?php echo get_edit_post_link($the_post->ID);?>" target="_blank">Edit Section</a></small>
                <?php endif;?>
                <h2 class="text-3xl font-bold mb-3"><?php echo $the_post->post_title?></h2>
                <p class="text-black/60"><?php echo $the_post->post_excerpt?></p>
            </div>
            <div class="relative reveal zoom-in reveal-transition">
                <a href="<?php echo $video_link?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                    <div class="absolute inset-0 bg-black/50 w-full h-[270px] md:h-[300px] lg:h-[580px] overflow-hidden"></div>
                    <div class="absolute z-10 inset-0 flex justify-center items-center">
                        <div class="bg-white text-red w-[80px] h-[80px] rounded-full flex justify-center items-center shadow-3xl hover:bg-primary hover:text-white cursor-pointer">
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[270px] md:h-[300px] lg:h-[580px] overflow-hidden">
                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
