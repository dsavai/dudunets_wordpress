<?php
$downloads = get_custom_posts_by_slug("downloads","ASC");
?>

<?php if(!empty($downloads)):?>
<div class="border border-black/10 mb-5">
    <h4 class="font-quicksand text-lg font-bold py-3 px-8 leading-relaxed border-b border-black/10">Download resources</h4>
    <div class="pb-2 px-8 mt-4">
        <ul>
            <?php foreach ($downloads as $download):?>
                <li class="mb-3">
                    <a target="_blank" href="<?php echo get_field("document",$download->ID)?>" class="inline-flex items-center">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="ml-2 inline-block font-semibold text-sm  hover:text-primary hover:border-b hover:border-primary"><?php echo $download->post_title?></span>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<?php endif;?>
