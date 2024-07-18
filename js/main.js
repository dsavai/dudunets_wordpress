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
});