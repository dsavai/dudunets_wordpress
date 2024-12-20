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


<footer class="footer mt-12 lg:mt-16">
    <div class="container mx-auto">
        <div class="bg-gray-light rounded-lg px-4 lg:px-20 lg:pt-20 lg:pb-2">
            <div class="lg:flex lg:mb-10 pb-6 lg:pb-14">
                <div class="basis-1/4 py-6 lg:py-0">
                    <a href="#">
                        <span class="sr-only">Official Magnetic Dudu Nets Logo</span>
                        <img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] );?>" alt="Official Magnetic Dudu Nets Logo" class="w-16 lg:w-32" />
                    </a>
                </div>
                <div class="basis-3/4 lg:ml-10">
                    <h3 class="font-bold mb-3 text-lg">Products</h3>
                    <div class="flex gap-20">
                        <?php get_template_part("template-parts/shared/category","menu");?>
                        <?php

                        wp_nav_menu( array(
                            'menu'   => 'footer-menu-2',
                            'container' => false,
                            'theme_location' => 'footer-menu-2',
                            'walker' => new Footer_Walker_Nav_Menu(),
                            'menu_class'     => 'text-sm leading-loose text-black/60',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="basis-1/4 mt-5 lg:mt-0">
                    <h3 class="font-bold mb-3 text-lg">Let’s keep in touch.</h3>
                    <form>
                        <div class="relative">
                            <input id="email-subscribe" type="text" placeholder="enter your email" class="w-[300px] h-[45px] bg-white border-[1px] border-secondary/10 py-2 px-5 rounded-lg text-sm" required />
                            <button value="Subscribe" id="subscribe-btn" class="absolute top-0 right-0 w-14 h-full bg-primary text-secondary rounded-r-lg flex justify-center items-center hover:bg-secondary hover:text-primary transition-all duration-500">
                                <span class="sr-only">Submit keep intouch form</span>
                                <svg class="w-8 h-8 fill-current">
                                    <use xlink:href="#icon-right"></use>
                                </svg>
                            </button>
                        </div>
<<<<<<< HEAD
                        <p>&nbsp;</p>
                        <div class="g-recaptcha" data-sitekey="6LdTrSMqAAAAACWpRLZSMJUHrDNxaZ0qFYNM75D9"></div>
=======
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
                        <div class="mt-3 text-sm flex gap-2 items-start">
                            <input id="sign_up_latest_news" type="checkbox" class="relative top-2" />
                            <label for="sign_up_latest_news" class="cursor-pointer">Yes, sign up for the latest news, product announcements, and updates and I understand I can unsubscribe at any time.</label>
                        </div>
<<<<<<< HEAD
                        
=======
>>>>>>> 29db5d720c20595e07a6e5de2f4f673bed4747a4
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
                <div class="text-black/60 text-sm">&copy; <?php echo date("Y")?> Magnetic Dudu Nets Limited</div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>