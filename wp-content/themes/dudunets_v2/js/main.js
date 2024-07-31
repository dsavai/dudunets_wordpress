$(document).ready(function() {
    const swiper = new Swiper(".home-slider", {
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    const clientsLogo = new Swiper(".clientLogos", {
        watchSlidesProgress: true,
        slidesPerView: 4,
        spaceBetween: 20,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            580: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            768: {
            slidesPerView: 4,
            spaceBetween: 40,
            },
            1024: {
            slidesPerView: 5,
            spaceBetween: 50,
            },
        },
    });

    $(".fancy_youtube").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        height      : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });

    $('.accordion_title').click(function(e){
        e.preventDefault();
        var currentAttrvalue = $(this).attr('href');
        if($(e.target).is('.active')){
            $(this).removeClass('active');
            $('.accordion_content:visible').slideUp(300);
        } else {
            $('.accordion_title').removeClass('active').filter(this).addClass('active');
            $('.accordion_content').slideUp(300).filter(currentAttrvalue).slideDown(300);
        }
    });
});