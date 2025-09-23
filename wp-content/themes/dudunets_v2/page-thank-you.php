<?php
/**
 * Template Name: Tags List
 */
$the_page = get_queried_object();
get_header();
?>

<main id="mainMain" class="module">
    <div class="px-4 lg:px-0 lg:w-[700px] mx-[auto]">
        <div class="general-content pt-14 pb-10 text-center">
            <div class="w-[80px] h-[80px] m-auto mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/thank_you_icon.svg" />
            </div>
            <div class="flex flex-col justify-center items-center text-center">
                <h2 class="mb-2 text-4xl font-400"><?php echo $the_page->post_title?></h2>
            </div>
            <p class="font-medium text-lg">Thank you for submitting the form. Someone from our customer service team will contact you shortly.</p>
            <a href="<?php echo get_home_url()?>" class="inline-flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                <span>Back to home page</span>
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
