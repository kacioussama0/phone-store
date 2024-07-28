document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-container", {
    // Optional parameters
    effect: "fade",
    grabCursor: true,

    allowTouchMove: true,
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },

    loop: true,

    slidesPerView: 1,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });
});
