<?php
$downloads = get_custom_posts_by_slug("downloads","ASC");
?>

<?php if(!empty($downloads)):?>
<div class="border border-black/10 rounded-xl mb-5 pt-5 pb-6 px-8">
    <h4 class="text-md font-semibold border-b border-black/10 leading-loose">Download resources</h4>
    <ul class="mt-6">
        <?php foreach ($downloads as $download):?>
            <li class="mb-3">
                <a target="_blank" href="<?php echo get_field("document",$download->ID)?>" class="inline-flex items-center">
                                            <span>
                                                <svg class="w-5 h-5 fill-current">
                                                    <use xlink:href="#icon-documentfile"></use>
                                                </svg>
                                            </span>
                    <span class="ml-4 inline-block font-semibold text-sm  hover:text-primary hover:border-b hover:border-primary"><?php echo $download->post_title?></span>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</div>
<?php endif;?>
