import marquee from "https://cdn.jsdelivr.net/npm/vanilla-marquee/dist/vanilla-marquee.js";

const marqueeContainer = document.getElementById("marquee-container");

const options = {
    speed: 100,
    loop: true,
    duplicated: true,
};

new marquee(marqueeContainer, options);
