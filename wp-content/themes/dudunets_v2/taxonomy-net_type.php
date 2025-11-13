<?php
get_header();
$term = get_queried_object();
$image = get_net_type_image_url($term->term_id);
$swipers = get_term_meta(get_queried_object_id(), 'net_type_swipers', true);
$reviews = get_custom_posts_by_slug('customer_reviews');
$installations = get_installations_by_net_type($term->slug);
$galleries =  get_term_meta(get_queried_object_id(), 'net_type_gallery', true);
$media_gallery = get_term_meta($term->term_id, 'net_type_media_gallery', true);
$contact_page = get_page_by_slug('contact');
$term_id = get_queried_object_id();
$ids_string = get_term_meta($term_id, 'best_pics_gallery', true);
?>
    <main class="main">
        <section class="module product-single-module">
            <div class="mt-3">
                <div class="swiper productSingleSlider">
                    <div class="swiper-wrapper">
                    <?php if(!empty($swipers)):?>
                       <?php foreach($swipers as $swiper): ?>
                            <div class="swiper-slide">
                                <!-- <img src="<?php //echo $swiper['image']?>" alt="<?php //echo $swiper['text']?>"/> -->
                                  <img src="<?php echo $swiper['image']?>" alt="<?php echo $swiper['text']?>" class="w-full h-full object-cover" />
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                    </div>
                    <div class="swiper-pagination z-20"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="container m-auto">
                <div class="container-product mt-10 px-4 lg:px-0">
                    <div class="section-about mb-10 border-b pb-5 border-black/10">
                        <div>
                            <h2 class="text-2xl font-bold"><?php echo $term->description?></h2>
                            <p class="text-black/60 font-normal leading-relaxed"><?php echo get_term_meta(get_queried_object_id(),'custom_excerpt',true);?></p>
                        </div>


                        <div class="mt-3">
                            <h3 class="mb-[5px]"><?php get_field('contact_us_teaser',$contact_page->ID)?></h3>
                            <div class="mb-2 flex items-center">
                                <span class="mr-1">
                                    <svg class="w-5 h-5 fill-current">
                                        <use xlink:href="#icon-phone-outline"></use>
                                    </svg>
                                </span>
                                <span class="font-semibold"><?php echo get_field('phone',$contact_page->ID).' '?></span>
                                <span> or visit us:</span>
                            </div>
                            <div class="mb-2 flex items-center">
                                <span class="mr-1">
                                    <svg class="w-5 h-5 fill-current">
                                        <use xlink:href="#icon-pin-outline"></use>
                                    </svg>
                                </span>
                                <?php $bits = explode(",",get_field('location',$contact_page->ID));?>
                                <span class="font-semibold"><?php echo isset($bits[0]) ? esc_html($bits[0]) : ''; ?>,</span> 
                                <span><?php echo isset($bits[1]) ? esc_html(' '.$bits[1]) : ''; ?>, <?php echo isset($bits[2]) ? esc_html(' '.$bits[2]) : ''; ?></span>
                            </div>
                        </div>


                    </div>



                    <div class="section-reviews mt-5 mb-10 border-b pb-5 border-black/10">
                        <h3 class="text-lg font-semibold">Reviews</h3>
                        <div class="mt-3">
                            <div class="swiper clientReviews">
                                <div class="swiper-wrapper">
                                               <?php foreach ($reviews as $review):
                                        $image = get_post_thumbnail($review->ID);
                                        ?>
                                        <?php 
                                        $string = $review->post_title;
                                        $reviewer_initial = substr($string, 0, 1); 
                                        //var_dump($reviewer_initial);
                                    ?>

                                    <div class="swiper-slide">
                                        <div class="flesx items-stretch border border-black/10 px-6 py-5 mb-4">
                                            <div class="flex gap-4">
                                                <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]"><?php echo $reviewer_initial ?></div>
                                                <div>
                                                    <div>
                                                        <h4 class="font-quicksand capitalize text-lg font-bold"><?php echo $review->post_title?></h4>
                                                        <div class="flex items-center gap-2">
                                                            <small class="text-gray text-sm font-medium">Google review</small>
                                                            <div class="bg-secondary /20 px-2 rounded-md font-bold text-sm"><?php echo get_field('score',$review->ID);?></div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p><?php echo apply_filters("the_content",$review->post_content);?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  <?php endforeach;?>
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

                                <?php foreach($installations as $installation):
                                    $image = get_post_thumbnail($installation->ID);
                                    $galleryIds =  get_post_meta($installation->ID, '_installation_gallery', true);
                                
                                    ?>
                                <div class="border border-black/10">
                                    <div class="h-[365px]" id="showcase_gallery">
                                        <a href="<?php echo $image['image'][0]?>">
                                         <img src="<?php echo $image['image'][0]?>" class="w-full h-full" />
                                        </a>
                                        <?php if(is_array($galleryIds)):?>
                                            <?php foreach($galleryIds as $galleryId):
                                                $img = wp_get_attachment_image_src($galleryId, 'medium');
                                                ?>
                                                <a href="<?php echo esc_url($img[0]);?>">
                                                            <img src="<?php echo esc_url($img[0]);?>" alt="">
                                                </a>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                       
                                    </div>
                                    <div class="py-3 px-4 font-medium"><?php echo get_field('location',$installation->ID)?></div>
                                </div>
                                <?php endforeach;?>
                
                            </div>
                        </div>
                    </div>

                    
                     <div class="section-photos mt-5 mb-6">
                        <h3 class="text-lg font-semibold">Photos</h3>
                        <div class="mt-3">
                            <div class="masonry-grid">
                                <?php if(!empty($galleries)):?>
                                <?php foreach($galleries as $gallery):?>
                                    <div class="masonry-grid-item"> 
                                        <img class="h-auto max-w-full" src="<?php echo $gallery['image']?>" alt="<?php echo $gallery['title']?>">
                                    </div>
                                <?php endforeach;?>
                                <?php endif;?>
                    
                            </div>
                        </div>
                    </div>
                <?php if(!empty($media_gallery)):?>
                <?php foreach($media_gallery as $media):?>
                      <div class="section-video mt-5 mb-2 border-b pb-[70px] border-black/10">
                        <h3 class="text-lg font-semibold">Video</h3>
                        <div class="mt-3">
                            <div class="relative pb-6 lg:pb-0">
                                <a href="<?php echo $media['video_url']?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative block">
                                    <div class="absolute inset-0 bg-black/50 w-full h-[270px] md:h-[300px] lg:h-[500px] overflow-hidden"></div>
                                    <div class="absolute z-10 inset-0 flex justify-center items-center">
                                        <div class="bg-white text-red w-[80px] h-[80px] rounded-full flex justify-center items-center shadow-3xl hover:bg-primary hover:text-white cursor-pointer">
                                            <svg class="w-5 h-5 fill-current">
                                                <use xlink:href="#icon-play"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full h-[270px] md:h-[300px] lg:h-[500px] overflow-hidden">
                                        <img src="<?php echo $media['image']?>" alt="" class="w-full h-full object-cover">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
            <?php get_template_part("template-parts/home-page/module","location");?>
        </section>
    </main>
<?php
get_footer();
