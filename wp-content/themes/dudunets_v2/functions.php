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


    wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'additional-methods', get_template_directory_uri() . '/js/additional-methods.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array('jquery'), _S_VERSION, true );
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
            <div class="border border-black/10 overflow-hidden rounded-xl">
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
                        <h3 class="text-black text-xl font-semibold">
                            <a href="<?php the_permalink(); ?>" class="text-black cursor-pointer hover:text-primary hover:border-b"><?php the_title(); ?></a>
                        </h3>
                    </div>
                    <hr class="border-black/10" />
                    <div class="mt-5 flex justify-between items-center">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="flex items-center gap-3">
                            <div>
                                <?php echo get_avatar(get_the_author_meta('ID')); ?>
                            </div>
                            <h5 class="font-medium"><?php the_author(); ?></h5>
                        </a>
                        <div class="flex items-center gap-3">
                            <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                            <span class="text-black/60 text-sm font-medium"><?php echo estimate_reading_time(get_the_ID()); ?> min read</span>
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
        391 => 'Use this to provide content for the what we do tabs'
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

     if ($dataRow['success'] != 1) {
         $response['success'] = 0;
        $response['message'] = "Error Submitting lead: Captcha Validation Failed";
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
        $response['message'] = "Response successfully submitted! ID: ";
    }

    // Return the JSON-encoded response
    return json_encode($response);
}


function validate_recaptcha($response){
     $secret = "6LdTrSMqAAAAAHVoOkTD7FAtOzBHFTByUDDqmRhu";
     $response = $g_captcha_response;
     $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret.'&response='.$response.'&remoteip='.$remote_ip;
     $remote_ip = $_SERVER['REMOTE_ADDR'];
     $responseData = file_get_contents($url);
     $dataRow = json_decode($responseData);

     return $dataRow;
}




function newsletter_subscription(){
 $email = $_POST['email'];
 $recaptchaResponse = isset($_POST['recaptchaResponse']) ? $_POST['recaptchaResponse'] : "";
 $dataRow = validate_recaptcha($recaptchaResponse);

     if ($dataRow['success'] != 1) {
         $response['success'] = 0;
        $response['message'] = "Error Submitting lead: Captcha Validation Failed";
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











