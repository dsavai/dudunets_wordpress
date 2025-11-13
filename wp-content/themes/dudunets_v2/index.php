<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dudunets
 */

get_header();
?>
    <main class="main">

       
        <?php get_template_part("template-parts/home-page/home","video");?>
        <?php get_template_part("template-parts/home-page/module","brand");?>
        <?php get_template_part("template-parts/home-page/client","logos");?>
        <?php get_template_part("template-parts/home-page/module","about-us");?>
        <?php get_template_part("template-parts/home-page/module","featured-product");?>
        <?php get_template_part("template-parts/home-page/module","product-categories");?>
        <?php get_template_part("template-parts/home-page/module-get","a-quote");?>
        <?php get_template_part("template-parts/home-page/module-feature","product-video");?>
        <?php get_template_part("template-parts/home-page/module","client-reviews");?>
        <?php get_template_part("template-parts/home-page/module","blog");?>
        <?php get_template_part("template-parts/home-page/module-contact","us-form");?>

    </main>

<?php
get_footer();
