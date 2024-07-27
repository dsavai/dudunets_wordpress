<?php
$args = array(
    'numberposts' => 3,
    'post_type'   => 'help-articles',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$articles = get_posts( $args );
?>



<?php if (!empty($articles)):?>
<section class="module module--help">
    <div class="mt-[80px] mb-[80px]">
        <div class="w-[1140px] mx-[auto]">
            <div class="mx-[auto] text-center w-[600px] mb-[50px]">
                <h2 class="text-[36px] text-primary-900">Need help?</h2>
            </div>
            <div class="grid grid-cols-3 gap-[30px]">



                    <?php foreach ($articles as $article):
                        $links = get_field('extra_links',$article->ID);
                        if (!empty($links)){
                            $links_array = explode("|",$links);
                        }

                        echo apply_filters("the_content",$article->post_content);
                        ?>

                    <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

<?php endif;?>
