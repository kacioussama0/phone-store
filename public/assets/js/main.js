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
    tl.to(lines.line1, {
      duration: 0.5,
      attr: { x1: 1, x2: 48, y1: 6, y2: 6 },
    })
      .to(lines.line2, { xPercent: null, duration: 0.5, opacity: 1, x: 0 })
      .to(lines.line3, {
        xPercent: null,
        duration: 0.5,
        opacity: 1,
        x: 0,
      });
  } else {
    // Animate to X
    tl.to(lines.line1, {
      duration: 0.5,
      attr: { x1: 1, x2: 20, y1: 6, y2: 20 },
    })
      .to(lines.line2, {
        xPercent: 200,
        duration: 0.5,
        opacity: 0,
        x: lines.line3.x1.baseVal.value,
      })
      .to(lines.line3, {
        xPercent: 200,
        duration: 0.5,
        opacity: 0,
        x: lines.line1.x2.baseVal.value,
      });
  }

  isX = !isX;
}
burger.addEventListener("click", animateToggle);

// GSAP Carousel //
document.addEventListener("DOMContentLoaded", function () {
  const targets = document.querySelectorAll(".slide");
  const pictures = document.querySelectorAll(".picture");
  const nextButton = document.getElementById("nextButton");
  const prevButton = document.getElementById("prevButton");
  let count = 0;
  let isAnimating = false;

  // Set initial positions and opacity for slides and pictures
  gsap.set(targets, { xPercent: (i) => (i === 0 ? 0 : 100), opacity: 0 });
  gsap.set(targets, { opacity: 1 }); // Only the first slide is visible
  gsap.set(pictures, { opacity: 0 });
  gsap.to(pictures[0], { opacity: 1, duration: 1 });

  // Function for next slide transition
  function slideNext() {
    if (isAnimating) return;
    isAnimating = true;
    const nextIndex = (count + 1) % targets.length;

    // Animate out the current slide and picture
    gsap.to(targets[count], {
      duration: 1.2,
      xPercent: -100,
      ease: "power2.inOut",
    });
    gsap.to(pictures[count], {
      duration: 1.2,
      opacity: 0,
      ease: "power2.inOut",
    });

    // Animate in the next slide and picture
    gsap.fromTo(
      targets[nextIndex],
      {
        xPercent: 100,
        zIndex: 2,
      },
      {
        duration: 1.2,
        xPercent: 0,
        zIndex: 2,
        ease: "power2.inOut",
        onComplete: () => {
          isAnimating = false;
          targets[count].style.zIndex = 0;
          count = nextIndex;
        },
      }
    );
    gsap.fromTo(
      pictures[nextIndex],
      {
        opacity: 0,
      },
      {
        duration: 1.2,
        opacity: 1,
        ease: "power2.inOut",
      }
    );
  }

  // Function for previous slide transition
  function slidePrev() {
    if (isAnimating) return;
    isAnimating = true;
    const prevIndex = count - 1 < 0 ? targets.length - 1 : count - 1;

    // Animate out the current slide and picture
    gsap.to(targets[count], {
      duration: 1.2,
      xPercent: 100,
      ease: "power2.inOut",
    });
    gsap.to(pictures[count], {
      duration: 1.2,
      opacity: 0,
      ease: "power2.inOut",
    });

    // Animate in the previous slide and picture
    gsap.fromTo(
      targets[prevIndex],
      {
        xPercent: -100,
        zIndex: 2,
      },
      {
        duration: 1.2,
        xPercent: 0,
        zIndex: 2,
        ease: "power2.inOut",
        onComplete: () => {
          isAnimating = false;
          targets[count].style.zIndex = 0;
          count = prevIndex;
        },
      }
    );
    gsap.fromTo(
      pictures[prevIndex],
      {
        opacity: 0,
      },
      {
        duration: 1.2,
        opacity: 1,
        ease: "power2.inOut",
      }
    );
  }

  // Event listeners for next and previous buttons
  nextButton.addEventListener("click", slideNext);
  prevButton.addEventListener("click", slidePrev);
});

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
