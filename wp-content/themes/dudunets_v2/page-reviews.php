<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section>
            <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
                <div class="my-8">
                    <div class="mb-10 flex flex-col justify-center items-center text-center">
                        <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-1">our reviews</h4>
                        <h2 class="mb-2 text-3xl font-400">Feedback from our clients</h2>
                        <p class="text-black/60 font-medium leading-relaxed"><?php echo apply_filters("the_content",$page->post_content)?></p>
                    </div>
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
                        <div class="border border-black/10 px-6 py-5 mb-4">
                            <div class="flex gap-4">
                                <div class="hidden md:flex justify-center items-center text-lg font-bold bg-secondary text-white relative top-1 min-w-[40px] h-[40px] rounded-[40px]"><?php echo $reviewer_initial ?></div>
                                <div>
                                    <div>
                                        <h4 class="font-quicksand capitalize text-lg font-bold"><?php echo $review->post_title?></h4>
                                        <div class="flex items-center gap-2">
                                            <small class="text-gray text-sm font-medium">Google review</small>
                                            <div class="bg-primary/20 px-2 rounded-md font-bold text-sm"><?php echo get_field('score',$review->ID);?></div>
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
        </section>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>
<?php
get_footer();
