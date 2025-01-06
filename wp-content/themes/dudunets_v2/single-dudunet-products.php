<?php
get_header();
$post = get_queried_object();
$categories = get_post_terms_in_net_type($post->ID);
$image = get_post_thumbnail($post->ID);
$timestamp = strtotime($post->post_date); // Convert a date string to a timestamp
$date = date('F d, Y', $timestamp);
$avatar = get_user_avatar($post->post_author);
$tags = get_post_tags($post->ID);
$share_urls = get_share_links($post->ID);
$term = $categories[0];
?>
    <main class="main">
        <section class="module module--blog-single-title">
            <div class="container mx-auto">
                <div class="my-10 lg:my-14 flex flex-col justify-center text-center px-4 lg:px-0">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-400"><?php echo $post->post_title?></h1>
                    <div class="mt-5 hidden md:block">
                        <ul class="flex justify-center items-center gap-2">
                            <li>
                                <a href="<?php echo get_home_url()?>" class="text-sm font-semibold hover:text-primary hover:border-b hover:border-primary">Home</a>
                            </li>
                            <li>
                                <svg class="w-3 h-3 fill-current">
                                    <use xlink:href="#icon-arrowright-alt"></use>
                                </svg>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_term_link($term))?>" class="text-sm font-semibold hover:text-primary hover:border-b hover:border-primary"><?php echo $term->name?></a>
                            </li>
                            <li>
                                <svg class="w-3 h-3 fill-current">
                                    <use xlink:href="#icon-arrowright-alt"></use>
                                </svg>
                            </li>
                            <li class="text-black/60 text-sm font-semibold"><?php echo $post->post_title?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="module module--blog-single-banner">
            <div class="container mx-auto">
                <div class="w-full h-[450px] overflow-hidden mb-10">
                    <img src="<?php echo $image['image'][0]?>" alt="" class="w-full h-full object-cover" />
                </div>
            </div>
        </section>
        <section class="module module--blog-single-content">
            <div class="container mx-auto">
                <div class="lg:flex lg:gap-16 px-4 lg:px-0">
                    <section class="module module--blog-content basis-8/12 mb-4 lg:mb-16">
                        <div class="blog-single-contents">
                           <?php echo apply_filters("the_content",$post->post_content)?>
                            <?php get_template_part("template-parts/shared/tags","section",array("post_id" => $post->ID));?>
                           <?php get_template_part("template-parts/shared/share","section",array("post_id" => $post->ID));?>
                        </div>
                        <?php get_template_part("template-parts/products/related","products",array("post_id" => $post->ID,'taxonomy' =>$term));?>

                    </section>
                    <?php get_template_part("template-parts/posts/side","bar")?>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>
<?php
get_footer();
