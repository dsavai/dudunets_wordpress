<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section>
            <div class="my-8">
                <div class="container mx-auto">
                    <div class="px-4 lg:px-0 pt-4 pb-8 lg:pt-8 lg:pb-8">
                        <div class="max-w-4xl">
                            <h4 class="font-medium text-secondary">Our reviews</h4>
                            <h2 class="mb-2 text-2xl font-bold">Trusted by Families Across Kenya</h2>
                            <p class="text-black/60 font-medium leading-relaxed"><?php //echo apply_filters("the_content",$page->post_content)?></p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F8F8F8] py-2 lg:pb-2 lg:pt-8">
                    <div class="px-4 lg:px-0 pt-8 pb-8 lg:pt-0 lg:pb-14">
                        <div class="container mx-auto">
                            <div class="lg:flex flex-col lg:flex-row justify-between items-center bg-white py-4 px-5 shadow-sm mb-4 lg:mb-10 mx-auto">
                                <div class="flex items-center">
                                    <div class="w-20 h-5 rounded-full overflow-hidden mr-5 flex-shrink-0">
                                        <img src="<?php echo get_template_directory_uri()?>/dist/images/google_logo.svg" alt="Google Logo" class="w-full h-full object-contain" />
                                    </div>
                                    <div class="font-medium">Excellent</div>
                                    <div class="w-32 h-5 mx-3 hidden lg:block">
                                        <img src="<?php echo get_template_directory_uri()?>/dist/images/stars.svg" alt="stars" class="w-full h-full object-contain" />
                                    </div>
                                    <div class="hidden lg:block">4.9</div>
                                    <div class="bg-black/10 h-[15px] w-[1px] mx-3"></div>
                                    <div class="font-medium mx-1">100</div>
                                    <div class="font-medium mr-1">reviews</div>
                                </div>
                                <div class="mt-4 lg:mt-0">
                                    <a href="https://share.google/1HC9lFjZErvGyF3Gw" target="_blank" class="py-2 px-3 ml-auto bg-secondary text-sm font-semibold text-white hover:text-primary transition-all duration-500 flex items-center justify-center">
                                        <span>Write review</span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid grid-col-1 md:grid-cols-2 gap-2 md:gap-4">
                                <?php
                                $reviews = get_custom_posts_by_slug('customer_reviews');
                                ?>
                                <?php foreach ($reviews as $review):
                                    $image = get_post_thumbnail($review->ID);
                                    ?>
                                    <?php 
                                    $string = $review->post_title;
                                    $reviewer_initial = substr($string, 0, 1); 
                                    //var_dump($reviewer_initial);
                                    ?>
                                    <div class="bg-white border border-black/10 px-6 py-5 mb-1">
                                        <div class="flex gap-4">
                                            <div class="hidden md:flex justify-center items-center text-lg font-bold bg-primary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]"><?php echo $reviewer_initial ?></div>
                                            <div>
                                                <div>
                                                    <h4 class="font-quicksand capitalize text-lg font-bold"><?php echo $review->post_title?></h4>
                                                    <div class="flex items-center gap-2">
                                                        <small class="text-gray text-sm font-medium">Google review</small>
                                                        <div class="bg-secondary/20 text-primary px-2 rounded-md font-bold text-sm"><?php echo get_field('score',$review->ID);?></div>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <p><?php echo apply_filters("the_content",$review->post_content);?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews-contact-container">
            <?php get_template_part("template-parts/home-page/module-contact","us-form");?>
        </section>
    </main>
<?php
get_footer();
