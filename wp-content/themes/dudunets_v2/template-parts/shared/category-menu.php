<?php
$dudu_net_types = get_net_types("DESC");
?>
<?php if (!empty($dudu_net_types)):?>
<ul class="text-sm leading-loose text-black/60">
    <?php foreach ($dudu_net_types as $type):?>
    <li>
        <a href="<?php echo esc_url(get_term_link($type))?>" class="text-black/70 hover:text-primary hover:border-b hover:border-primary"><?php echo $type->description?></a>
    </li>

    <?php endforeach;?>
</ul>
<?php endif;?>
