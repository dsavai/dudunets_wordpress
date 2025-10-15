<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section class="module module--send-message px-4 lg:px-0 pb-8 lg:pb-0">
            <div class="container mx-auto lg:w-[700px]">
                <div class="lg:pb-8">
                    <div class="">
                        <div class="lg:pt-16">
                            <div class="mb-10">
                                <h4 class="font-quicksand text-gray uppercase text-xs font-bold">WRITE TO US</h4>
                                <h2 class="mt-1 mb-2 text-3xl font-semibold">Send us a message</h2>
                                <p class="text-black/60 font-medium">Fill the form below and one of our service agent will get back to you</p>
                                <div>
                                    <form class="mt-6" id="contact_form">
                                        <div class="flex flex-col mb-3">
                                            <label for="form_name">
                                                <span class="text-sm font-semibold">Name</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="full_name" id="form_name" type="text" placeholder="Enter your name" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_email">
                                                <span class="text-sm font-semibold">Email address</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="email" id="form_email" type="text" placeholder="Enter your email" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_phone">
                                                <span class="text-sm font-semibold">Phone Number</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="mobile" id="form_phone" type="text" placeholder="Enter your phone number" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_location">
                                                <span class="text-sm font-semibold">Location</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="location" id="form_location" type="text" placeholder="Enter your location" class="w-full h-[45px] border-[1px] border-black/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_message">
                                                <span class="text-sm font-semibold">Message</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <textarea name="message" id="form_message" placeholder="Write your message" class="w-full h-[100px] border-[1px] border-black/10 py-2 px-5 rounded-lg text-sm"></textarea>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6LdTrSMqAAAAACWpRLZSMJUHrDNxaZ0qFYNM75D9"></div>
                                        <div class="">
                                            <button type="submit" class="flex bg-secondary text-white font-medium px-6 py-3  hover:bg-primary transition">
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
                        </div>
                       <?php echo apply_filters("the_contact",$page->post_content)?>
                    </div>
                </div>
            </div>
    </main>

<?php
get_footer();
