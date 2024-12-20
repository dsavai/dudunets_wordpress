<?php
?>
<div class="border border-black/10 rounded-xl mb-5 pt-5 pb-6 px-8">
    <h4 class="text-md font-semibold border-b border-black/10 leading-loose">Enquire Now!</h4>
    <form class="mt-6" id="sidebar_form">
        <div class="flex flex-col mb-3">
            <label for="form_name">
                <span>Name</span>
                <span class="text-red">*</span>
            </label>
            <input name="full_name" id="form_name" type="text" placeholder="Enter your name" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
        </div>
        <div class="flex flex-col mb-3">
            <label for="form_email">
                <span>Email address</span>
                <span class="text-red">*</span>
            </label>
            <input name="email" id="form_email" type="text" placeholder="Enter your email" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
        </div>
        <div class="flex flex-col mb-3">
            <label for="form_phone">
                <span>Phone Number</span>
                <span class="text-red">*</span>
            </label>
            <input name="mobile" id="form_phone" type="text" placeholder="Enter your phone number" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
        </div>
        <div class="flex flex-col mb-3">
            <label for="form_location">
                <span>Location</span>
                <span class="text-red">*</span>
            </label>
            <input name="location" id="form_location" type="text" placeholder="Enter your location" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
        </div>
        <div class="flex flex-col mb-3">
            <label for="form_message">
                <span>Message</span>
                <span class="text-red">*</span>
            </label>
            <textarea name="message" id="form_message" placeholder="Write your message" class="w-full h-[100px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm"></textarea>
        </div>
<<<<<<< HEAD
        <div class="g-recaptcha" data-sitekey="6LdTrSMqAAAAACWpRLZSMJUHrDNxaZ0qFYNM75D9"></div>
=======
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
        <div>
            <button type="submit" class="flex w-full gap-3 justify-center items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">Send message</button>
        </div>
    </form>
</div>
