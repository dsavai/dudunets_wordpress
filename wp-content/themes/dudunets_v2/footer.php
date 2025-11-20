<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dudunets
 */

?>


<footer class="footer bg-gray-light ">
    <div class="container mx-auto">
        <!--- whatsApp -->
        <div class="fixed bottom-5 right-3 z-50">
            <div class="relative">
                <div>
                    <img src="<?php echo get_template_directory_uri(). '/dist/images/we_are_here_image.svg' ?>" style="width: 124px; height: 79px;" />
                </div>
                <a href="https://api.whatsapp.com/send?phone=254721108407" target="_blank" class="block absolute top-[28px] right-[20px]">
                    <div class="flex justify-center items-center w-[60px] h-[60px] cursor-pointer rounded-full bg-[#25d366] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" height="32px" width="32px" role="img" alt="Chat icon" aria-labelledby="openIconTitle openIconDesc" class="tawk-min-chat-icon"><title id="openIconTitle">Opens WhatsApp Chat</title><desc id="openIconDesc">This icon Opens the WhatsApp chat window.</desc><path fill-rule="evenodd" clip-rule="evenodd" d="M400 26.2c-193.3 0-350 156.7-350 350 0 136.2 77.9 254.3 191.5 312.1 15.4 8.1 31.4 15.1 48.1 20.8l-16.5 63.5c-2 7.8 5.4 14.7 13 12.1l229.8-77.6c14.6-5.3 28.8-11.6 42.4-18.7C672 630.6 750 512.5 750 376.2c0-193.3-156.7-350-350-350zm211.1 510.7c-10.8 26.5-41.9 77.2-121.5 77.2-79.9 0-110.9-51-121.6-77.4-2.8-6.8 5-13.4 13.8-11.8 76.2 13.7 147.7 13 215.3.3 8.9-1.8 16.8 4.8 14 11.7z" fill="currentColor"></path></svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="rounded-lg px-4 lg:px-20 lg:pt-20 lg:pb-2">
            <div class="lg:flex lg:mb-10 pb-6 lg:pb-14">
                <div class="basis-1/4 py-6 lg:py-0">
                    <a href="#">
                        <span class="sr-only">Official Magnetic Dudu Nets Logo</span>
                        <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] );?>" alt="Official Magnetic Dudu Nets Logo" class="w-16 lg:w-32" />
                    </a>
                </div>
                <div class="basis-3/4 lg:ml-10">
                    <h3 class="font-bold mb-2 text-lg font-quicksand">Products</h3>
                    <div class="flex lg:gap-20 flex-col lg:flex-row">
                        <?php get_template_part("template-parts/shared/category","menu");?>
                        <?php

                        wp_nav_menu( array(
                            'menu'   => 'footer-menu-2',
                            'container' => false,
                            'theme_location' => 'footer-menu-2',
                            'walker' => new Footer_Walker_Nav_Menu(),
                            'menu_class'     => 'text-sm font-normal leading-8',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="basis-1/4 mt-5 lg:mt-0">
                    <h3 class="font-bold mb-2 text-lg font-quicksand">Let’s keep in touch.</h3>
                    <form>
                        <div class="relative">
                            <input id="email-subscribe" type="text" placeholder="enter your email" class="w-[300px] h-[45px] bg-white border-[1px] border-secondary/10 py-2 px-5 text-sm" required />
                            <button value="Subscribe" id="subscribe-btn" class="absolute top-0 right-0 w-14 h-full bg-secondary text-white flex justify-center items-center hover:bg-secondary hover:text-primary transition-all duration-500">
                                <span class="sr-only">Submit keep intouch form</span>
                                <svg class="w-8 h-8 fill-current">
                                    <use xlink:href="#icon-right"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 text-sm flex gap-2 items-start">
                            <input id="sign_up_latest_news" type="checkbox" class="relative top-2" />
                            <label for="sign_up_latest_news" class="cursor-pointer">Yes, sign up for the latest news, product announcements, and updates and I understand I can unsubscribe at any time.</label>
                        </div>
                        <div>
                            <span class="sr-only">reCaptcha</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="lg:flex lg:justify-between lg:items-center border-t border-black/10 py-4">
                <div class="mb-5 lg:mb-0">
                    <?php

                    wp_nav_menu( array(
                        'menu'   => 'footer-menu-3',
                        'container' => false,
                        'theme_location' => 'footer-menu-3',
                        'menu_class'     => 'grid grid-cols-2 gap-2 lg:flex lg:gap-4',
                        'walker'         => new Bottom_Bar_Walker_Nav_Menu()
                    ) );
                    ?>
                </div>
                <div class="text-sm font-normal">&copy; <?php echo date("Y")?> Magnetic Dudu Nets Limited</div>
            </div>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.12.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('#showcase_gallery', {
            captions: true,
            buttons: 'auto',
        });
    </script>
</body>
</html>