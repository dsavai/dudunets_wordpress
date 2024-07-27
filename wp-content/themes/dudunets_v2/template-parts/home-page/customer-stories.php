<?php
$category_slug = 'customer-stories'; // You can also use the category ID instead of slug

// Set up the custom query arguments
$args = array(
    'category_name' => $category_slug, // Fetch posts from the 'news' category
    'posts_per_page' => 1,            // Number of posts to display
    'post_status' => 'publish'         // Only show published posts
);

// Create a new instance of WP_Query
$query = new WP_Query($args);
if ($query->have_posts()){
    $post = $query->posts[0];
    $categories = get_the_category($post->ID);
    $category = $categories[0];
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $timestamp = strtotime($post->post_date); // Convert a date string to a timestamp
    $date = date('F d, Y', $timestamp);
    $category_link = get_category_link($category->term_id);
}
?>
<?php if (!empty($post)):?>
<div class="flex gap-[30px] mt-[40px]">
    <div class="flex-1 border-[1px] border-gray-600 h-[350px] overflow-hidden">
        <div class="flex justify-between h-full">
            <div class="py-[30px] px-[30px] w-[400px]">
                <div class="mb-[20px]">
                    <div class="text-[14px] font-semibold border-primary-900 border-[1px] rounded-full px-[15px] pt-[3px] pb-[4px] mr-[10px] inline-block"><?php echo $category->name?></div>
                    <div class="flex mt-[10px]">
                        <span class="text-[15px] text-gray-500"><?php echo $date?></span>
                        <span class="bg-gray-500 h-[17px] w-[1px] mx-[10px]"></span>
                        <span class="text-[15px] text-gray-500"><?php echo estimate_reading_time($post->ID); ?></span>
                    </div>
                </div>
                <h4 class="text-[17px] font-semibold mt-[10px] mb-[15px]"><?php echo $post->post_title?></h4>
                <p class="text-[16px] text-gray-500"><?php echo $post->post_excerpt?></p>
            </div>
            <div class="h-full">
                <img src="<?php echo $image[0]?>" alt="" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>
    <div class="flex flex-col w-[400px] justify-center">
        <div class=" w-[300px]">
            <h3 class="text-[24px] font-bold">Current tends and success stories on our blog</h3>
            <a href="<?php echo esc_url($category_link); ?>" class="bg-primary-900 inline-block mt-[20px] text-white font-bold border-secondary border-2 rounded-full pt-[8px] pb-[10px] px-[50px] transition delay-200 ease-in-out hover:bg-secondary hover:text-primary-900">See more articles</a>
        </div>
    </div>
</div>
<?php endif;?>
<?php
wp_reset_postdata();
