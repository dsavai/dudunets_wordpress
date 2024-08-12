<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section class="module module--banner">
            <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo $image['image'][0]?>);">
                <div class="bg-black/40 absolute inset-0"></div>
                <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                    <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="text-sm font-semibold uppercase">Our Reviews</span>
                    </div>
                    <h1 class="text-6xl font-bold mt-4">Customer reviews</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto h-full">
                <div class="py-16">
                    <div class="mb-10 w-5/12">
                        <h4 class="text-sm uppercase text-primary font-bold mb-2">our reviews</h4>
                        <h2 class="text-3xl font-bold">Feedback from our clients</h2>
                        <p class="text-sm text-black/60"><?php echo apply_filters("the_content",$page->post_content)?></p>
                    </div>
                    <?php
                    $reviews = get_custom_posts_by_slug('customer_reviews');
                    ?>

                    <?php foreach ($reviews as $review):
                        $image = get_post_thumbnail($review->ID);
                        ?>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="w-[500px] h-[500px] relative">
                                <div class="w-full h-full overflow-hidden rounded-lg ">
                                    <img src="<?php echo $image['image'][0]?>" class="w-full h-full object-cover" />
                                </div>
                                <div class="flex justify-center items-center flex-col w-[183px] h-[209px] bg-white absolute bottom-10 right-[-60px] z-10 rounded-lg shadow-xl">
                                    <h4 class="text-6xl font-bold bg-gradient-to-r from-primary to-secondary inline-block text-transparent bg-clip-text"><?php echo get_field('score',$review->ID);?></h4>
                                    <p class="font-bold">Customer review</p>
                                </div>
                            </div>
                            <div>
                                <p><?php echo apply_filters("the_content",$review->post_content);?></p>
                                <h4><?php echo $review->post_title?></h4>
                                <small>Google review</small>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","clients");?>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>
<?php
get_footer();
