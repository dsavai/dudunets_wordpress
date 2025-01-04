<?php
$post_id = 67;
$post = get_post($post_id);
$exclude_category_id = 4;

$args = array(
    'numberposts' => 3, // Number of posts to retrieve
    'post_type'   => 'post', // Post type to retrieve
    'orderby'     => 'date', // Order by date
    'order'       => 'DESC', // Order in descending order
    //'category__not_in' => array($exclude_category_id),
);

// Retrieve the posts
$posts = get_posts($args);

?>

<section class="module module--blog">
    <div class="bg-gray-light px-4 lg:px-0">
        <div class="container mx-auto">
            <div class="py-16">
                <div class="mb-10">
                    <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-3">LATEST BLOG</h4>
                    <h2 class="text-3xl font-400">Our news & articles</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php if(!empty($posts)):?>
                    <?php foreach ($posts as $post):
                    $categories = get_the_category($post->ID);
                   // $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                        $image = get_post_thumbnail($post->ID);
                    $timestamp = strtotime($post->post_date); // Convert a date string to a timestamp
                    $date = date('F d, Y', $timestamp);
                    $avatar = get_user_avatar($post->post_author);
                    ?>

                            <div class="bg-white border border-black/10 overflow-hidden">
                                <div class="h-[250px] overflow-hidden">
                                    <a href="<?php echo get_the_permalink($post->ID)?>"class="block w-full h-full ease-in-out duration-700 hover:scale-125">
                                        <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                                    </a>
                                </div>
                                <div class="p-8">
                                    <div class="mb-2">
                                        <a href="<?php echo get_category_permalink($categories[0]->term_id)?>" class="inline-block uppercase text-[13px] text-gray hover:text-primary font-bold hover:underline underline-offset-4 decoration-2"><?php echo $categories[0]->name ?></a>
                                    </div>
                                    <div class="mb-5">
                                        <h3 class="text-black text-xl font-quicksand font-semibold line-clamp-2">
                                            <a href="<?php echo get_the_permalink($post->ID)?>" class="text-black cursor-pointer hover:border-b"><?php echo $post->post_title;?></a>
                                        </h3>
                                    </div>
                                    <hr class="border-black/10" />
                                    <div class="mt-5 flex justify-between items-center">
                                        <a href="#" class="flex items-center gap-3">
                                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                                <?php echo $avatar?>
                                            </div>
                                            <h5 class="font-bold text-[14px] hover:text-primary"><?php echo get_author_name_by_post_id($post->ID)?></h5>
                                        </a>
                                        <div class="lg:flex items-center gap-3 hidden">
                                            <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                                            <span class="text-black/60 text-sm font-medium"><?php echo estimate_reading_time($post->ID); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php endforeach;?>
                    <?php endif;?>
                </div>
                <div class="mt-12 flex justify-center">
                    <a href="<?php echo get_page_url_by_slug('blog')?>" class="flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                        <span>View more</span>
                        <span>
                            <svg class="w-8 h-8 fill-current">
                                <use xlink:href="#icon-menudots"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
