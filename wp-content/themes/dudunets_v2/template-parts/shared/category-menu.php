<?php
$dudu_net_types = get_net_types("DESC");
?>
<?php if (!empty($dudu_net_types)):?>
<ul class="text-sm font-medium leading-8">
    <?php foreach ($dudu_net_types as $type):?>
    <li>
        <a href="<?php echo esc_url(get_term_link($type))?>" class="hover:text-primary hover:border-b hover:border-primary truncate w-full block"><?php echo $type->description?></a>
    </li>

    <?php endforeach;?>
</ul>
<?php endif;?>
