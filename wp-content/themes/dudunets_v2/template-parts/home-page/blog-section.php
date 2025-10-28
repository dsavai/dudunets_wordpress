<?php
$reviews = get_custom_posts_by_slug('customer_reviews');
?>
<div class="module module--reviews bg-black/5">
    <div class="container mx-auto h-full px-4 lg:px-0">
        <div class="py-14 reveal fade-up reveal-transition">
            <div class="text-center mx-auto mb-10">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold mb-3">Trusted by Families Across Kenya</h2>
                    <p class="text-black/60">Delivering Quality, Safety, and Peace of Mind</p>
                </div>
            </div>
            <div class="mt-10">
                <div class="swiper clientReviews">
                    <div class="swiper-wrapper">

                        <?php foreach($reviews as $review):?>

                            <?php 
                                $string = $review->post_title;
                                $reviewer_initial = substr($string, 0, 1); 
                                //var_dump($reviewer_initial);
                            ?>
                            <div class="swiper-slide">
                                <div class="border border-black/10 px-6 py-5 mb-4">
                                    <div class="flex gap-4">
                                        <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]"><?php echo $reviewer_initial;?></div>
                                        <div>
                                            <div>
                                                <h4 class="font-quicksand capitalize text-lg font-bold"><?php echo $string; ?></h4>
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
    </div>
</div>