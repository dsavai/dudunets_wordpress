<?php
$the_post = get_post(750);
$image = get_post_thumbnail($the_post->ID);
$cta = get_field("cta",$the_post->ID);
?>
<section class="module module--order-now">
    <div>
        <div class="relative bg-black w-full h-[500px] bg-no-repeat bg-cover bg-fixed bg-center" style="background-image: url(<?php echo $image['image'][0]?>);">
            <div class="relative h-full">
                <div class="absolute inset-0 w-full top-[25%]">
                    <div class="container mx-auto text-white">
                        <div class="lg:w-4/12 lg:pl-10 px-4 lg:px-0">
                            <h2 class="text-3xl font-400"><?php echo $the_post->post_title?></h2>
                            <p><?php echo $the_post->post_excerpt?></p>
                            <a href="<?php echo $cta['url']?>" class="inline-flex gap-3 items-center mt-6 font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                                <span><?php echo $cta['title']?></span>
                                <span>
                                    <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
