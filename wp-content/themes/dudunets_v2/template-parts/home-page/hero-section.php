<?php



$sliders = get_custom_posts_by_slug("front_page_slider","ASC");



?>





<?php if(!empty($sliders)):?>

    <section class="module module--featured">

        <div class="home-slider swiper w-full h-[200px] sm:h-[300px] md:h-[400px] lg:h-[490px]">

            <div class="swiper-wrapper">

                <?php foreach ($sliders as $slider):

                    $image = get_post_thumbnail($slider->ID);

                    $link = get_field("link",$slider->ID);

                    ?>

                    

                    <div class="swiper-slide relative">
                        <a href="<?php echo $link;?>">
                            <!-- <div class="bg-black absolute inset-0 bg-opacity-20 z-10"></div> -->

                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image["alt"]?>" class="block w-full h-full object-cover" />
                        </a>

                    </div>

                    

                    

                <?php endforeach;?>

            </div>

            <div class="swiper-button-next w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:after:font-bold"></div>

            <div class="swiper-button-prev w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:font-bold"></div>

            <div class="swiper-pagination z-20"></div>

        </div>

    </section>

<?php endif;?>



