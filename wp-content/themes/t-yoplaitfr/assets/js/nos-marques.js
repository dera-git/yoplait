(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();

    $(document).ready(function () {


    });

    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener("load", function (e) {

            heroOFABanner();
            firstAnimation();
            secondAnimation();
            thirdAnimation();
            lastAnimation();
        }, false);

    });

})(jQuery);

const heroOFABanner = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-hero-nos-marques", { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 0);
    tl.fromTo(".js-title-logo-nos-marques", { x: 400, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 0);
}

const firstAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-item-first-1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-title-item-first-2", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-title-item-first-3", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);


    ScrollTrigger.create({
        trigger: "#id-sect-delices",
        start: "top+=100 95%",
        end: "top+=100 95%",
        animation: tl,
        id: `sect-delices`
    });
}

const secondAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-item-second-1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-title-item-second-2", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);


    ScrollTrigger.create({
        trigger: "#id-sect-grid",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `sect-grid`
    });
}

const thirdAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-item-third-1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-title-item-third-2", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);


    ScrollTrigger.create({
        trigger: "#id-sect-gourmande",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `sect-gourmande`
    });
}
const lastAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-item-last-1", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-title-item-last-2", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-title-item-last-3", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 2);
    tl.fromTo(".js-title-item-last-4", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 3);



    ScrollTrigger.create({
        trigger: "#id-sect-last",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `sect-last`
    });
}