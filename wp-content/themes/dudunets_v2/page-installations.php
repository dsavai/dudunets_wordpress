<?php
$terms = get_terms(array(
    'taxonomy' => 'net_type',
    'hide_empty' => false,
));

$first_term = $terms[0];
$the_posts = get_posts_by_taxonomy('installation','net_type',$first_term->slug);
get_header();
?>
<main id="mainMain" class="module">
    <div class="container mx-auto">
        <div class="my-8">
            <h2 class="mb-2 text-3xl font-400">Our installations</h2>
            <p class="text-black/60 font-medium leading-relaxed">Lorem ipsum dolor sit amet consectetur. Fermentum feugiat risus ac tristique pharetra at leo vitae.</p>
        </div>
        <div class="mb-4">
            <form>
            <?php if (!empty($terms)):?>
            <select class="w-[200px] h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" id="installation_chooser">
                <?php foreach ($terms as $term):?>
                    <option value="<?php echo $term->slug?>" data-taxonomy="net_type" data-term="<?php echo $term->slug?>" data-post_type="installation" data-container="#installations_container" data-page="1"><?php echo $term->name?></option>
                <?php endforeach;?>
            </select>
            <?php endif;?>
            </form>
        </div>
        <div class="section--installations">
            <div class="grid grid-cols-2 gap-x-6 gap-y-10" id="installations_container">
                <?php if (!empty($the_posts)):?>
                    <?php foreach ($the_posts as $i):
                        $image = get_post_thumbnail($i->ID);
                        ?>
                        <div class="first_posts">
                            <a href="<?php get_the_permalink($i->ID)?>">
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
                    <?php endforeach;?>
                <?php endif;?>
            </div>
            <div class="mt-12 flex justify-center">
                <a href="#"  data-taxonomy="net_type" data-term="<?php echo $first_term->slug?>" data-post_type="installation" data-container="#installations_container" class="load-more-btn flex gap-3 items-center font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200" id="load_more_installations">
                    <span>Load more</span>
                    <span>
                        <svg class="w-8 h-8 fill-current">
                            <use xlink:href="#icon-menudots"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();