<?php
$clients = get_custom_posts_by_slug('clients','ASC');
?>

<?php if (!empty($clients)):?>
    <section class="module module--clients">
        <div class="my-10 lg:my-20">
            <div class="container mx-auto px-4 lg:px-0">
                <div class="text-center">
<<<<<<< HEAD
                    <h5 class="text-md font-bold">We have the trust of 500+ companies.</h5>
=======
                    <h5 class="text-md font-bold">We have the trust of 10.000+ companies.</h5>
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                    <div class="mt-8">
                        <div class="swiper clientLogos">
                            <div class="swiper-wrapper">

                                <?php foreach ($clients as $client):
                                    $image = get_post_thumbnail($client->ID);
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="flex justify-center items-center py-6 h-24 border border-black/10 rounded-xl">
                                            <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-14 h-14 object-cover" />
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
