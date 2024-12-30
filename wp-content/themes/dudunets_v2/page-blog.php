<?php
/*
Template Name: Custom Blog Page
*/

get_header(); ?>

<main class="main">
    <section class="module module--banner">
        <!-- <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo get_featured_background_image(); ?>);">
            <div class="bg-black/40 absolute inset-0"></div>
            <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                    <span>
                        <svg class="w-5 h-5 fill-current">
                            <use xlink:href="#icon-documentfile"></use>
                        </svg>
                    </span>
                    <span class="text-sm font-semibold uppercase">our blog</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mt-4">Blog & resources</h1>
            </div>
        </div> -->
        <div class="container mx-auto">
            <div class="mt-5 mb-10 relative">
                <div class="absolute bottom-14 inset-x-0 text-center z-[99] text-white">
                    <div class="uppercase bg-primary font-bold w-[150px] mx-auto text-sm py-2 mb-4 text-secondary">Home comfort </div>
                    <h1 class="text-6xl font-bold">Retractable door screens</h1>
                    <p>Lorem ipsum dolor sit amet consectetur. Fermentum feugiat risus ac tristique pharetra at leo vitae.</p>
                </div>
                <div class="absolute inset-0 w-full h-full z-10 bg-gradient-to-b from-black to-black-200 rotate-180 opacity-70"></div>
                <div class="w-full h-[600px]">
                    <img src="http://localhost/dudunets/wp-content/uploads/2024/08/blog_featured.jpg" alt="" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <section class="module module--blog">
        <div class="container mx-auto">
            <div class="mt-5 mb-5 lg:mb-5 px-4 lg:px-0">
                <h4 class="font-quicksand text-gray uppercase text-xs font-bold mb-1">LATEST BLOG</h4>
                <h2 class="text-3xl font-400">Our news & articles</h2>
            </div>
            <div class="lg:flex lg:gap-16 px-4 lg:px-0">
                <div class="lg:basis-8/12 mb-16">
                    <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 lg:gap-6">
                        <?php
                        $query = new WP_Query(array(
                            'post_type' => 'post',
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
                                                    <?php echo get_user_avatar(get_the_author_meta('ID')); ?>
                                                </div>
                                                <h5 class="font-bold text-[14px] hover:text-primary"><?php the_author(); ?></h5>
                                            </a>
                                            <div class="flex items-center gap-3">
                                                <span class="w-1 h-1 bg-black/20 rounded-full"></span>
                                                <span class="text-black/60 text-sm font-medium"><?php echo estimate_reading_time(get_the_ID()); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="mt-12 flex justify-center">
                        <a id="load-more" href="<?php //echo get_permalink(get_option('page_for_posts')); ?>" class="flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                            <span>View more</span>
                            <span>
                                <svg class="w-8 h-8 fill-current">
                                    <use xlink:href="#icon-menudots"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="basis-1/3">
                    <!-- Add sidebar content here -->

                    <div class="mb-10 w-10/12">
                        <h4 class="font-quicksand text-lg font-bold leading-relaxed border-b border-black/10">Explore category</h4>
                        <ul class="mt-5 flex flex-wrap gap-x-1">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) { ?>
                                <li class="mr-1">
                                    <a href="<?php echo get_category_link($category->term_id); ?>" class="block text-sm font-semibold text-secondary border border-primary bg-primary/10 mb-2 rounded-lg px-4 py-1"><?php echo $category->name; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="mt-2">
                            <a href="#" class="text-sm text-primary border-b border-primary inline-block font-semibold">View all categories</a>
                        </div>
                    </div>

                    <div class="mb-10 w-10/12">
                        <h4 class="font-quicksand text-lg font-bold leading-relaxed border-b border-black/10">Most popular</h4>
                        <div class="mt-5">
                            <?php
                            $popular_query = new WP_Query(array(
                                'post_type' => 'post',
                                'meta_key' => 'post_views_count',
                                'orderby' => 'meta_value_num',
                                'posts_per_page' => 4
                            ));

                            if ($popular_query->have_posts()) :
                                while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
                                    <div class="flex gap-5 mb-6">
                                        <div class="basis-1/3 bg-gray-light rounded-md overflow-hidden">
                                            <a href="<?php the_permalink(); ?>" class="block">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('full', array('class' => 'w-full h-full object-cover'));
                                                } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog_thumbnail_img.jpg" alt="<?php the_title(); ?>" class="w-full h-full object-cover" />
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="basis-8/12">
                                            <a href="<?php the_permalink(); ?>">
                                                <h5 class="text-sm font-bold"><?php the_title(); ?></h5>
                                                <div class="text-xs font-medium text-black/60 mt-1"><?php echo get_the_date(); ?></div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="mb-16 w-10/12">
                        <h4 class="font-quicksand text-lg font-bold leading-relaxed border-b border-black/10">Popular tags</h4>
                        <ul class="mt-5 inline-flex gap-4 flex-wrap">
                            <?php
                            $tags = get_tags();
                            foreach ($tags as $tag) { ?>
                                <li>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="inline-block border border-black/10 px-4 py-2 rounded-md text-sm text-black/60 font-semibold hover:bg-primary hover:!text-white hover:border-primary transition-all duration-500 delay-200"><?php echo $tag->name; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part("template-parts/home-page/module","query");?>
    <p>&nbsp;</p>
    <?php get_template_part("template-parts/home-page/module","location");?>
</main>

<?php get_footer(); ?>
