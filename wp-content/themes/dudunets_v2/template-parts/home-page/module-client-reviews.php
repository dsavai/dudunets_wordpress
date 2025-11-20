<?php
$post_type = 'customer_reviews';
$reviews = get_custom_posts_by_slug($post_type);
?>
<div class="module module--reviews bg-black/5">
    <div class="container mx-auto h-full px-4 lg:px-0">
        <div class="py-14 reveal fade-up reveal-transition">
            <div class="text-center mx-auto mb-10">
                <div class="mb-10">
                    <?php if(is_user_logged_in()):?>
                        <small><a href="<?php echo admin_url( 'edit.php?post_type='.$post_type );?>" target="_blank">Edit Section</a></small>
                    <?php endif;?>
                    <h2 class="text-3xl font-bold mb-3">Trusted by Families Across Kenya</h2>
                    <p class="text-black/60">Delivering Quality, Safety, and Peace of Mind</p>
                </div>
            </div>
            <div class="lg:flex flex-col lg:flex-row justify-between items-center bg-white py-4 px-5 shadow-sm mb-4 lg:mb-10 mx-auto" bis_skin_checked="1">
                <div class="flex items-center" bis_skin_checked="1">
                    <div class="w-20 h-5 rounded-full overflow-hidden mr-5 flex-shrink-0" bis_skin_checked="1">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/google_logo.svg" alt="Google Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="font-medium" bis_skin_checked="1">Excellent</div>
                    <div class="w-32 h-5 mx-3 hidden lg:block" bis_skin_checked="1">
                        <img src="<?php echo get_template_directory_uri()?>/dist/images/stars.svg" alt="stars" class="w-full h-full object-contain">
                    </div>
                    <div class="hidden lg:block" bis_skin_checked="1">4.9</div>
                    <div class="bg-black/10 h-[15px] w-[1px] mx-3" bis_skin_checked="1"></div>
                    <div class="font-medium mx-1" bis_skin_checked="1">100</div>
                    <div class="font-medium mr-1" bis_skin_checked="1">reviews</div>
                </div>
                <div class="mt-4 lg:mt-0" bis_skin_checked="1">
                    <a href="https://share.google/1HC9lFjZErvGyF3Gw" target="_blank" class="py-2 px-3 ml-auto bg-secondary text-sm font-semibold text-white hover:text-primary transition-all duration-500 flex items-center justify-center">
                        <span>Write review</span>
                    </a>
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
                                <div class="border border-black/10 px-6 py-5 mb-4 h-[170px]">
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
                    </div>
                    <div class="swiper-button-next w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:after:font-bold"></div>
                    <div class="swiper-button-prev w-6 h-6 bg-white rounded-full p-6 after:!text-[18px] after:text-primary after:font-bold"></div>
                    <div class="swiper-pagination z-20"></div>
                </div>
            </div>
        </div>
    </div>
</div>