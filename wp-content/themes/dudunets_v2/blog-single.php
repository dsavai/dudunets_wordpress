<?php get_header(); ?>
<main id="mainMain" class="module">
    <section class="module module--blog">
        <header class="mt-[80px]">
            <div class="w-[745px] mx-[auto]">
                <div class="flex justify-center text-[16px] mb-[40px]">
                    <span class="text-primary-900 font-[400] underline">
                        <a href="<?php echo home_url(); ?>">Home</a>
                    </span>
                    <span class="inline-block mx-[5px]">/</span>
                    <span><?php the_title(); ?></span>
                </div>
                <h1 class="text-[38px] leading-[40px] text-primary-900"><?php the_title(); ?></h1>
                <div class="mt-[20px] mb-[45px] flex font-light">
                    <time><?php echo get_the_date('F Y'); ?></time>
                    <span class="mx-[5px]">in</span>
                    <ul class="flex">
                        <?php
                        $categories = get_the_category();
                        foreach($categories as $category) {
                            echo '<li class="ml-[5px]"><a href="' . get_category_link($category->term_id) . '" class="text-primary-900 underline">' . $category->name . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </header>
        <section class="page--module">
            <article>
                <div class="w-[745px] mx-[auto]">
                    <div class="mb-[40px]">
                        <?php if (has_post_thumbnail()) : ?>
                            <div>
                                <?php the_post_thumbnail('full', ['class' => '', 'width' => '770', 'height' => '430', 'title' => get_the_title()]); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-[24px] font-[600] text-primary-900 mb-[15px]"><?php the_author(); ?></h3>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <aside>
                <div class="w-[1240px] mx-[auto]">
                    <div class="flex justify-between items-center mt-[60px] mb-[20px]">
                        <h3 class="text-[30px] text-primary-900">Related Posts</h3>
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="text-primary-900 inline-block font-bold border-secondary border-2 rounded-full pt-[8px] pb-[10px] px-[50px] transition delay-200 ease-in-out hover:bg-secondary hover:text-primary-900">See all posts</a>
                    </div>
                    <div class="grid grid-cols-3 gap-[30px]">
                        <?php
                        $related = new WP_Query(array(
                            'category__in' => wp_get_post_categories($post->ID),
                            'numberposts' => 3,
                            'post__not_in' => array($post->ID)
                        ));
                        if ($related->have_posts()) : while ($related->have_posts()) : $related->the_post(); ?>
                            <div class="border-secondary border-[1px] rounded-[4px] h-full flex flex-col">
                                <div class="h-[200px]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="pb-[40px] px-[30px]">
                                    <div class="flex items-center mt-[25px]">
                                        <?php $category = get_the_category(); ?>
                                        <div class="text-[14px] text-primary-900 font-[600] border-primary-900 border-[1px] rounded-full px-[15px] pt-[3px] pb-[4px] mr-[10px]"><?php echo $category[0]->cat_name; ?></div>
                                        <span class="text-[15px] text-gray-500"><?php the_time('F j, Y'); ?></span>
                                        <span class="bg-gray-500 h-[17px] w-[1px] mx-[10px]"></span>
                                        <span class="text-[15px] text-gray-500"><?php echo estimate_reading_time(get_the_ID()); ?></span>
                                    </div>
                                    <h4 class="text-[20px] font-semibold mt-[10px] text-primary-900 hover:underline">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                </div>
                            </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </aside>
        </section>
    </section>
</main>
<?php get_footer(); ?>
