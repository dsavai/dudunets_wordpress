<?php
?>
<div class="border border-black/10 mb-5">
    <h4 class="font-quicksand text-lg font-bold py-3 px-8 leading-relaxed border-b border-black/10">Enquire Now!</h4>
    <div class="pb-6 px-8 mt-4">
        <form class="mt-1" id="sidebar_form">
            <div class="flex flex-col mb-3">
                <label for="form_name" class="block text-sm font-semibold mb-1">
                    <span>Name</span>
                    <span class="text-red">*</span>
                </label>
                <input name="full_name" id="form_name" type="text" placeholder="Enter your name" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 text-sm font-medium placeholder:text-black/70" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="form_email" class="block text-sm font-semibold mb-1">
                    <span>Email address</span>
                    <span class="text-red">*</span>
                </label>
                <input name="email" id="form_email" type="text" placeholder="Enter your email" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 text-sm font-medium placeholder:text-black/70" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="form_phone" class="block text-sm font-semibold mb-1">
                    <span>Phone Number</span>
                    <span class="text-red">*</span>
                </label>
                <input name="mobile" id="form_phone" type="text" placeholder="Enter your phone number" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 text-sm font-medium placeholder:text-black/70" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="form_location" class="block text-sm font-semibold mb-1">
                    <span>Location</span>
                    <span class="text-red">*</span>
                </label>
                <input name="location" id="form_location" type="text" placeholder="Enter your location" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 text-sm font-medium placeholder:text-black/70" />
            </div>
            <div class="flex flex-col mb-3">
                <label for="form_message" class="block text-sm font-semibold mb-1">
                    <span>Message</span>
                    <span class="text-red">*</span>
                </label>
                <textarea name="message" id="form_message" placeholder="Write your message" class="w-full h-[100px] border-[1px] border-secondary/10 py-2 px-5 text-sm font-medium placeholder:text-black/70"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex gap-3 justify-center items-center w-full font-semibold bg-primary p-2 text-secondary px-8 py-3 hover:bg-secondary hover:text-primary transition-all duration-100 delay-200">
                    <span>Send message</span>
                    <span>
                        <svg class="w-6 h-6 fill-current"><use xlink:href="#icon-right"></use>
                        </svg>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
