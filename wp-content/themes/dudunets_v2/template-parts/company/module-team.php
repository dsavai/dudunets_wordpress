<?php
$team_members = get_custom_posts_by_slug("team_members","ASC");
?>

<?php if (!empty($team_members)):?>
<section class="module module--team">
    <div>
        <div class="container mx-auto">
            <h2 class="mt-1 mb-6 text-3xl font-bold">Meet our expert team</h2>
            <div class="grid grid-cols-4 gap-6">
                <?php foreach ($team_members as $team_member):
                    $image = get_post_thumbnail($team_member->ID);
                    ?>
                    <div class="mb-3">
                        <div class="w-full h-[350px] overflow-hidden rounded-lg mb-5">
                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full object-cover" />
                        </div>
                        <div class="text-sm text-black/60"><?php echo get_field("designation")?></div>
                        <h4 class="text-lg font-bold"><?php echo $team_member->post_title?></h4>
                    </div>
                 <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>