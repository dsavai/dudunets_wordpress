<?php
get_header();
$page = get_queried_object();
$image = get_post_thumbnail($page->ID);
?>

    <main class="main">
        <section class="module module--banner">
            <div class="w-full h-[300px] bg-cover bg-no-repeat relative" style="background-image: url(<?php echo $image['image'][0]?>);">
                <div class="bg-black/40 absolute inset-0"></div>
                <div class="flex flex-col justify-center items-center h-full w-full relative z-20 text-white">
                    <div class="flex justify-center gap-2 border border-white bg-white/10 px-5 py-2 rounded-full">
                        <span>
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-documentfile"></use>
                            </svg>
                        </span>
                        <span class="text-sm font-semibold uppercase"><?php echo $page->post_title?></span>
                    </div>
                    <h1 class="px-4 lg:px-0 text-4xl md:text-6xl font-bold mt-4"><?php echo $page->post_excerpt?></h1>
                </div>
            </div>
        </section>
        <section class="module module--send-message">
            <div class="container mx-auto">
                <div class="lg:mx-20 lg:mt-10 mb-5 lg:mb-10 px-4 lg:px-0">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-24">
                        <div class="py-8 lg:py-16">
                            <div class="mb-10">
                                <h4 class="text-sm uppercase text-primary font-bold mb-2">WRITE TO US</h4>
                                <h2 class="text-3xl font-bold">Send us a message</h2>
                                <p class="text-black/60">Fill the form below and one of our service agent will get back to you</p>
                                <div>
                                    <form class="mt-6" id="contact_form">
                                        <div class="flex flex-col mb-3">
                                            <label for="form_name">
                                                <span class="text-sm font-semibold">Name</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="full_name" id="form_name" type="text" placeholder="Enter your name" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_email">
                                                <span class="text-sm font-semibold">Email address</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="email" id="form_email" type="text" placeholder="Enter your email" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_phone">
                                                <span class="text-sm font-semibold">Phone Number</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="mobile" id="form_phone" type="text" placeholder="Enter your phone number" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_location">
                                                <span class="text-sm font-semibold">Location</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <input name="location" id="form_location" type="text" placeholder="Enter your location" class="w-full h-[45px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" />
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <label for="form_message">
                                                <span class="text-sm font-semibold">Message</span>
                                                <span class="text-red">*</span>
                                            </label>
                                            <textarea name="message" id="form_message" placeholder="Write your message" class="w-full h-[100px] border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm"></textarea>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6LdTrSMqAAAAACWpRLZSMJUHrDNxaZ0qFYNM75D9"></div>
                                        <div class="mt-6">
                                            <button type="submit" class="flex w-full gap-3 justify-center items-center bg-gradient-to-r from-primary to-secondary p-2 text-white px-8 py-3 rounded-full hover:from-secondary hover:to-primary transition-all duration-500 delay-500">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       <?php echo apply_filters("the_contact",$page->post_content)?>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part("template-parts/home-page/module","query");?>
        <?php get_template_part("template-parts/home-page/module","location");?>
    </main>

<?php
get_footer();
