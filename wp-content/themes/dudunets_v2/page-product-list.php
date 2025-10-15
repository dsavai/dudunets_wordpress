<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);


?>

<main class="main">
    <?php get_template_part("template-parts/home-page/module","categories");?>
    <?php get_template_part("template-parts/home-page/module","location");?>
</main>

<?php get_footer(); ?>
