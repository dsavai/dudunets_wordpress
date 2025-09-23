<?php

$sliders = get_custom_posts_by_slug("front_page_slider","ASC");

?>


<?php if(!empty($sliders)):?>
    <section class="module module--featured">
        <div class="home-slider swiper w-full h-[400px] sm:h-[350px] md:h-[400px] lg:h-screen">
            <div class="swiper-wrapper">
                <?php foreach ($sliders as $slider):
                    $image = get_post_thumbnail($slider->ID);
                    ?>
                    <div class="swiper-slide relative">
                        <div class="absolute bottom-[20%] left-[5%] z-[99] text-white w-[50%]">
                            <h1 class="text-6xl font-bold mb-2"><?php echo $slider->post_title?></h1>
                            <p class="font-medium text-[17px] leading-6 hidden lg:block"><?php echo $slider->post_excerpt?></p>
                        </div>
                        <div class="absolute inset-0 w-full h-full z-10 bg-gradient-to-b from-black to-black-200 rotate-180 opacity-80"></div>
                        <div style="background-image: url(<?php echo $image['image'][0]?>)" class="w-full h-full bg-fixed bg-cover bg-center aspect-square"></div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="swiper-button-next w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:after:font-bold"></div>
            <div class="swiper-button-prev w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:font-bold"></div>
            <div class="swiper-pagination z-20"></div>
        </div>
    </section>
<?php endif;?>

