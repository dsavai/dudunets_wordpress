<?php
$post_id = 207;
$post = get_post_by_id($post_id);
$three_value_input_data = get_post_meta($post->ID, 'three_value_input', true);
?>

<div class="module-our-processes">
    <div class="container mx-auto px-4 lg:px-0 pb-8 lg:pt-[110px] lg:pb-14">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-14">
            <div class="lg:w-11/12 mt-6 reveal slide-left reveal-transition">
                <h5 class="font-medium text-secondary">Only Manufacturer in Kenya</h5>
                <h1 class="mt-1 mb-2 text-3xl font-bold">Trackless Pleated Mesh Door</h1>
                <div class="text-black/60 font-normal leading-relaxed">
                    <p class="mb-4">Trackless Pleated Mesh Doors are the modern solution for mosquito and insect protection without the inconvenience of a bottom track. Ideal for homes, offices, and balconies, these doors offer a sleek, seamless look while maintaining high functionality.</p>
                    <p class="mb-4">Trackless Pleated Mesh Doors are the modern solution for mosquito and insect protection without the inconvenience of a bottom track. Ideal for homes, offices, and balconies, these doors offer a sleek, seamless look while maintaining high functionality.</p>
                    <p class="mb-4">Trackless Pleated Mesh Doors are the modern solution for mosquito and insect protection without the inconvenience of a bottom track. Ideal for homes, offices, and balconies, these doors offer a sleek, seamless look while maintaining high functionality.</p>
                </div>
                <a class="inline-flex gap-1 items-center font-semibold" href="<?php echo $cta['url']?>">
                    <span>Learn more</span>
                    <span>
                        <svg class="w-[20px] h-[20px] fill-current rotate-[-90deg]">
                            <use xlink:href="#icon-arrowdown"></use>
                        </svg>
                    </span>
                </a>
            </div>
             <div class="relative pb-6 lg:pb-0 reveal slide-right reveal-transition">
                <div class="relative block">
                    <div class="w-full lg:h-[570px] overflow-hidden">
                        <img src="http://localhost/dudunets/wp-content/uploads/2024/07/feature_product_03.jpg" class="w-full h-full" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
