<?php
$id = $args["post_id"];
$tags = get_post_tags($id);
?>
<div class="mb-5 border-b border-black/10 pb-5 tags">
    <h4 class="mb-3 font-quicksand text-lg font-bold leading-relaxed">Tags</h4>
    <?php if (!empty($tags)):?>
        <ul class="inline-flex gap-4 flex-wrap">
            <?php foreach ($tags as $tag):?>
                <li>
                    <a href="<?php echo get_tag_link($tag->term_id)?>" class="inline-block border border-black/10 px-4 py-2 rounded-md text-sm text-black/60 font-semibold hover:bg-primary hover:!text-white hover:border-primary transition-all duration-500 delay-200"><?php echo $tag->name?></a>
                </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
</div>
