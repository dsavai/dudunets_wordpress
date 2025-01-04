<?php
$installations = get_custom_posts_by_slug('installation', "DESC",10);
?>
<?php if (!empty($installations)):?>

 <section class="module module--products border-t border-b border-black/10">
    <div class="container mx-auto h-full px-4 lg:px-0">
        <div class="py-14">
            <div class="mb-10">
                <h2 class="text-3xl font-400 lg:w-5/12 mb-1">Our Recent Mosquito Net for UPVC Windows & Doors</h2>
                <p class="lg:w-9/12 font-quicksand text-gray font-bold">We have successfully satisfied consumers on basis for wide variety of mosquito nets for windows and doors.</p>
            </div>
            <div class="installation-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($installations as $installation):
                        $image = get_post_thumbnail($installation->ID);
                        ?>
                        <div class="swiper-slide">
                            <div class="relative">
                                <div style="background-image: url(<?php echo $image['image'][0]?>);" class="w-full h-[400px] bg-no-repeat bg-cover"></div>
                                <div class="absolute inset-x-0 w-full bottom-0 bg-black/60 z-10 text-white text-center py-4">
                                    <h3 class="font-quicksand text-lg font-bold leading-5"><?php echo get_first_custom_category($installation->ID,"net_type")['custom_excerpt']?></h3>
                                    <p class="text-sm"><?php echo $installation->post_title ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-button-next w-6 h-6 bg-white p-6 after:!text-[24px] after:text-black after:after:font-bold"></div>
                <div class="swiper-button-prev w-6 h-6 bg-white p-6 after:!text-[24px] after:text-black after:font-bold"></div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>