<?php
$args = array(
    'numberposts' => 1,
    'post_type'   => 'customer-testimonial',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$testimonials = get_posts( $args );
if (!empty($testimonials)){
    $testimonial = $testimonials[0];
}
?>
<section class="module module--testimonial">
    <div class="mt-[80px] mb-[80px]">
        <div class="w-[1140px] mx-[auto]">
            <div class="bg-secondary px-[50px] py-[120px] bg-no-repeat bg-left" style="background-image: url(images/testimonal_pattern.svg);">
                <div class="ml-[20%]">
                    <h2 class="text-[30px] font-semibold">What our customers say</h2>
                    <p class="mt-[10px] mb-[20px] text-[18px]">“<?php echo $testimonial->post_content?>.”</p>
                    <div class=" font-semibold border-t-[1px] border-green-light mt-[20px] pt-[10px]"><?php echo $testimonial->post_title?></div>
                </div>
            </div>
        </div>
    </div>
</section>
