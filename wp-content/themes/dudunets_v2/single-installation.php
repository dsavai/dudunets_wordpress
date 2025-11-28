<?php get_header();
$post = get_queried_object();
$categories = get_the_terms($post->ID, 'net_type');
$image = get_post_thumbnail($post->ID);
$timestamp = strtotime($post->post_date); // Convert a date string to a timestamp
$date = date('F d, Y', $timestamp);
$avatar = get_user_avatar($post->post_author);
$tags = get_post_tags($post->ID);
$share_urls = get_share_links($post->ID);
?>

<main class="main">
    <section class="module module--blog-single-content">
        <div class="container mx-auto px-4 lg:px-0">
            <div class="lg:flex lg:gap-16">
                <section class="module module--blog-content basis-8/12 mb-4 lg:mb-16">
                    <section class="module module--blog-single-title">
                        <div class="container mx-auto">
                            <div class="my-14 flex flex-col justify-center">
                                <h1 class="text-3xl md:text-4xl lg:text-5xl font-400"><?php echo $post->post_title;?></h1>
                                <div class="mt-5 hidden md:block">
                                    <ul class="flex items-center gap-2">
                                        <li>
                                            <a href="<?php echo get_home_url()?>" class="text-sm font-semibold hover:text-primary hover:border-b hover:border-primary">Home</a>
                                        </li>
                                        <li>
                                            <svg class="w-3 h-3 fill-current">
                                                <use xlink:href="#icon-arrowright-alt"></use>
                                            </svg>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_category_permalink($categories[0]->term_id)?>" class="text-sm font-semibold hover:text-primary hover:border-b hover:border-primary"><?php echo $categories[0]->name ?></a>
                                        </li>
                                        <li>
                                            <svg class="w-3 h-3 fill-current">
                                                <use xlink:href="#icon-arrowright-alt"></use>
                                            </svg>
                                        </li>
                                        <li class="text-black/60 text-sm font-semibold"><?php echo $post->post_title;?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="module module--blog-single-banner">
                        <div class="container mx-auto">
                            <div class="w-full h-[350px] lg:h-[450px] overflow-hidden mb-4 lg:mb-10">
                                <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </section>
                    <div class="flex flex-col gap-2 md:flex-row md:gap-5 md:items-center mb-6">
                        <div>
                            <a href="#" class="flex items-center gap-3">
                                <div class="w-8 h-8 overflow-hidden rounded-full">
                                    <?php echo $avatar?>
                                </div>
                                <h5 class="font-bold text-[14px] hover:text-primary"><?php echo get_author_name_by_post_id($post->ID)?></h5>
                            </a>
                        </div>
                        <div class="flex items-center gap-2">
                            <span>
                                <svg class="w-5 h-5 fill-current">
                                    <use xlink:href="#icon-calendar"></use>
                                </svg>
                            </span>
                            <span class="text-black/60 text-sm font-medium"><?php echo $date?></span>
                        </div>
                        <div class="hidden md:flex md:items-center md:gap-3">
                            <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                            <span class="text-black/60 text-sm font-medium"><?php echo estimate_reading_time($post->ID); ?></span>
                        </div>
                    </div>
                    <div class="module-section-content">
                        <?php echo apply_filters("the_content", $post->post_content)?>
                        <?php get_template_part("template-parts/shared/tags","section",array("post_id" => $post->ID));?>
                        <?php get_template_part("template-parts/shared/share","section",array("post_id" => $post->ID));?>

                    </div>
                    <?php get_template_part("template-parts/posts/related","posts", array("post_id" => $post->ID));?>
                </section>
                <?php get_template_part("template-parts/posts/side","bar")?>
            </div>
        </div>
    </section>
    <?php get_template_part("template-parts/home-page/module-contact","us-form");?>
</main>



<?php get_footer(); ?>
