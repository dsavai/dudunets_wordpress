<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);


?>

<main class="main">

    <?php echo apply_filters("the_content",$page->post_content)?>
    <?php get_template_part("template-parts/home-page/module","categories");?>
    <?php get_template_part("template-parts/home-page/module-what-we","do");?>
    <?php get_template_part("template-parts/home-page/module","query");?>
    <?php get_template_part("template-parts/home-page/module","location");?>
</main>



<?php get_footer(); ?>
