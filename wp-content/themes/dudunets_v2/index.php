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

        <?php get_template_part("template-parts/home-page/hero","section");?>
        <?php get_template_part("template-parts/home-page/module","quote");?>
        <?php get_template_part("template-parts/home-page/module","about");?>
        <?php get_template_part("template-parts/home-page/module","hightlight");?>
        <?php get_template_part("template-parts/home-page/module","categories");?>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module-what-we","do");?>
        <?php get_template_part("template-parts/home-page/blog","section");?>
        <?php get_template_part("template-parts/home-page/module","clients");?>
        <?php get_template_part("template-parts/home-page/module","location");?>

    </main>

<?php
get_footer();
