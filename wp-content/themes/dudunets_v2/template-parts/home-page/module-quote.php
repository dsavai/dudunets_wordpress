<?php
?>
<section class="module module--quote border-b-[1px] border-b-secondary/10 mb-4">
    <div class="container mx-auto px-4 lg:px-0">
        <div class="relative pt-8 pb-5">
            <div class="absolute z-10 top-[-20px] bg-white px-5 pt-3 rounded-lg">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 fill-current">
                        <use xlink:href="#icon-document"></use>
                    </svg>
                    <span class="text-sm font-bold">Request a quote now</span>
                </div>
            </div>
            <div class="mt-0 lg:mt-5">
                <form id="front_page_quote_form" method="post">
                    <div class="block lg:flex lg:gap-6 items-center w-full">
                        <div class="relative mb-2 lg:mb-0">
                            <label for="fs-name" class="block text-sm font-semibold mb-1">Full name<span class="text-red">*</span></label>
                            <input name="full_name" id="fs-name" type="text" placeholder="Enter your full names" class="w-full lg:w-[300px] h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                        </div>
                        <div class="relative mb-2 lg:mb-0">
                            <label for="phone-number"class="block text-sm font-semibold mb-1">Phone number<span class="text-red">*</span></label>
                            <input name="mobile" id="phone-number" type="text" placeholder="Enter your phone number" class="w-full lg:w-[300px] h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                        </div>
                        <div class="relative mb-2 lg:mb-0">
                            <label for="email"class="block text-sm font-semibold mb-1">Email<span class="text-red">*</span></label>
                            <input name="email" id="email" type="text" placeholder="Enter your email" class="w-full lg:w-[300px] h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                        </div>
                        <div class="relative mb-2 lg:mb-0">
                            <label for="location"class="block text-sm font-semibold mb-1">Location<span class="text-red">*</span></label>
                            <input name="location" id="location" type="text" placeholder="Enter your location" class="w-full lg:w-auto h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                        </div>
                        
                        <div class="relative top-[5px] lg:top-[10px] lg:block flex justify-end">
                            <button type="submit" class="flex justify-center items-center bg-secondary text-primary rounded-md w-[50px] h-[40px]">
                                <span class="sr-only">Submit quote form</span>
                                <svg class="w-8 h-8 fill-current">
                                    <use xlink:href="#icon-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
