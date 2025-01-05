<?php
$categories = get_net_types("ASC");
?>
<aside class="module module--blog-aside basis-1/3">
    <div class="mt-6">
        <div class="border border-black/10 mb-5">
            <?php if (!empty($categories)):?>
            <h4 class="font-quicksand text-lg font-bold py-3 px-8 leading-relaxed border-b border-black/10">Our Products</h4>
            <div class="pb-4 px-8 mt-4">
                <ul>
                    <?php foreach ($categories as $term):?>
                        <li class="mb-3">
                            <a href="<?php echo esc_url(get_term_link($term))?>" class="inline-flex items-center hover:text-primary hover:border-b hover:border-primary">
                                <span>
                                    <svg class="w-3 h-3 fill-current">
                                        <use xlink:href="#icon-arrowright-alt"></use>
                                    </svg>
                                </span>
                                <span class="ml-2 inline-block font-semibold text-sm"><?php echo $term->description?></span>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <?php endif;?>
        </div>
        <?php get_template_part("template-parts/forms/side-bar","form")?>
        <?php get_template_part("template-parts/shared/file","downloads")?>
    </div>
</aside>
