<?php
$post_id = 224;
$the_post = get_post_by_id(224);
$image = get_post_thumbnail($the_post->ID);
?>

<section class="module module--what-we-do">
    <div class="py-24 px-24">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-8">
                <div class="w-[480px] h-[480px]">
                    <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-fullh-full object-cover" />
                </div>
                <?php echo apply_filters("the_content", $the_post->post_content)?>
            </div>
        </div>
    </div>
</section>
