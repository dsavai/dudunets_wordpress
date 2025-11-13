<?php
/**
 * dudunets functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dudunets
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

require 'includes/walkers/walker.php';
require 'includes/walkers/primary_menu_walker.php';
require 'includes/walkers/footer_walker.php';
require 'includes/walkers/bottom_bar_nav_walker.php';
require 'includes/walkers/sitemap_walker.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dudunets_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on dudunets, use a find and replace
        * to change 'dudunets' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'dudunets', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'main-menu' => __( 'Main Menu' ),
            'footer-menu-1' => __( 'Footer Menu 1' ),
            'footer-menu-2' => __( 'Footer Menu 2' ),
            'footer-menu-3' => __( 'Footer Menu 3' ),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'dudunets_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'dudunets_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dudunets_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'dudunets_content_width', 640 );
}
add_action( 'after_setup_theme', 'dudunets_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dudunets_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'dudunets' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'dudunets' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'dudunets_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dudunets_scripts() {
    //wp_enqueue_style( 'dudunets-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_style_add_data( 'dudunets-style', 'rtl', 'replace' );
    // wp_enqueue_style('dudunets-css',get_template_directory_uri().'/css/dudunets.css',array(),'1.0.0');
    wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
wp_enqueue_style( 'plugins', get_template_directory_uri() . '/dist/plugins.css', array() );

    wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'additional-methods', get_template_directory_uri() . '/js/additional-methods.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );

    wp_localize_script(
        'main',
        'script',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'dudunets_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

function dudunets_custom_body_class($classes){
    $classes[] = 'font-nunitosans font-[400] text-gray-dark';
    return $classes;
}


add_filter('body_class','dudunets_custom_body_class');

function reading_time($id){
    return do_shortcode('[rt_reading_time label="" postfix="minute read" post_id="'.$id.'"]');
}

add_post_type_support( 'page', 'excerpt' );

function estimate_reading_time($post_id) {
    // Get the content of the post
    $content = get_post_field('post_content', $post_id);

    // Strip tags to avoid counting HTML tags, shortcodes, etc.
    $content = wp_strip_all_tags($content);

    // Count the number of words
    $word_count = str_word_count($content);

    // Define the average reading speed (words per minute)
    $average_reading_speed = 200;

    // Calculate the reading time in minutes
    $reading_time = ceil($word_count / $average_reading_speed);

    if ($reading_time < 1){
        return "<  1 minute read";
    }

    return $reading_time . ' minute' . ($reading_time > 1 ? 's' : '').' read';
}


function get_custom_posts_by_slug($post_type,$order='DESC',$limit = -1) {
    // Set up the arguments for the WP_Query
    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'numberposts' => $limit,
        'order'       => $order
    );

    // Execute the query
    $query = new WP_Query($args);

    // Check if we have posts
    if ($query->have_posts()) {
        // Get the post
        $query->the_post();
        $post = $query->post;
        // Reset the post data
        wp_reset_postdata();
        return $query->posts;
    } else {
        return null;
    }
}

function get_post_thumbnail($post_id){
    $thumbnail_id = get_post_thumbnail_id($post_id);
// Get the image attributes
    $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );

    return array('image' => $image, 'alt' => $thumbnail_alt);

}

function get_button_links($post_id){
    $links = get_field('links',$post_id);
    if (!empty($links)){
        $links_array = explode("|",$links);
        return $links_array;
    }
    return null;
}

function get_extra_links($post_id){
    $links = get_field('extra_links',$post_id);
    if (!empty($links)){
        $links_array = explode("|",$links);
        return $links_array;
    }
    return null;
}

function get_page_by_slug($slug) {
    // Use get_page_by_path to retrieve the page
    $page = get_page_by_path($slug);

    // Check if the page exists
    if ($page) {
        return $page;
    } else {
        return null;
    }
}

function get_post_by_id($post_id) {
    // Use get_post to retrieve the post by its ID
    $post = get_post($post_id);

    // Check if the post exists
    if ($post) {
        return $post;
    } else {
        return null;
    }
}

function submit_page_lead() {

    if (isset($_POST['full_name'])  && isset($_POST['email']) ) {
        $lead_name = sanitize_text_field($_POST['full_name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        $form = sanitize_text_field($_POST['form']);
        $mobile = sanitize_text_field($_POST['mobile']);

        $recaptchaResponse = isset($_POST['recaptchaResponse']) ? $_POST['recaptchaResponse'] : "";


        $response = create_feedback_post($form,$lead_name." : ".$mobile." : ".$email,date("Y-M-d H:i:s A"),$message,$recaptchaResponse);
        print_r($response);
    } else {
        echo 'Missing data';
    }

    wp_die(); // This is required to terminate immediately and return a proper response
}
add_action('wp_ajax_submit_page_lead', 'submit_page_lead'); // If called from admin panel
add_action('wp_ajax_nopriv_submit_page_lead', 'submit_page_lead'); // If called from elsewhere


//front page form
function submit_front_page_lead() {
    $message = " No Message ";
    if (isset($_POST['full_name'])  && isset($_POST['email']) ) {
        $lead_name = sanitize_text_field($_POST['full_name']);
        $email = sanitize_email($_POST['email']);
        $location = sanitize_text_field($_POST['location']);
        $mobile = sanitize_text_field($_POST['mobile']);
        $service = sanitize_text_field($_POST['service']);
        $area = sanitize_text_field($_POST['area']);
        if (isset($_POST['message'])){
            $message = sanitize_text_field($_POST['message']);
        }

        $recaptchaResponse = isset($_POST['recaptchaResponse']) ? $_POST['recaptchaResponse'] : "";


        $response = create_feedback_post("Front Page Lead Form",$lead_name." : ".$mobile." : ".$email,date("Y-M-d H:i:s A"),$message,$recaptchaResponse,false);
        print_r($response);
    } else {
        echo 'Missing data';
    }

    wp_die(); // This is required to terminate immediately and return a proper response
}
add_action('wp_ajax_submit_front_page_lead', 'submit_front_page_lead'); // If called from admin panel
add_action('wp_ajax_nopriv_submit_front_page_lead', 'submit_front_page_lead'); // If called from elsewhere






function replace_localhost_urls($content) {
    // Define the localhost URL and the site URL
    $localhost_url = 'http://localhost/dudunets-site/';
    $site_url = site_url('/');

    // Replace localhost URL with site URL
    $content = str_replace($localhost_url, $site_url, $content);

    return $content;
}

// Apply the filter to the content
add_filter('the_content', 'replace_localhost_urls');
function get_custom_post_type_by_slug($slug, $post_type) {
    // Set up the query arguments
    $args = array(
        'name'        => $slug,
        'post_type'   => $post_type,
        'post_status' => 'publish',
        'numberposts' => 1
    );

    // Perform the query
    $post = get_posts($args);

    // Check if the post exists
    if (!empty($post)) {
        return $post[0]; // Return the post object
    } else {
        return null; // Return null if no post is found
    }
}

function get_page_url_by_slug($slug) {
    // Query for the page by its slug
    $page = get_page_by_path($slug);

    // Check if the page exists
    if ($page) {
        // Return the URL of the page
        return get_permalink($page->ID);
    } else {
        // Return false if the page does not exist
        return false;
    }
}

function get_user_avatar($user_id){
    $size = 35; // Size in pixels
    $default = 'mystery'; // Default avatar if no Gravatar is available (e.g., 'mystery', 'blank', 'gravatar_default')
    $alt = 'User Avatar'; // Alt text for the image

    return get_avatar($user_id, $size, $default, $alt);

}

function get_author_name_by_post_id($post_id) {
    $author_id = get_post_field('post_author', $post_id);
    return get_the_author_meta('display_name', $author_id);
}

function get_category_permalink($term)
{
    $category = null;
    if (is_int($term)) {
        $category = get_category($term);
    } elseif (is_string($term)) {
        $category = get_category_by_slug($term);
    }

    if ($category) {
        return get_category_link($category->term_id);
    }

    return '#';
}

function get_post_tags($post_id){
    return get_the_tags($post_id);

}

function get_share_links($post_id){
    $post_url = get_permalink($post_id); // Get the permalink of the post
    $post_title = get_the_title($post_id); // Get the title of the post

// Generate share URLs
    $facebook_share_url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($post_url);
    $twitter_share_url = 'https://twitter.com/intent/tweet?url=' . urlencode($post_url) . '&text=' . urlencode($post_title);
    $whatsapp_share_url = 'https://wa.me/?text=' . urlencode($post_url);
    $email_share_url = 'mailto:?subject=' . urlencode($post_title) . '&body=' . urlencode($post_url);

    return array(
        "facebook" => $facebook_share_url,
        "twitter" => $twitter_share_url,
        "whatsapp" => $whatsapp_share_url,
        "email" => $email_share_url
    );
}

function get_related_posts($post_id, $number_of_posts = 3) {
    $related_posts = [];

    // Get tags and categories of the current post
    $tags = wp_get_post_tags($post_id, ['fields' => 'ids']);
    $categories = wp_get_post_categories($post_id, ['fields' => 'ids']);

    if ($tags || $categories) {
        // Build a query to get related posts
        $args = [
            'post__not_in' => [$post_id], // Exclude the current post
            'posts_per_page' => $number_of_posts, // Number of related posts to display
            'ignore_sticky_posts' => 1,
            'orderby' => 'rand', // Random order
            'tax_query' => [
                'relation' => 'OR',
                [
                    'taxonomy' => 'post_tag',
                    'field' => 'term_id',
                    'terms' => $tags,
                    'operator' => 'IN',
                ],
                [
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $categories,
                    'operator' => 'IN',
                ],
            ],
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {

                $query->the_post();

                $related_posts[] = get_post();
            }
        }

        wp_reset_postdata();
    }

    return $related_posts;
}

function create_net_types_taxonomy() {
    // Labels for the custom taxonomy
    $labels = array(
        'name'              => _x( 'Net Types', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Net Type', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Net Types', 'textdomain' ),
        'all_items'         => __( 'All Net Types', 'textdomain' ),
        'parent_item'       => __( 'Parent Net Type', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Net Type:', 'textdomain' ),
        'edit_item'         => __( 'Edit Net Type', 'textdomain' ),
        'update_item'       => __( 'Update Net Type', 'textdomain' ),
        'add_new_item'      => __( 'Add New Net Type', 'textdomain' ),
        'new_item_name'     => __( 'New Net Type Name', 'textdomain' ),
        'menu_name'         => __( 'Net Types', 'textdomain' ),
    );

    // Arguments for the custom taxonomy
    $args = array(
        'hierarchical'      => true, // Set to true for categories, false for tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'net-type' ),
    );

    // Register the custom taxonomy
    register_taxonomy( 'net_type', array( 'dudunet-types' ), $args );
}

// Hook into the init action and call the function when WordPress initializes
add_action( 'init', 'create_net_types_taxonomy', 0 );

// Add image upload field to the taxonomy term add/edit form
function add_net_type_image_field($term) {
    // Get the term ID
    $term_id = $term->term_id;
    // Retrieve the existing image ID
    $image_id = get_term_meta($term_id, 'net_type_image', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="net_type_image"><?php _e('Featured Image', 'textdomain'); ?></label>
        </th>
        <td>
            <input type="hidden" id="net_type_image" name="net_type_image" value="<?php echo esc_attr($image_id); ?>" />
            <div id="net_type_image_preview">
                <?php if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" style="max-width: 150px; max-height: 150px;" />
                <?php endif; ?>
            </div>
            <button type="button" class="button" id="upload_net_type_image_button"><?php _e('Upload/Select Image', 'textdomain'); ?></button>
            <button type="button" class="button" id="remove_net_type_image_button"><?php _e('Remove Image', 'textdomain'); ?></button>
        </td>
    </tr>
    <?php
}
add_action('net_type_add_form_fields', 'add_net_type_image_field', 10, 2);
add_action('net_type_edit_form_fields', 'add_net_type_image_field', 10, 2);

// Enqueue the media uploader script
function enqueue_media_uploader() {
    wp_enqueue_media();
    wp_enqueue_script('net-type-media-uploader', get_template_directory_uri() . '/js/net-type-media-uploader.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader');

// Save the image ID as term meta
function save_net_type_image($term_id) {
    if (isset($_POST['net_type_image']) && !empty($_POST['net_type_image'])) {
        update_term_meta($term_id, 'net_type_image', intval($_POST['net_type_image']));
    } else {
        delete_term_meta($term_id, 'net_type_image');
    }
}
add_action('created_net_type', 'save_net_type_image', 10, 2);
add_action('edited_net_type', 'save_net_type_image', 10, 2);


// Function to get and display all 'Net Types' terms
function get_net_types($order)
{
    // Get all terms from the 'net_type' taxonomy
    $terms = get_terms(array(
        'taxonomy' => 'net_type',
        'hide_empty' => false, // Set to true to hide terms with no posts
        'order' => $order
    ));

    if (!empty($terms) && !is_wp_error($terms)) {
        return $terms;
    }
    return null;

    // Check if there are any terms
//    if (!empty($terms) && !is_wp_error($terms)) {
//        echo '<ul>';
//        // Loop through each term
//        foreach ($terms as $term) {
//            echo '<li>';
//            // Display the term name with a link to its archive page
//            echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
//            echo '</li>';
//        }
//        echo '</ul>';
//    } else {
//        echo 'No Net Types found.';
//    }
}

function get_net_type_image_url($term_id) {
    $image_id = get_term_meta($term_id, 'net_type_image', true);
    if ($image_id) {
        return wp_get_attachment_url($image_id);
    }
    return '';
}


// Function to get and display custom post types 'dudunet-types' with the term 'Window Nets' in 'net_type' taxonomy
function get_dudunet_products($slug)
{
    // Define the term and taxonomy
    $term_slug = $slug; // Replace with the actual slug of the term
    $taxonomy = 'net_type';
    $post_type = 'dudunet-products';

    // Set up the query arguments
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term_slug,
            ),
        ),
        'order' => 'ASC',
    );

    // Perform the query
    $query = new WP_Query($args);

    // Check if any posts were found
    if ($query->have_posts()) {

        return $query->posts;
    } else {
        return null;
    }


}

function get_post_terms_in_net_type($post_id) {
    // Define the taxonomy
    $taxonomy = 'net_type';

    // Get the terms for the post in the specified taxonomy
    $terms = get_the_terms($post_id, $taxonomy);

    // Check if terms were found
    if ($terms && !is_wp_error($terms)) {
        return $terms;
    } else {
        return null;
    }
}

function get_related_dudunets($id,$term_slug,$taxonomy){
    $args = array(
        'post_type' => 'dudunet-products',
        'posts_per_page' => 2,
        'post__not_in' => array($id), // Exclude the provided ID
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy, // Custom taxonomy
                'field' => 'slug',
                'terms' => $term_slug, // Specific term slug
            ),
        ),
    );


    // Perform the query
    $query = new WP_Query($args);

    // Check if any posts were found
    if ($query->have_posts()) {

        return $query->posts;
    } else {
        return null;
    }
}

function get_featured_background_image(){
    $upload_dir = wp_get_upload_dir();
    $image_url = $upload_dir['baseurl'] . '/2024/07/about_feature_banner.jpg';
    return $image_url;
}

function load_more_posts() {
    $paged = $_POST['page'];
    $paged = 1;
    $query = new WP_Query(array(
        'post_type' => 'post',
        'paged' => $paged,
        'posts_per_page' => 6
    ));

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="bg-white border border-black/10 overflow-hidden">
                <div class="h-[250px] overflow-hidden">
                    <a href="<?php the_permalink(); ?>" class="block w-full h-full ease-in-out duration-700 hover:scale-125">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'w-full h-full object-cover'));
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog_thumbnail_img.jpg" alt="<?php the_title(); ?>" class="w-full h-full object-cover" />
                        <?php } ?>
                    </a>
                </div>
                <div class="p-8">
                    <div class="mb-2">
                        <?php the_category(', '); ?>
                    </div>
                    <div class="mb-5">
                        <h3 class="text-black text-xl font-quicksand font-semibold line-clamp-2">
                            <a href="<?php the_permalink(); ?>" class="text-black cursor-pointer hover:border-b"><?php the_title(); ?></a>
                        </h3>
                    </div>
                    <hr class="border-black/10" />
                    <div class="mt-5 flex justify-between items-center">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="flex items-center gap-3">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                            </div>
                            <h5 class="font-bold text-[14px] hover:text-primary"><?php the_author(); ?></h5>
                        </a>
                        <div class="lg:flex items-center gap-3 hidden">
                            <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                            <span class="text-black/60 text-sm font-medium w-6/12 truncate"><?php echo estimate_reading_time(get_the_ID()); ?> min read</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');


function add_faqs_meta_box() {
    $specific_page_id = 248; // Replace with your specific page ID
    $custom_post_types = array(); // Replace with your custom post types

    $current_post_type = get_post_type();
    $current_post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : '');

    if (in_array($current_post_type, $custom_post_types) || $current_post_id == $specific_page_id) {
        add_meta_box(
            'faqs_meta_box',
            'FAQs',
            'display_faqs_meta_box',
            $current_post_type == 'page' ? 'page' : $current_post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_faqs_meta_box');


function display_faqs_meta_box($post) {
    $faqs_data = get_post_meta($post->ID, 'faqs', true);
    wp_nonce_field('faqs_nonce', 'faqs_nonce_field');
    ?>
    <div id="faqs-field">
        <?php if ($faqs_data) : ?>
            <?php foreach ($faqs_data as $index => $data) : ?>
                <div class="faqs-row">
                    <input type="text" name="faqs[<?php echo $index; ?>][field_name]" value="<?php echo esc_attr($data['field_name']); ?>" placeholder="Field Name" />
                    <textarea name="faqs[<?php echo $index; ?>][value]" placeholder="Value"><?php echo esc_textarea($data['value']); ?></textarea>
                    <a href="#" class="remove-row">Remove</a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="faqs-row">
                <input type="text" name="faqs[0][field_name]" value="" placeholder="Field Name" />
                <textarea name="faqs[0][value]" placeholder="Value"></textarea>
                <a href="#" class="remove-row">Remove</a>
            </div>
        <?php endif; ?>
        <a href="#" class="add-row">Add Row</a>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#faqs-field').on('click', '.add-row', function(e) {
                e.preventDefault();
                var row = $('.faqs-row:last').clone();
                var rowCount = $('.faqs-row').length;
                row.find('input, textarea').each(function() {
                    var name = $(this).attr('name');
                    var nameParts = name.match(/\[(\d+)\]/);
                    if (nameParts) {
                        var newName = name.replace(nameParts[1], rowCount);
                        $(this).attr('name', newName).val('');
                    }
                });
                row.insertAfter('.faqs-row:last');
            });

            $('#faqs-field').on('click', '.remove-row', function(e) {
                e.preventDefault();
                if ($('.faqs-row').length > 1) {
                    $(this).closest('.faqs-row').remove();
                }
            });
        });
    </script>
    <?php
}


function save_faqs_meta_box($post_id) {
    if (!isset($_POST['faqs_nonce_field']) || !wp_verify_nonce($_POST['faqs_nonce_field'], 'faqs_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['faqs'])) {
        $faqs_data = array_values($_POST['faqs']);
        update_post_meta($post_id, 'faqs', $faqs_data);
    }
}
add_action('save_post', 'save_faqs_meta_box');


// Values metabox for company page

function add_values_meta_box() {
    $specific_page_id = 387; // Replace with your specific page ID
    $custom_post_types = array(); // Replace with your custom post types

    $current_post_type = get_post_type();
    $current_post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : '');

    if (in_array($current_post_type, $custom_post_types) || $current_post_id == $specific_page_id) {
        add_meta_box(
            'values_meta_box',
            'Values',
            'display_values_meta_box',
            $current_post_type == 'page' ? 'page' : $current_post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_values_meta_box');



function display_values_meta_box($post) {
    $values_data = get_post_meta($post->ID, 'values', true);
    wp_nonce_field('values_nonce', 'values_nonce_field');
    ?>
    <div id="values-field">
        <?php if ($values_data) : ?>
            <?php foreach ($values_data as $index => $data) : ?>
                <div class="values-row">
                    <input type="text" name="values[<?php echo $index; ?>][field_name]" value="<?php echo esc_attr($data['field_name']); ?>" placeholder="Field Name" />
                    <textarea name="values[<?php echo $index; ?>][value]" placeholder="Value"><?php echo esc_textarea($data['value']); ?></textarea>
                    <a href="#" class="remove-row">Remove</a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="values-row">
                <input type="text" name="values[0][field_name]" value="" placeholder="Field Name" />
                <textarea name="values[0][value]" placeholder="Value"></textarea>
                <a href="#" class="remove-row">Remove</a>
            </div>
        <?php endif; ?>
        <a href="#" class="add-row">Add Row</a>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#values-field').on('click', '.add-row', function(e) {
                e.preventDefault();
                var row = $('.values-row:last').clone();
                var rowCount = $('.values-row').length;
                row.find('input, textarea').each(function() {
                    var name = $(this).attr('name');
                    var nameParts = name.match(/\[(\d+)\]/);
                    if (nameParts) {
                        var newName = name.replace(nameParts[1], rowCount);
                        $(this).attr('name', newName).val('');
                    }
                });
                row.insertAfter('.values-row:last');
            });

            $('#values-field').on('click', '.remove-row', function(e) {
                e.preventDefault();
                if ($('.values-row').length > 1) {
                    $(this).closest('.values-row').remove();
                }
            });
        });
    </script>
    <?php
}


function save_values_meta_box($post_id) {
    if (!isset($_POST['values_nonce_field']) || !wp_verify_nonce($_POST['values_nonce_field'], 'values_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['values'])) {
        $values_data = array_values($_POST['values']);
        update_post_meta($post_id, 'values', $values_data);
    }
}
add_action('save_post', 'save_values_meta_box');


// Step 1: Add the Meta Box to Specific Pages and Custom Post Types
function add_name_value_pair_meta_box() {
    $specific_ids = array(
        388 => 'Use this to display the stats',
        224 => 'Use this to put data for the accordion',
        391 => 'Use this to provide content for the what we do tabs',
        715 => "Use this to detail processes",
        754 => "Use this for FAQs",
        1029 => "Use This for the about us page Mission and vision boxes",
        1035 => "Use This for the about us page Why Chose Us boxes",
    );
    $custom_post_types = array('custom_post_type1', 'custom_post_type2'); // Replace with your custom post types

    $current_post_type = get_post_type();
    $current_post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : '');

    if (in_array($current_post_type, $custom_post_types) || array_key_exists($current_post_id, $specific_ids)) {
        add_meta_box(
            'name_value_pair_meta_box',
            'Name Value Pair' . (array_key_exists($current_post_id, $specific_ids) ? ' (' . esc_html($specific_ids[$current_post_id]) . ')' : ''),
            'display_name_value_pair_meta_box',
            $current_post_type == 'page' ? 'page' : $current_post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_name_value_pair_meta_box');

// Step 2: Display the Meta Box
function display_name_value_pair_meta_box($post) {
    $name_value_pair_data = get_post_meta($post->ID, 'name_value_pair', true);
    wp_nonce_field('name_value_pair_nonce', 'name_value_pair_nonce_field');
    ?>
    <div id="name_value_pair-field">
        <?php if ($name_value_pair_data) : ?>
            <?php foreach ($name_value_pair_data as $index => $data) : ?>
                <div class="name_value_pair-row">
                    <input type="text" name="name_value_pair[<?php echo $index; ?>][field_name]" value="<?php echo esc_attr($data['field_name']); ?>" placeholder="Field Name" />
                    <textarea name="name_value_pair[<?php echo $index; ?>][value]" placeholder="Value"><?php echo esc_textarea($data['value']); ?></textarea>
                    <a href="#" class="remove-row">Remove</a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="name_value_pair-row">
                <input type="text" name="name_value_pair[0][field_name]" value="" placeholder="Field Name" />
                <textarea name="name_value_pair[0][value]" placeholder="Value"></textarea>
                <a href="#" class="remove-row">Remove</a>
            </div>
        <?php endif; ?>
        <a href="#" class="add-row">Add Row</a>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#name_value_pair-field').on('click', '.add-row', function(e) {
                e.preventDefault();
                var row = $('.name_value_pair-row:last').clone();
                var rowCount = $('.name_value_pair-row').length;
                row.find('input, textarea').each(function() {
                    var name = $(this).attr('name');
                    var nameParts = name.match(/\[(\d+)\]/);
                    if (nameParts) {
                        var newName = name.replace(nameParts[1], rowCount);
                        $(this).attr('name', newName).val('');
                    }
                });
                row.insertAfter('.name_value_pair-row:last');
            });

            $('#name_value_pair-field').on('click', '.remove-row', function(e) {
                e.preventDefault();
                if ($('.name_value_pair-row').length > 1) {
                    $(this).closest('.name_value_pair-row').remove();
                }
            });
        });
    </script>
    <?php
}

// Step 3: Save the Name Value Pair Field Data
function save_name_value_pair_meta_box($post_id) {
    if (!isset($_POST['name_value_pair_nonce_field']) || !wp_verify_nonce($_POST['name_value_pair_nonce_field'], 'name_value_pair_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['name_value_pair'])) {
        $name_value_pair_data = array_values($_POST['name_value_pair']);
        update_post_meta($post_id, 'name_value_pair', $name_value_pair_data);
    }
}
add_action('save_post', 'save_name_value_pair_meta_box');

// Create a new post for the custom post type 'feedback'
function create_feedback_post($form, $source, $date, $responseData,$g_captcha_response = "",$validate_captcha=true) {

    //prepare the response
    $response = array();
    
    if($validate_captcha){
     
     $dataRow = validate_recaptcha($g_captcha_response);

     if (!$dataRow->success) {
         $response['success'] = 0;
        $response['message'] = "Error Submitting lead: Captcha Validation Failed";

         print_r(json_encode($response));
         wp_die();
     }

}

    // Prepare the post data
    $post_data = array(
        'post_title'    => $source . " Via : ".$form,  // Using form as title or modify as needed
        'post_content'  => $responseData,             // Use responseData as the content
        'post_status'   => 'publish',                 // Set to 'publish' to make it public, or use 'draft'
        'post_type'     => 'formleads',               // Custom post type
    );


     


    // Debugging: Print the post data array (remove in production)
    //error_log(print_r($post_data, true));

    // Insert the post into the database
    $post_id = wp_insert_post($post_data);

    // Debugging: Log the post ID or error message
    if (is_wp_error($post_id)) {
        error_log('Error creating post: ' . $post_id->get_error_message());
    } else {
        error_log('Post created with ID: ' . $post_id);
    }

    // Update the custom fields after the post is created 
    // if (!is_wp_error($post_id)) {
    //     update_field('form', $form, $post_id);
    //     update_field('source', $source, $post_id);
    //     update_field('date', $date, $post_id);
    //     update_field('responseData', $responseData, $post_id);
    // }

    
    
    if (is_wp_error($post_id)) {
        $response['success'] = 0;
        $response['message'] = "Error Submitting lead: " . $post_id->get_error_message();
    } else {
        $response['success'] = 1;
        $response['message'] = "Response successfully submitted! ";
    }

    // Return the JSON-encoded response
    return json_encode($response);
}


function validate_recaptcha($response){
     $secret = "6LdTrSMqAAAAAHVoOkTD7FAtOzBHFTByUDDqmRhu";
     $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret.'&response='.$response.'&remoteip='.$remote_ip;
     $remote_ip = $_SERVER['REMOTE_ADDR'];
     $responseData = file_get_contents($url);
     $dataRow = json_decode($responseData);

     return $dataRow;
}




function newsletter_subscription(){
    $response = array();
 $email = $_POST['email'];

 if (empty($email)) {
     $response['success'] = 0;
        $response['message'] = "Error Submitting lead: Please provide an email";

         print_r(json_encode($response));
         wp_die();
 }

 $recaptchaResponse = isset($_POST['recaptchaResponse']) ? $_POST['recaptchaResponse'] : "";
 $dataRow = validate_recaptcha($recaptchaResponse);


 

     if (!$dataRow->success) {
         $response['success'] = 0;
        $response['message'] = "Error Submitting lead: Captcha Validation Failed";

         print_r(json_encode($response));
         wp_die();
     }

     







    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print_r(json_encode(array(
           'success' => 0,
           'error' => "Invalid Email",
            'message' => "Invalid Email"
        )));
    }else {
        $wordpress_post = array(
            'post_title' => $email,
            'post_content' => $email,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'email-subscription'
        );

        wp_insert_post($wordpress_post);
        print_r(json_encode(array(
            'success' => 1,
            'error' => '',
            'message' => 'Thanks for subscribing'
        )));
    }
 wp_die();
}

add_action('wp_ajax_newsletter_subscription', 'newsletter_subscription');
add_action('wp_ajax_nopriv_newsletter_subscription', 'newsletter_subscription');


// Step 1: Add the Meta Box to Specific Pages and Custom Post Types
function add_three_value_input_meta_box() {
    $specific_ids = array(
        207 => 'Use These For The Highlights'
    );
    $custom_post_types = array('custom_post_type1', 'custom_post_type2'); // Replace with your custom post types

    $current_post_type = get_post_type();
    $current_post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : '');

    if (in_array($current_post_type, $custom_post_types) || array_key_exists($current_post_id, $specific_ids)) {
        add_meta_box(
            'three_value_input_meta_box',
            'Three Value Input' . (array_key_exists($current_post_id, $specific_ids) ? ' (' . esc_html($specific_ids[$current_post_id]) . ')' : ''),
            'display_three_value_input_meta_box',
            $current_post_type == 'page' ? 'page' : $current_post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_three_value_input_meta_box');

// Step 2: Display the Meta Box
function display_three_value_input_meta_box($post) {
    $three_value_input_data = get_post_meta($post->ID, 'three_value_input', true);
    $pages = get_pages(); // Retrieve all WordPress pages
    wp_nonce_field('three_value_input_nonce', 'three_value_input_nonce_field');
    ?>
    <div id="three_value_input-field">
        <?php if ($three_value_input_data) : ?>
            <?php foreach ($three_value_input_data as $index => $data) : ?>
                <div class="three_value_input-row">
                    <input type="text" name="three_value_input[<?php echo $index; ?>][field_name_1]" value="<?php echo esc_attr($data['field_name_1']); ?>" placeholder="Field Name 1" />
                    <input type="text" name="three_value_input[<?php echo $index; ?>][field_name_2]" value="<?php echo esc_attr($data['field_name_2']); ?>" placeholder="Field Name 2" />
                    <textarea name="three_value_input[<?php echo $index; ?>][text_area_1]" placeholder="Text Area 1"><?php echo esc_textarea($data['text_area_1']); ?></textarea>
                    <select name="three_value_input[<?php echo $index; ?>][link_field]">
                        <option value="">Select a Page</option>
                        <?php foreach ($pages as $page) : ?>
                            <option value="<?php echo get_permalink($page->ID); ?>" <?php selected($data['link_field'], get_permalink($page->ID)); ?>>
                                <?php echo esc_html($page->post_title); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <a href="#" class="remove-row">Remove</a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="three_value_input-row">
                <input type="text" name="three_value_input[0][field_name_1]" value="" placeholder="Field Name 1" />
                <input type="text" name="three_value_input[0][field_name_2]" value="" placeholder="Field Name 2" />
                <textarea name="three_value_input[0][text_area_1]" placeholder="Text Area 1"></textarea>
                <select name="three_value_input[0][link_field]">
                    <option value="">Select a Page</option>
                    <?php foreach ($pages as $page) : ?>
                        <option value="<?php echo get_permalink($page->ID); ?>">
                            <?php echo esc_html($page->post_title); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <a href="#" class="remove-row">Remove</a>
            </div>
        <?php endif; ?>
        <a href="#" class="add-row">Add Row</a>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#three_value_input-field').on('click', '.add-row', function(e) {
                e.preventDefault();
                var row = $('.three_value_input-row:last').clone();
                var rowCount = $('.three_value_input-row').length;
                row.find('input, textarea, select').each(function() {
                    var name = $(this).attr('name');
                    var nameParts = name.match(/\[(\d+)\]/);
                    if (nameParts) {
                        var newName = name.replace(nameParts[1], rowCount);
                        $(this).attr('name', newName).val('');
                    }
                });
                row.insertAfter('.three_value_input-row:last');
            });

            $('#three_value_input-field').on('click', '.remove-row', function(e) {
                e.preventDefault();
                if ($('.three_value_input-row').length > 1) {
                    $(this).closest('.three_value_input-row').remove();
                }
            });
        });
    </script>
    <?php
}

// Step 3: Save the Three Value Input Field Data
function save_three_value_input_meta_box($post_id) {
    if (!isset($_POST['three_value_input_nonce_field']) || !wp_verify_nonce($_POST['three_value_input_nonce_field'], 'three_value_input_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['three_value_input'])) {
        $three_value_input_data = array_values($_POST['three_value_input']);
        update_post_meta($post_id, 'three_value_input', $three_value_input_data);
    }
}
add_action('save_post', 'save_three_value_input_meta_box');






// Add a custom meta box to the post and page edit screens
function add_social_meta_tags_meta_box() {
    add_meta_box(
        'social_meta_tags_meta_box',
        'Social Meta Tags',
        'display_social_meta_tags_meta_box',
        array('post', 'page'), // Apply to posts and pages
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_social_meta_tags_meta_box');

// Display the meta box in the admin
function display_social_meta_tags_meta_box($post) {
    // Retrieve the current meta tag values if they exist
    $og_url = get_post_meta($post->ID, '_og_url', true);
    $og_title = get_post_meta($post->ID, '_og_title', true);
    $og_description = get_post_meta($post->ID, '_og_description', true);
    $og_image = get_post_meta($post->ID, '_og_image', true);
    $twitter_title = get_post_meta($post->ID, '_twitter_title', true);
    $twitter_description = get_post_meta($post->ID, '_twitter_description', true);
    $twitter_image = get_post_meta($post->ID, '_twitter_image', true);

    // Nonce field for security
    wp_nonce_field('save_social_meta_tags', 'social_meta_tags_nonce');
    ?>
    <p>
        <label for="og_url">Facebook OG URL:</label><br>
        <input type="url" id="og_url" name="og_url" value="<?php echo esc_url($og_url); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="og_title">Facebook OG Title:</label><br>
        <input type="text" id="og_title" name="og_title" value="<?php echo esc_attr($og_title); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="og_description">Facebook OG Description:</label><br>
        <textarea id="og_description" name="og_description" rows="3" style="width:100%;"><?php echo esc_textarea($og_description); ?></textarea>
    </p>
    <p>
        <label for="og_image">Facebook OG Image URL:</label><br>
        <input type="url" id="og_image" name="og_image" value="<?php echo esc_url($og_image); ?>" style="width:100%;" />
    </p>
    <hr>
    <p>
        <label for="twitter_title">Twitter Title:</label><br>
        <input type="text" id="twitter_title" name="twitter_title" value="<?php echo esc_attr($twitter_title); ?>" style="width:100%;" />
    </p>
    <p>
        <label for="twitter_description">Twitter Description:</label><br>
        <textarea id="twitter_description" name="twitter_description" rows="3" style="width:100%;"><?php echo esc_textarea($twitter_description); ?></textarea>
    </p>
    <p>
        <label for="twitter_image">Twitter Image URL:</label><br>
        <input type="url" id="twitter_image" name="twitter_image" value="<?php echo esc_url($twitter_image); ?>" style="width:100%;" />
    </p>
    <?php
}

// Save the meta tag data when the post or page is saved
function save_social_meta_tags_meta_box($post_id) {
    // Verify the nonce
    if (!isset($_POST['social_meta_tags_nonce']) || !wp_verify_nonce($_POST['social_meta_tags_nonce'], 'save_social_meta_tags')) {
        return;
    }

    // Prevent autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (isset($_POST['post_type']) && in_array($_POST['post_type'], array('page', 'post'))) {
        if (!current_user_can('edit_' . $_POST['post_type'], $post_id)) {
            return;
        }
    }

    // Save or update the Facebook OG URL
    if (isset($_POST['og_url'])) {
        update_post_meta($post_id, '_og_url', esc_url_raw($_POST['og_url']));
    }

    // Save or update the Facebook OG Title
    if (isset($_POST['og_title'])) {
        update_post_meta($post_id, '_og_title', sanitize_text_field($_POST['og_title']));
    }

    // Save or update the Facebook OG Description
    if (isset($_POST['og_description'])) {
        update_post_meta($post_id, '_og_description', sanitize_text_field($_POST['og_description']));
    }

    // Save or update the Facebook OG Image
    if (isset($_POST['og_image'])) {
        update_post_meta($post_id, '_og_image', esc_url_raw($_POST['og_image']));
    }

    // Save or update the Twitter Title
    if (isset($_POST['twitter_title'])) {
        update_post_meta($post_id, '_twitter_title', sanitize_text_field($_POST['twitter_title']));
    }

    // Save or update the Twitter Description
    if (isset($_POST['twitter_description'])) {
        update_post_meta($post_id, '_twitter_description', sanitize_text_field($_POST['twitter_description']));
    }

    // Save or update the Twitter Image
    if (isset($_POST['twitter_image'])) {
        update_post_meta($post_id, '_twitter_image', esc_url_raw($_POST['twitter_image']));
    }
}
add_action('save_post', 'save_social_meta_tags_meta_box');




function output_social_meta_tags() {
    if (is_singular(array('post', 'page'))) {
        global $post;
        $og_url = get_post_meta($post->ID, '_og_url', true) ?: get_permalink($post->ID);
        $og_title = get_post_meta($post->ID, '_og_title', true) ?: get_the_title($post->ID);
        $og_description = get_post_meta($post->ID, '_og_description', true) ?: get_bloginfo('description');
        $og_image = get_post_meta($post->ID, '_og_image', true);
        $twitter_title = get_post_meta($post->ID, '_twitter_title', true) ?: get_the_title($post->ID);
        $twitter_description = get_post_meta($post->ID, '_twitter_description', true) ?: get_bloginfo('description');
        $twitter_image = get_post_meta($post->ID, '_twitter_image', true);

        // Facebook Open Graph Tags
        echo '<meta property="og:url" content="' . esc_url($og_url) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($og_title) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($og_description) . '">' . "\n";
        if ($og_image) {
            echo '<meta property="og:image" content="' . esc_url($og_image) . '">' . "\n";
        }

        // Twitter Meta Tags
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta property="twitter:domain" content="' . esc_attr($_SERVER['HTTP_HOST']) . '">' . "\n";
        echo '<meta property="twitter:url" content="' . esc_url($og_url) . '">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($twitter_title) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($twitter_description) . '">' . "\n";
        if ($twitter_image) {
            echo '<meta name="twitter:image" content="' . esc_url($twitter_image) . '">' . "\n";
        }
    }elseif (is_home()){
        $post_id = 520;

        $og_url = get_post_meta($post_id, '_og_url', true) ?: get_permalink($post->ID);
        $og_title = get_post_meta($post_id, '_og_title', true) ?: get_the_title($post->ID);
        $og_description = get_post_meta($post_id, '_og_description', true) ?: get_bloginfo('description');
        $og_image = get_post_meta($post_id, '_og_image', true);
        $twitter_title = get_post_meta($post_id, '_twitter_title', true) ?: get_the_title($post->ID);
        $twitter_description = get_post_meta($post_id, '_twitter_description', true) ?: get_bloginfo('description');
        $twitter_image = get_post_meta($post_id, '_twitter_image', true);

        // Facebook Open Graph Tags
        echo '<meta property="og:url" content="' . esc_url($og_url) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($og_title) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($og_description) . '">' . "\n";
        if ($og_image) {
            echo '<meta property="og:image" content="' . esc_url($og_image) . '">' . "\n";
        }

        // Twitter Meta Tags
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta property="twitter:domain" content="' . esc_attr($_SERVER['HTTP_HOST']) . '">' . "\n";
        echo '<meta property="twitter:url" content="' . esc_url($og_url) . '">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($twitter_title) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($twitter_description) . '">' . "\n";
        if ($twitter_image) {
            echo '<meta name="twitter:image" content="' . esc_url($twitter_image) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'output_social_meta_tags');


add_filter('document_title_parts', 'my_custom_title');
function my_custom_title( $title ) {
  // $title is an array of title parts, including one called `title`
    global $post;
    if (!is_404()) {
        $title['title'] = $post->post_title . ' | Magnetic Dudunets ';
    }
  if (is_singular('post')) {
    $title['title'] = $title['title'].' | Magnetic Dudunets - Blog';
  }
  if (is_404()) {
  	 $title['title'] = 'Page Not Found | Magnetic Dudunets';
  }

  return $title;
}



function add_meta_description_metabox() {
    add_meta_box(
        'meta_description', // Unique ID for the meta box
        'Meta Description', // Meta box title
        'meta_description_metabox_callback', // Callback function
        ['post', 'page'], // Post types where the meta box should appear
        'normal', // Context (normal, side, etc.)
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_meta_description_metabox');

function meta_description_metabox_callback($post) {
    // Retrieve current meta description
    $meta_description = get_post_meta($post->ID, '_meta_description', true);

    // Meta box form
    echo '<label for="meta_description">Enter Meta Description:</label>';
    echo '<textarea id="meta_description" name="meta_description" rows="4" style="width:100%;">' . esc_textarea($meta_description) . '</textarea>';
}




function save_meta_description($post_id) {
    // Check if the current user has permission to edit the post or page
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if the meta description field is set
    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, '_meta_description', sanitize_text_field($_POST['meta_description']));
    }
}
add_action('save_post', 'save_meta_description');






function add_meta_description_to_header() {
    if (is_singular(['post', 'page'])) {
        global $post;
        $meta_description = get_post_meta($post->ID, '_meta_description', true);
        
        if ($meta_description) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
        }
    }else{
    	$post_id = 520;
    	$meta_description = get_post_meta($post_id, '_meta_description', true);
    	 if ($meta_description) {
            echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
        }
    }
    if (is_home()) {
    	echo '<link rel="canonical" href="' . esc_attr(get_site_url()) . '">';
    }
    
}
add_action('wp_head', 'add_meta_description_to_header');

function numToWords($number) {
    $units = array('', 'one', 'two', 'three', 'four',
        'five', 'six', 'seven', 'eight', 'nine');

    $tens = array('', 'ten', 'twenty', 'thirty', 'forty',
        'fifty', 'sixty', 'seventy', 'eighty',
        'ninety');

    $special = array('eleven', 'twelve', 'thirteen',
        'fourteen', 'fifteen', 'sixteen',
        'seventeen', 'eighteen', 'nineteen');

    $words = '';
    if ($number < 10) {
        $words .= $units[$number];
    } elseif ($number < 20) {
        $words .= $special[$number - 11];
    } else {
        $words .= $tens[(int)($number / 10)] . ' '
            . $units[$number % 10];
    }

    return $words;
}

/**
 * Get the first custom category a post belongs to.
 *
 * @param int|null $post_id The ID of the post. Defaults to the current post if not provided.
 * @param string $taxonomy The taxonomy name. Defaults to 'category'.
 * @return array|null The name of the first term, or null if none are found.
 */
function get_first_custom_category($post_id = null, $taxonomy = 'category') {
    // Use the current post ID if not provided.
    $post_id = $post_id ? $post_id : get_the_ID();

    // Get the terms for the specified taxonomy.
    $terms = get_the_terms($post_id, $taxonomy);

    // Check if terms exist and return the first one.
    if (!empty($terms) && !is_wp_error($terms)) {
        $custom_excerpt = get_field("custom_excerpt",$terms[0]->taxonomy . '_' .$terms[0]->term_id);
        return array('name'=>$terms[0]->name,'description' => $terms[0]->description,'custom_excerpt' => $custom_excerpt);
    }

    // Return null if no terms are found.
    return array();
}

function create_inspiration_types_taxonomy() {
    // Labels for the custom taxonomy
    $labels = array(
        'name'              => _x( 'Inspiration Types', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Inspiration', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Inspiration Types', 'textdomain' ),
        'all_items'         => __( 'All Inspiration Types', 'textdomain' ),
        'parent_item'       => __( 'Parent Inspiration Type', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Inspiration Type:', 'textdomain' ),
        'edit_item'         => __( 'Edit Inspiration Type', 'textdomain' ),
        'update_item'       => __( 'Update Inspiration Type', 'textdomain' ),
        'add_new_item'      => __( 'Add New Inspiration Type', 'textdomain' ),
        'new_item_name'     => __( 'New Inspiration Type Name', 'textdomain' ),
        'menu_name'         => __( 'Inspiration Types', 'textdomain' ),
    );

    // Arguments for the custom taxonomy
    $args = array(
        'hierarchical'      => true, // Set to true for categories, false for tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'inspiration-type' ),
    );

    // Register the custom taxonomy
    register_taxonomy( 'inspiration_type', array( 'inspiration-types' ), $args );
}

// Hook into the init action and call the function when WordPress initializes
add_action( 'init', 'create_inspiration_types_taxonomy', 0 );


function get_posts_by_taxonomy($post_type,$taxonomy,$type,$count = 10, $offset = 0){
    return get_posts([
        'post_type'      => $post_type, // Custom post type
        'tax_query'      => [
            [
                'taxonomy' => $taxonomy, // Custom taxonomy
                'field'    => 'slug', // Match by slug
                'terms'    => $type, // Specific category slug
            ],
        ],
        'posts_per_page' => $count, // Retrieve all posts
        'post_status'    => 'publish', // Only published posts
    ]);
}


function ajax_load_more_posts_by_taxonomy() {
    // Verify nonce for security
    //check_ajax_referer('load_more_nonce', 'nonce');
    // Add CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");

    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : '';
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $taxonomy = isset($_POST['taxonomy']) ? sanitize_text_field($_POST['taxonomy']) : '';
    $type = isset($_POST['type']) ? sanitize_text_field($_POST['type']) : '';
    $posts_per_page = 10;

    $args = [
        'post_type'      => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'post_status'    => 'publish',
    ];

    if ($taxonomy && $type) {
        $args['tax_query'] = [
            [
                'taxonomy' => $taxonomy,
                'field'    => 'slug',
                'terms'    => $type,
            ],
        ];
    }

    $posts = get_posts($args);

    if (!empty($posts)) {
        foreach ($posts as $post) {
            ?>
                <?php if ($post_type =="showcases"):?>
                      <?php if ($type == "photo"):
                    $photo = $post;
                    $image = get_post_thumbnail($post->ID);
                    ?>
                    <div>
                        <div class="w-full h-[240px] overflow-hidden relative">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="object-cover w-full h-full" />
                            <div class="absolute left-0 bottom-0 w-16 h-12 bg-white text-red flex justify-center items-center">
                                <svg class="w-4 h-4 fill-current">
                                    <use xlink:href="#icon-camera"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 class="font-quicksand text-lg font-semibold w-10/12 leading-6">Building a better world, together, we can make a difference</h3>
                            <div class="bg-black/10 h-[1px] w-full my-2"></div>
                            <div class="text-sm text-gray font-semibold"><?php echo get_formatted_post_date($photo->ID)?></div>
                        </div>
                    </div>
                      <?php elseif ($type = "video"):
                    $video = $post;
                    $link = get_field("video_link",$video->ID);
                    $image = get_post_thumbnail($video->ID);
                    ?>
                    <div>
                        <a href="<?php echo $link;?>" data-fancybox-type="iframe" class="fancy_youtube fancybox iframe relative cursor-pointer block">
                            <div class="w-full h-[240px] overflow-hidden relative">
                                <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="object-cover w-full h-full" />
                                <div class="absolute left-0 bottom-0 w-16 h-12 bg-white text-red flex justify-center items-center">
                                    <svg class="w-4 h-4 fill-current">
                                        <use xlink:href="#icon-play"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h3 class="font-quicksand text-lg font-semibold w-10/12 leading-6">Building a better world, together, we can make a difference</h3>
                                <div class="bg-black/10 h-[1px] w-full my-2"></div>
                                <div class="text-sm text-gray font-semibold"><?php echo get_formatted_post_date($video->ID)?></div>
                            </div>
                        </a>
                    </div>
                      <?php endif;?>
                <?php elseif ($post_type == "installation"):
                $i = $post;
                $image = get_post_thumbnail($i->ID);
                ?>
                <div>
                    <a href="#">
                        <div class="h-[400px] overflow-hidden">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="object-cover w-full h-full" />
                        </div>
                        <div class="mt-4">
                            <div class="flex items-center gap-3 w-10/12">
                                <span>
                                    <svg class="w-5 h-5 fill-current">
                                        <use xlink:href="#icon-location"></use>
                                    </svg>
                                </span>
                                <h3 class="font-quicksand font-bold text-lg truncate"><?php echo $i->post_title?></h3>
                            </div>
                            <div class="bg-black/10 h-[1px] w-full my-2"></div>
                            <p class="text-black/60 font-semibold leading-5 truncate"><?php echo $i->post_excerpt?></p>
                        </div>
                    </a>
                </div>
                <?php endif;?>
            <?php
        }
    } else {
        echo '<p>No more posts to load.</p>';
    }

    wp_die(); // End AJAX processing
}
add_action('wp_ajax_load_more_posts_by_taxonomy', 'ajax_load_more_posts_by_taxonomy');       // For logged-in users
add_action('wp_ajax_nopriv_load_more_posts_by_taxonomy', 'ajax_load_more_posts_by_taxonomy'); // For logged-out users

function enqueue_load_more_scripts() {
    wp_enqueue_script('load-more', get_template_directory_uri() . '/js/load-more.js', ['jquery'], null, true);

    // Localize the script to provide AJAX URL and nonce
    wp_localize_script('load-more', 'loadMoreParams', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('load_more_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_load_more_scripts');

function get_formatted_post_date($post_id = null) {
    // Use the current post ID if not provided.
    $post_id = $post_id ? $post_id : get_the_ID();

    // Retrieve the date in the desired format.
    return get_the_date('F j, Y', $post_id);
}

// Register the dudunets_gallery metabox for custom post types: installation and inspiration
function add_dudunets_gallery_meta_box() {
    global $post;

    if (!$post) return;

    $post_type = $post->post_type;
    $metabox_titles = [
        'installation' => 'Dudunets Gallery for Installation',
        'showcases' => 'Dudunets Gallery for Inspiration Showcase'
    ];

    if (array_key_exists($post_type, $metabox_titles)) {
        add_meta_box(
            'dudunets_gallery', // ID of the metabox
            $metabox_titles[$post_type], // Title of the metabox
            'dudunets_gallery_meta_box_callback', // Callback function
            $post_type, // Post type to display it on
            'normal', // Context (where the box is shown)
            'high' // Priority
        );
    }
}
add_action('add_meta_boxes', 'add_dudunets_gallery_meta_box');

// Callback function to display fields in the dudunets_gallery metabox
function dudunets_gallery_meta_box_callback($post) {
    wp_nonce_field('dudunets_gallery_meta_box_nonce', 'dudunets_gallery_meta_box_nonce');
    $dudunets_gallery = get_post_meta($post->ID, '_dudunets_gallery', true);

    ?>
    <div id="dudunets-gallery-fieldset">
        <?php
        if ($dudunets_gallery && is_array($dudunets_gallery)) {
            foreach ($dudunets_gallery as $index => $item) {
                ?>
                <div class="gallery-row">
                    <p><label for="title-<?php echo $index; ?>">Title</label>
                        <input type="text" name="title[]" value="<?php echo esc_attr($item['title']); ?>" /></p>
                    <p><label for="image-<?php echo $index; ?>">Image</label>
                        <input type="text" name="image[]" value="<?php echo esc_url($item['image']); ?>" />
                        <button class="upload_image_button button">Upload Image</button></p>
                    <p><label for="summary-<?php echo $index; ?>">Summary</label>
                        <textarea name="summary[]" style="height: 110px; width:100%;"><?php echo esc_textarea($item['summary']); ?></textarea></p>
                    <button class="remove-row button">Remove</button>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="gallery-row">
                <p><label for="title">Title</label>
                    <input type="text" name="title[]" value="" /></p>
                <p><label for="image">Image</label>
                    <input type="text" name="image[]" value="" />
                    <button class="upload_image_button button">Upload Image</button></p>
                <p><label for="summary">Summary</label>
                    <textarea name="summary[]" style="height: 110px; width:100%;"></textarea></p>
                <button class="remove-row button">Remove</button>
            </div>
            <?php
        }
        ?>
    </div>
    <div style="height: 20px;"></div>
    <button id="add-row" class="button">Add Gallery Item</button>

    <script>
        jQuery(document).ready(function($){
            // Add new row
            $('#add-row').on('click', function(e) {
                e.preventDefault();
                var row = $('.gallery-row:first').clone();
                row.find('input').val('');
                row.find('textarea').val('');
                $('#dudunets-gallery-fieldset').append(row);
            });

            // Remove row
            $(document).on('click', '.remove-row', function(e){
                e.preventDefault();
                $(this).closest('.gallery-row').remove();
            });

            // Image upload
            $(document).on('click', '.upload_image_button', function(e) {
                e.preventDefault();
                var button = $(this);
                var custom_uploader = wp.media({
                    title: 'Select Image',
                    button: { text: 'Use this image' },
                    multiple: false
                }).on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    button.prev('input').val(attachment.url);
                }).open();
            });
        });
    </script>
    <?php
}

// Save the dudunets_gallery data
function save_dudunets_gallery_meta_box_data($post_id) {
    if (!isset($_POST['dudunets_gallery_meta_box_nonce']) || !wp_verify_nonce($_POST['dudunets_gallery_meta_box_nonce'], 'dudunets_gallery_meta_box_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $titles = isset($_POST['title']) ? array_map('sanitize_text_field', $_POST['title']) : [];
    $images = isset($_POST['image']) ? array_map('esc_url_raw', $_POST['image']) : [];
    $summaries = isset($_POST['summary']) ? array_map('sanitize_textarea_field', $_POST['summary']) : [];

    $dudunets_gallery = [];
    for ($i = 0; $i < count($titles); $i++) {
        if (!empty($titles[$i])) {
            $dudunets_gallery[] = [
                'title' => $titles[$i],
                'image' => $images[$i],
                'summary' => $summaries[$i]
            ];
        }
    }

    update_post_meta($post_id, '_dudunets_gallery', $dudunets_gallery);
}
add_action('save_post', 'save_dudunets_gallery_meta_box_data');






/**
 * Simplified repeatable Gallery metabox for taxonomy 'net_type'
 * Fields: Image + Title
 */

// -----------------------------
// 1. Add metabox
// -----------------------------
add_action('net_type_add_form_fields', 'add_net_type_metabox');
add_action('net_type_edit_form_fields', 'edit_net_type_metabox');

function add_net_type_metabox() {
    ?>
    <div class="form-field term-group">
        <label for="net_type_gallery">Gallery</label>
        <div id="net_type_gallery_wrapper"></div>
        <button type="button" class="button add-gallery-item">+ Add Image</button>
    </div>
    <?php
    add_net_type_metabox_scripts();
}

function edit_net_type_metabox($term) {
    $gallery = get_term_meta($term->term_id, 'net_type_gallery', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="net_type_gallery">Gallery</label></th>
        <td>
            <div id="net_type_gallery_wrapper">
                <?php
                if (!empty($gallery) && is_array($gallery)) {
                    foreach ($gallery as $index => $item) { ?>
                        <div class="gallery-item" style="margin-bottom:15px;border:1px solid #ccc;padding:10px;">
                            <input type="hidden" name="net_type_gallery[<?php echo $index; ?>][image]" value="<?php echo esc_attr($item['image']); ?>" class="gallery-image-field" />
                            <img src="<?php echo esc_url($item['image']); ?>" class="gallery-preview" style="max-width:150px;display:block;margin-bottom:10px;">
                            <button type="button" class="button upload-gallery-image">Upload Image</button>

                            <p><input type="text" name="net_type_gallery[<?php echo $index; ?>][title]" value="<?php echo esc_attr($item['title']); ?>" placeholder="Image Title" style="width:100%;"></p>

                            <button type="button" class="button remove-gallery-item" style="background:#f55;color:#fff;">Remove</button>
                        </div>
                    <?php }
                } ?>
            </div>
            <button type="button" class="button add-gallery-item">+ Add Image</button>
        </td>
    </tr>
    <?php
    add_net_type_metabox_scripts();
}

// -----------------------------
// 2. Save meta data
// -----------------------------
add_action('created_net_type', 'save_net_type_metabox');
add_action('edited_net_type', 'save_net_type_metabox');

function save_net_type_metabox($term_id) {
    if (isset($_POST['net_type_gallery'])) {
        update_term_meta($term_id, 'net_type_gallery', $_POST['net_type_gallery']);
    } else {
        delete_term_meta($term_id, 'net_type_gallery');
    }
}

// -----------------------------
// 3. Scripts for repeater + uploader
// -----------------------------
function add_net_type_metabox_scripts() {
    ?>
    <script>
    jQuery(document).ready(function($){
        // Upload image
        $('body').on('click', '.upload-gallery-image', function(e){
            e.preventDefault();
            let button = $(this);
            let custom_uploader = wp.media({
                title: 'Select Image',
                button: { text: 'Use this image' },
                multiple: false
            }).on('select', function(){
                let attachment = custom_uploader.state().get('selection').first().toJSON();
                button.prev('.gallery-preview').attr('src', attachment.url);
                button.siblings('.gallery-image-field').val(attachment.url);
            }).open();
        });

        // Add new item
        $('body').on('click', '.add-gallery-item', function(e){
            e.preventDefault();
            let index = $('#net_type_gallery_wrapper .gallery-item').length;
            let newItem = `
                <div class="gallery-item" style="margin-bottom:15px;border:1px solid #ccc;padding:10px;">
                    <input type="hidden" name="net_type_gallery[${index}][image]" class="gallery-image-field" />
                    <img src="" class="gallery-preview" style="max-width:150px;display:block;margin-bottom:10px;">
                    <button type="button" class="button upload-gallery-image">Upload Image</button>
                    <p><input type="text" name="net_type_gallery[${index}][title]" placeholder="Image Title" style="width:100%;"></p>
                    <button type="button" class="button remove-gallery-item" style="background:#f55;color:#fff;">Remove</button>
                </div>
            `;
            $('#net_type_gallery_wrapper').append(newItem);
        });

        // Remove item
        $('body').on('click', '.remove-gallery-item', function(e){
            e.preventDefault();
            $(this).closest('.gallery-item').remove();
        });
    });
    </script>
    <?php
}





/**
 * Clonable 'Swipers' metabox for taxonomy 'net_type'
 */

// --------------------------------------
// 1. Add fields to the taxonomy add/edit forms
// --------------------------------------
add_action('net_type_add_form_fields', 'add_net_type_swipers_metabox');
add_action('net_type_edit_form_fields', 'edit_net_type_swipers_metabox');

function add_net_type_swipers_metabox() {
    ?>
    <div class="form-field term-group">
        <label for="net_type_swipers">Swipers</label>
        <div id="net_type_swipers_wrapper"></div>
        <button type="button" class="button add-swiper-item">+ Add Swiper</button>
    </div>
    <?php
    add_net_type_swipers_scripts();
}

function edit_net_type_swipers_metabox($term) {
    $swipers = get_term_meta($term->term_id, 'net_type_swipers', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="net_type_swipers">Swipers</label></th>
        <td>
            <div id="net_type_swipers_wrapper">
                <?php
                if (!empty($swipers) && is_array($swipers)) {
                    foreach ($swipers as $index => $swiper) { ?>
                        <div class="swiper-item" style="margin-bottom:15px;border:1px solid #ccc;padding:10px;">
                            <p><input type="text" name="net_type_swipers[<?php echo $index; ?>][text]" value="<?php echo esc_attr($swiper['text']); ?>" placeholder="Swiper Text" style="width:100%;"></p>
                            
                            <input type="hidden" name="net_type_swipers[<?php echo $index; ?>][image]" value="<?php echo esc_attr($swiper['image']); ?>" class="swiper-image-field" />
                            <img src="<?php echo esc_url($swiper['image']); ?>" class="swiper-preview" style="max-width:150px;display:block;margin-bottom:10px;">
                            <button type="button" class="button upload-swiper-image">Upload Image</button>

                            <button type="button" class="button remove-swiper-item" style="background:#f55;color:#fff;">Remove</button>
                        </div>
                    <?php }
                } ?>
            </div>
            <button type="button" class="button add-swiper-item">+ Add Swiper</button>
        </td>
    </tr>
    <?php
    add_net_type_swipers_scripts();
}

// --------------------------------------
// 2. Save the Swipers meta
// --------------------------------------
add_action('created_net_type', 'save_net_type_swipers_metabox');
add_action('edited_net_type', 'save_net_type_swipers_metabox');

function save_net_type_swipers_metabox($term_id) {
    if (isset($_POST['net_type_swipers'])) {
        update_term_meta($term_id, 'net_type_swipers', $_POST['net_type_swipers']);
    } else {
        delete_term_meta($term_id, 'net_type_swipers');
    }
}

// --------------------------------------
// 3. JS for repeater + media uploader
// --------------------------------------
function add_net_type_swipers_scripts() {
    ?>
    <script>
    jQuery(document).ready(function($){
        // Upload image
        $('body').on('click', '.upload-swiper-image', function(e){
            e.preventDefault();
            let button = $(this);
            let custom_uploader = wp.media({
                title: 'Select Swiper Image',
                button: { text: 'Use this image' },
                multiple: false
            }).on('select', function(){
                let attachment = custom_uploader.state().get('selection').first().toJSON();
                button.prev('.swiper-preview').attr('src', attachment.url);
                button.siblings('.swiper-image-field').val(attachment.url);
            }).open();
        });

        // Add new swiper
        $('body').on('click', '.add-swiper-item', function(e){
            e.preventDefault();
            let index = $('#net_type_swipers_wrapper .swiper-item').length;
            let newItem = `
                <div class="swiper-item" style="margin-bottom:15px;border:1px solid #ccc;padding:10px;">
                    <p><input type="text" name="net_type_swipers[${index}][text]" placeholder="Swiper Text" style="width:100%;"></p>
                    <input type="hidden" name="net_type_swipers[${index}][image]" class="swiper-image-field" />
                    <img src="" class="swiper-preview" style="max-width:150px;display:block;margin-bottom:10px;">
                    <button type="button" class="button upload-swiper-image">Upload Image</button>
                    <button type="button" class="button remove-swiper-item" style="background:#f55;color:#fff;">Remove</button>
                </div>
            `;
            $('#net_type_swipers_wrapper').append(newItem);
        });

        // Remove swiper
        $('body').on('click', '.remove-swiper-item', function(e){
            e.preventDefault();
            $(this).closest('.swiper-item').remove();
        });
    });
    </script>
    <?php
}


function get_installations_by_net_type($term_slug, $limit = -1) {
    $args = [
        'post_type'      => 'installation',
        'post_status'    => 'publish',
        'posts_per_page' => $limit,
        'tax_query'      => [
            [
                'taxonomy' => 'net_type',
                'field'    => 'slug',
                'terms'    => $term_slug,
            ],
        ],
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        return $query->posts; // Return array of WP_Post objects
    }

    return false;
}



// Hook to add the metabox
add_action('net_type_add_form_fields', 'add_net_type_media_gallery_metabox', 10, 2);
add_action('net_type_edit_form_fields', 'edit_net_type_media_gallery_metabox', 10, 2);

// Save data
add_action('edited_net_type', 'save_net_type_media_gallery_metabox', 10, 2);
add_action('create_net_type', 'save_net_type_media_gallery_metabox', 10, 2);

function add_net_type_media_gallery_metabox() {
    ?>
    <div class="form-field term-group">
        <label for="net_type_media_gallery"><strong>Media Gallery</strong></label>
        <div id="media-gallery-wrapper">
            <div class="media-gallery-item">
                <input type="text" name="net_type_media_gallery[0][video_url]" placeholder="Enter video URL" style="width:100%; margin-bottom:6px;">
                <input type="hidden" name="net_type_media_gallery[0][image]" class="media-gallery-image-field">
                <button type="button" class="button upload-media-gallery-image">Upload Image</button>
                <div class="media-gallery-preview" style="margin-top:6px;"></div>
            </div>
        </div>
        <button type="button" class="button add-media-gallery-item" style="margin-top:8px;">Add Another</button>
    </div>

    <script>
    jQuery(document).ready(function($){
        // Add new clone
        $('.add-media-gallery-item').on('click', function(){
            let count = $('#media-gallery-wrapper .media-gallery-item').length;
            let clone = `
                <div class="media-gallery-item" style="margin-top:12px;">
                    <input type="text" name="net_type_media_gallery[`+count+`][video_url]" placeholder="Enter video URL" style="width:100%; margin-bottom:6px;">
                    <input type="hidden" name="net_type_media_gallery[`+count+`][image]" class="media-gallery-image-field">
                    <button type="button" class="button upload-media-gallery-image">Upload Image</button>
                    <div class="media-gallery-preview" style="margin-top:6px;"></div>
                </div>`;
            $('#media-gallery-wrapper').append(clone);
        });

        // Image upload
        $(document).on('click', '.upload-media-gallery-image', function(e){
            e.preventDefault();
            let button = $(this);
            let frame = wp.media({
                title: 'Select or Upload Image',
                button: { text: 'Use this image' },
                multiple: false
            });
            frame.on('select', function(){
                let attachment = frame.state().get('selection').first().toJSON();
                button.prev('.media-gallery-image-field').val(attachment.url);
                button.next('.media-gallery-preview').html('<img src="'+attachment.url+'" style="max-width:100px; height:auto;">');
            });
            frame.open();
        });
    });
    </script>
    <?php
}

function edit_net_type_media_gallery_metabox($term) {
    $media_gallery = get_term_meta($term->term_id, 'net_type_media_gallery', true);
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label><strong>Media Gallery</strong></label></th>
        <td>
            <div id="media-gallery-wrapper">
                <?php if (!empty($media_gallery)) : ?>
                    <?php foreach ($media_gallery as $index => $item) : ?>
                        <div class="media-gallery-item" style="margin-bottom:10px;">
                            <input type="text" name="net_type_media_gallery[<?php echo esc_attr($index); ?>][video_url]" value="<?php echo esc_attr($item['video_url']); ?>" placeholder="Enter video URL" style="width:100%; margin-bottom:6px;">
                            <input type="hidden" name="net_type_media_gallery[<?php echo esc_attr($index); ?>][image]" value="<?php echo esc_attr($item['image']); ?>" class="media-gallery-image-field">
                            <button type="button" class="button upload-media-gallery-image">Upload Image</button>
                            <div class="media-gallery-preview" style="margin-top:6px;">
                                <?php if (!empty($item['image'])) : ?>
                                    <img src="<?php echo esc_url($item['image']); ?>" style="max-width:100px; height:auto;">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="media-gallery-item">
                        <input type="text" name="net_type_media_gallery[0][video_url]" placeholder="Enter video URL" style="width:100%; margin-bottom:6px;">
                        <input type="hidden" name="net_type_media_gallery[0][image]" class="media-gallery-image-field">
                        <button type="button" class="button upload-media-gallery-image">Upload Image</button>
                        <div class="media-gallery-preview" style="margin-top:6px;"></div>
                    </div>
                <?php endif; ?>
            </div>
            <button type="button" class="button add-media-gallery-item" style="margin-top:8px;">Add Another</button>
        </td>
    </tr>

    <script>
    jQuery(document).ready(function($){
        $('.add-media-gallery-item').on('click', function(){
            let count = $('#media-gallery-wrapper .media-gallery-item').length;
            let clone = `
                <div class="media-gallery-item" style="margin-top:12px;">
                    <input type="text" name="net_type_media_gallery[`+count+`][video_url]" placeholder="Enter video URL" style="width:100%; margin-bottom:6px;">
                    <input type="hidden" name="net_type_media_gallery[`+count+`][image]" class="media-gallery-image-field">
                    <button type="button" class="button upload-media-gallery-image">Upload Image</button>
                    <div class="media-gallery-preview" style="margin-top:6px;"></div>
                </div>`;
            $('#media-gallery-wrapper').append(clone);
        });

        $(document).on('click', '.upload-media-gallery-image', function(e){
            e.preventDefault();
            let button = $(this);
            let frame = wp.media({
                title: 'Select or Upload Image',
                button: { text: 'Use this image' },
                multiple: false
            });
            frame.on('select', function(){
                let attachment = frame.state().get('selection').first().toJSON();
                button.prev('.media-gallery-image-field').val(attachment.url);
                button.next('.media-gallery-preview').html('<img src="'+attachment.url+'" style="max-width:100px; height:auto;">');
            });
            frame.open();
        });
    });
    </script>
    <?php
}

function save_net_type_media_gallery_metabox($term_id) {
    if (isset($_POST['net_type_media_gallery'])) {
        update_term_meta($term_id, 'net_type_media_gallery', array_values($_POST['net_type_media_gallery']));
    }
}








/**
 * Add Gallery Metabox to Installation Post Type
 */
function installation_gallery_metabox() {
    add_meta_box(
        'installation_gallery',
        'Installation Gallery',
        'render_installation_gallery_metabox',
        'installation',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'installation_gallery_metabox');

/**
 * Render the gallery metabox
 */
function render_installation_gallery_metabox($post) {
    wp_nonce_field('save_installation_gallery', 'installation_gallery_nonce');

    $gallery_ids = get_post_meta($post->ID, '_installation_gallery', true);
    $gallery_ids = is_array($gallery_ids) ? $gallery_ids : [];
    ?>

    <div id="installation-gallery-wrapper">
        <button type="button" class="button add-installation-images">Add Images</button>
        <ul class="installation-gallery-list" style="margin-top:15px; display:flex; flex-wrap:wrap; gap:10px;">
            <?php foreach ($gallery_ids as $image_id): 
                $thumb = wp_get_attachment_image_src($image_id, 'thumbnail'); ?>
                <li style="position:relative;">
                    <input type="hidden" name="installation_gallery[]" value="<?php echo esc_attr($image_id); ?>">
                    <img src="<?php echo esc_url($thumb[0]); ?>" style="width:100px;height:100px;object-fit:cover;border:1px solid #ccc;">
                    <button type="button" class="remove-installation-image" style="position:absolute;top:2px;right:2px;">✕</button>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
    jQuery(document).ready(function($){
        var frame;

        $('.add-installation-images').on('click', function(e){
            e.preventDefault();

            if (frame) { frame.close(); }

            frame = wp.media({
                title: 'Select or Upload Images',
                button: { text: 'Use these images' },
                multiple: true
            });

            frame.on('select', function(){
                var selection = frame.state().get('selection');
                selection.each(function(attachment){
                    var id = attachment.id;
                    var url = attachment.attributes.sizes.thumbnail.url;
                    var li = `
                        <li style="position:relative;">
                            <input type="hidden" name="installation_gallery[]" value="${id}">
                            <img src="${url}" style="width:100px;height:100px;object-fit:cover;border:1px solid #ccc;">
                            <button type="button" class="remove-installation-image" style="position:absolute;top:2px;right:2px;">✕</button>
                        </li>`;
                    $('.installation-gallery-list').append(li);
                });
            });

            frame.open();
        });

        $(document).on('click', '.remove-installation-image', function(){
            $(this).closest('li').remove();
        });
    });
    </script>

    <?php
}

/**
 * Save gallery meta
 */
function save_installation_gallery($post_id) {
    if (!isset($_POST['installation_gallery_nonce']) ||
        !wp_verify_nonce($_POST['installation_gallery_nonce'], 'save_installation_gallery')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (!current_user_can('edit_post', $post_id)) return;

    $gallery = isset($_POST['installation_gallery']) ? array_map('intval', $_POST['installation_gallery']) : [];
    update_post_meta($post_id, '_installation_gallery', $gallery);
}
add_action('save_post_installation', 'save_installation_gallery');










