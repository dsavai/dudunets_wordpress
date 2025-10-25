<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>
    <main class="main">
        <section class="module module--banner pt-[30px]">
            <div>
                <div class="container mx-auto">
                    <div class="flex items-center">
                        <div class="w-full lg:w-6/12">
                            <h1 class="text-5xl font-bold leading-12 mb-6">We Provide Best Quality Mosquito Screens</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quo, alias molestiae harum magnam voluptatem et dicta voluptatibus aliquam, laudantium distinctio expedita fugiat laboriosam odit totam repellendus ipsa. Illum, fuga.</p>
                            <div>
                                <a href="#" class="inline-flex gap-3 items-center mt-6 font-semibold bg-[#0CBD92] p-2 text-white px-8 py-3 hover:bg-secondary hover:text-primary">
                                    <span>Contact us</span>
                                    <span>
                                        <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-6/12">
                            <div class="w-full lg:h-[400px] overflow-hidden ml-10">
                                <img src="<?php echo $image['image'][0]?>" alt="<?php echo $image['alt']?>" class="w-full h-full" />    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8] py-16 my-16">
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-3 text-3xl font-bold">Our Promise & Mission</h2>
                    <div class="w-[80%]">
                        <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quisquam deleniti, provident sunt id dignissimos molestiae sint temporibus mollitia exercitationem.</p>
                        <p class="mb-6">Our mission is to provide high-quality products that combine performance with value pricing, while establishing a successful relationship with our customers and our suppliers.</p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-10 mt-10">
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Customer Centricity</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Accountability</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Innovation</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-10 text-3xl font-bold">Our Management Team</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-10">
                        <div class="mb-6">
                            <div>
                                <img src="https://img.freepik.com/free-photo/portrait-african-american-man_23-2149072179.jpg" alt="Team Member 1" />
                                <h3 class="mt-2 text-lg font-semibold">John Doe</h3>
                                <p class="text-black/60 text-sm">CEO</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div>
                                <img src="https://img.freepik.com/free-photo/portrait-african-american-man_23-2149072179.jpg" alt="Team Member 1" />
                                <h3 class="mt-2 text-lg font-semibold">John Doe</h3>
                                <p class="text-black/60 text-sm">CEO</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div>
                                <img src="https://img.freepik.com/free-photo/portrait-african-american-man_23-2149072179.jpg" alt="Team Member 1" />
                                <h3 class="mt-2 text-lg font-semibold">John Doe</h3>
                                <p class="text-black/60 text-sm">CEO</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div>
                                <img src="https://img.freepik.com/free-photo/portrait-african-american-man_23-2149072179.jpg" alt="Team Member 1" />
                                <h3 class="mt-2 text-lg font-semibold">John Doe</h3>
                                <p class="text-black/60 text-sm">CEO</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div>
                                <img src="https://img.freepik.com/free-photo/portrait-african-american-man_23-2149072179.jpg" alt="Team Member 1" />
                                <h3 class="mt-2 text-lg font-semibold">John Doe</h3>
                                <p class="text-black/60 text-sm">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#f8f8f8] py-16 my-16">
                <div class="container mx-auto">
                    <h2 class="mt-1 mb-3 text-3xl font-bold">Why Choose Us?</h2>
                    <div class="w-[80%]">
                        <p class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quisquam deleniti, provident sunt id dignissimos molestiae sint temporibus mollitia exercitationem.</p>
                        <p class="mb-6">Our mission is to provide high-quality products that combine performance with value pricing, while establishing a successful relationship with our customers and our suppliers.</p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-10 mt-10">
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Customer Centricity</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Accountability</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                        <div class="bg-white p-8 border border-gray-light text-center">
                            <h3 class="mt-2 text-xl font-semibold mb-2">Innovation</h3>
                            <p class="text-[15px]">We are committed to delivering products that meet the highest standards of quality and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10">
                        <div>
                            <h2 class="mt-1 mb-3 text-3xl font-bold">The Impact</h2>
                            <div class="w-[80%]">   
                                <p class="mb-6">Our mission is to provide high-quality products that combine performance with value pricing, while establishing a successful relationship with our customers and our suppliers.</p>
                                <p class="mb-6">Since our founding in 2000, we have been dedicated to innovation and excellence in our industry.</p>
                            </div>
                        </div>
                        <div>
                            <img src="https://img.freepik.com/free-photo/young-happy-woman-with-curly-hair_23-2149435152.jpg" alt="The Impact" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
