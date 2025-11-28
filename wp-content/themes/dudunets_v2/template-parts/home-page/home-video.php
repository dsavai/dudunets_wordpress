
    <section class="module module--featured">
        <div class="relative mb-[70px] lg:mb-0 w-full h-screen lg:h-[calc(100vh+70px)]">
            <video 
                width="100%" 
                height="100%" 
                autoplay 
                muted 
                loop 
                playsinline 
                poster="<?php echo get_template_directory_uri(); ?>/dist/images/magnetic-dudunets-video-placeholder.jpg"
                style="width:100%; height:100%; object-fit:cover;"
            >
                <source src="<?php echo get_template_directory_uri(); ?>/dist/videos/magnetic_duduntes_promotional_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="lg:absolute lg:bottom-[-34px] left-0 right-0 w-full z-20">
                <a href="#getQuote">
                    <div class="lg:mx-auto lg:max-w-max bg-gradient-to-r z-9 from-[#0CBD92] to-[#1967C3] p-2 lg:p-3 cursor-pointer text-white lg:py-4 px-6 lg:px-10 flex justify-between items-center text-sm lg:text-base">
                        <div class="mr-4">
                            <svg class="w-8 h-8 fill-current">
                                <use xlink:href="#icon-file"></use>
                            </svg>
                        </div>
                        <div class="font-semibold flex-auto">Request a quote now</div>
                        <div class="ml-4">
                            <svg class="w-5 h-5 fill-current">
                                <use xlink:href="#icon-big-arrow"></use>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

