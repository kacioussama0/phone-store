// mobile menu animation
const burger = document.querySelector("#burger");

const tl = gsap.timeline();

tl.to(".menu-link", {
    yPercent: 200,
    duration: 0.5,
    Animation: "ease",
});

tl.to(".menu-overlay", {
    width: 0,
}).progress(1);

gsap.set(".menu-overlay", { opacity: 1 });
burger.addEventListener("click", () => {
    tl.reversed(!tl.reversed());
});

// svg animation navbar Button
const lines = {
    line1: document.querySelector(".line1"),
    line2: document.querySelector(".line2"),
    line3: document.querySelector(".line3"),
};

let isX = false;

function animateToggle() {
    const tl = gsap.timeline();

    if (isX) {
        // Animate back to lines
        tl.to(lines.line2, {
            xPercent: null,
            duration: 0.5,
            x: 0,
        }).to(lines.line3, {
            xPercent: null,
            duration: 0.5,
            x: 0,
        });
    } else {
        // Animate to X

        tl.to(lines.line3, {
            xPercent: 40,
            duration: 0.5,
        }).to(lines.line2, {
            xPercent: 20,
            duration: 0.5,
        });
    }

    isX = !isX;
}
burger.addEventListener("click", animateToggle);

// landing page pictures animation mousemove
document.addEventListener("DOMContentLoaded", () => {
    const mainContainer = document.getElementById("main-container");
    const images = document.querySelectorAll(".follow-mouse");

    mainContainer.addEventListener("mousemove", (e) => {
        const { clientX, clientY } = e;
        images.forEach((image) => {
            const rect = image.getBoundingClientRect();
            const offsetX = (clientX - (rect.left + rect.width / 2)) / 20;
            const offsetY = (clientY - (rect.top + rect.height / 2)) / 20;

            image.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
        });
    });

    mainContainer.addEventListener("mouseleave", () => {
        images.forEach((image) => {
            image.style.transform = "translate(0, 0)";
            image.style.transition = "all 1s";
        });
    });
});

// counter up
$(document).ready(function () {
    $(".counter").each(function () {
        var $this = $(this);
        $this.prop("Counter", 0).animate(
            {
                Counter: $this.data("count"),
            },
            {
                duration: 2000,
                easing: "swing",
                step: function (now) {
                    $this.text(Math.ceil(now).toLocaleString());
                },
            }
        );
    });

    let activated = false;

    $(window).on("scroll", function () {
        if (
            !activated &&
            $(window).scrollTop() >
                $("#container").offset().top - $(window).height() + 200
        ) {
            $(".counter").each(function () {
                $(this).counterUp({
                    delay: 10,
                    time: 1000,
                });
            });
            activated = true;
        }
    });
});

// marquee partners

function Marquee(selector, speed) {
    const parentSelector = document.querySelector(selector);
    const clone = parentSelector.innerHTML;
    const firstElement = parentSelector.children[0];
    let i = 0;
    console.log(firstElement);
    parentSelector.insertAdjacentHTML("beforeend", clone);
    parentSelector.insertAdjacentHTML("beforeend", clone);

    setInterval(function () {
        firstElement.style.marginLeft = `-${i}px`;
        if (i > firstElement.clientWidth) {
            i = 0;
        }
        i = i + speed;
    }, 0);
}

window.addEventListener("load", Marquee(".marquee", 0.2));
