//our services swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper-container", {
        effect: "fade",
        grabCursor: true,

        allowTouchMove: true,
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },

        loop: true,

        slidesPerView: 1,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        scrollbar: {
            el: ".swiper-scrollbar",
        },
    });
});

//testimonials swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper-testimonials", {
        effect: "cards",
        grabCursor: true,
        speed: 500,
        rotate: true,

        allowTouchMove: true,
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
});

//appointments swiper

var swiper = new Swiper(".swiper-appointment", {
    slidesPerView: 1,
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        480: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});
