<?php
$categories = get_net_types("ASC");
?>
<aside class="module module--blog-aside basis-1/3">
    <div class="mt-6">
        <div class="border border-black/10 rounded-xl mb-5 pt-5 pb-6 px-8">
            <?php if (!empty($categories)):?>
            <h4 class="text-md font-semibold border-b border-black/10 leading-loose">Our Products</h4>
            <ul class="mt-6">
                <?php foreach ($categories as $term):?>
                    <li class="mb-3">
                        <a href="<?php echo esc_url(get_term_link($term))?>" class="inline-flex items-center hover:text-primary hover:border-b hover:border-primary">
                                            <span>
                                                <svg class="w-3 h-3 fill-current">
                                                    <use xlink:href="#icon-arrowright-alt"></use>
                                                </svg>
                                            </span>
                            <span class="ml-4 inline-block font-semibold text-sm"><?php echo $term->description?></span>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
            <?php endif;?>
        </div>
        <?php get_template_part("template-parts/forms/side-bar","form")?>
        <?php get_template_part("template-parts/shared/file","downloads")?>
    </div>
</aside>
