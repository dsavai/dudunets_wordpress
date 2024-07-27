<?php
$args = array(
    'numberposts' => 3,
    'post_type'   => 'dudunet-types',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$types = get_posts( $args );
?>

<section class="module module--types">
    <div class="mt-[80px] mb-[80px]">
        <div class="w-[1140px] mx-[auto]">
            <div class="grid grid-cols-3 gap-[20px]">

                <?php if(!empty($types)):?>
                    <?php foreach ($types as $type):
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $type->ID ), 'single-post-thumbnail' );
                        ?>
                        <div class="relative">
                            <a href="#">
                                <div class="h-[360px] overflow-hidden">
                                    <img src="<?php echo $image[0]?>" alt="" class="object-cover" />
                                </div>
                                <div class="font-bold text-center mt-[15px] hover:underline"><?php echo $type->post_title?></div>
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
