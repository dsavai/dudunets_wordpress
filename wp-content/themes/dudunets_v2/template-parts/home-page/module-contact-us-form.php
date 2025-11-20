<div id="getQuote" class="module-contact">
    <div class="container mx-auto px-4 lg:px-0 pb-8 lg:pt-[110px]">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-10">
            <div class="relative pb-6 lg:pb-0 h-full flex items-center justify-center reveal slide-left reveal-transition">
                <div class="xl:w-[510px] lg:w-[450px] overflow-hidden hidden lg:block">
                    <img src="<?php echo get_template_directory_uri()?>/dist/images/mr-dudunets.png" class="w-full h-full" />
                </div>
            </div>
            <div class="lg:w-11/12 mt-6 reveal slide-right reveal-transition">
                <h5 class="font-medium text-secondary">Have you Any Question?</h5>
                <h1 class="mt-1 mb-2 text-3xl font-bold">You Can Contact Us</h1>
                <div>
                 <form id="front_page_quote_form">
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-5">
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="name">Name<span class="text-[#c95050]">*</span></label>
                            <input type="text" name="full_name" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Enter your name" />
                        </div>
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="phone">Phone<span class="text-[#c95050]">*</span></label>
                            <input type="text" name="mobile" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Enter your phone number" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-5">
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="email">Email<span class="text-[#c95050]">*</span></label>
                            <input type="email" name="email" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Enter your email" />
                        </div>
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="service">Select Service<span class="text-[#c95050]">*</span></label>
                            <select class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" name="service">
                                <option>Select Service</option>
                                <option>Service 1</option>
                                <option>Service 2</option>
                                <option>Service 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-5">
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="city">City<span class="text-[#c95050]">*</span></label>
                            <input type="text" name="location" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Enter your city" />
                        </div>
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="area">Area<span class="text-[#c95050]">*</span></label>
                            <input type="text" name ="area" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Enter your area" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:gap-5">
                        <div class="mb-3">
                            <label class="block mb-2 font-medium" for="message">Message<span class="text-[#c95050]">*</span></label>
                            <textarea name="message" class="w-full h-[100px] border-[1px] border-black/10 py-2 px-5 text-sm" placeholder="Write comment..."></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:gap-10">
                        <button class="bg-secondary text-white font-medium px-6 py-3 hover:bg-primary transition">Submit Now</button>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>