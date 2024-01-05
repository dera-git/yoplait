(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();

    $(document).ready(function () {


    });

    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener("load", function (e) {
            console.log("window loaded");

            heroOFABanner();
            foodsAnimation();
            discoveryAnimation();
            partenerAnimation();
            videoFoodAnimation();
        }, false);

    });

})(jQuery);

const heroOFABanner = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-hero-ofa", { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 0);
    tl.fromTo(".js-title-logo-ofa", { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 0);
    tl.fromTo(".js-btn-fixed", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
}

const foodsAnimation = () => {
    let tl = new TimelineMax();
    let animationClassSvg2 = 'kl-svg-bea position-relative kl-svg-decor-join kl-svg-decor-join-anim';
    tl.fromTo(".js-bg-arrow-yellow", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.65 }, 0);
    tl.fromTo(".js-anime-bea-svg-loop", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + animationClassSvg2 }, 0);
    tl.fromTo(".js-title-item-diet-1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-title-item-diet-2", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 2);
    tl.fromTo(".js-title-item-diet-3", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 3);

    ScrollTrigger.create({
        trigger: "#id-sect-our-diet",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `sect-our-diet`
    });
}

const discoveryAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-discovery-left", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-discovery-right", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);

    ScrollTrigger.create({
        trigger: "#id-sect-discovery",
        start: "top+=100 80%",
        end: "top+=100 80%",
        animation: tl,
        id: `sect-discovery`
    });
}

const partenerAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-partener-title", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-partener-item1", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 0);
    tl.fromTo(".js-partener-item2", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 1);
    tl.fromTo(".js-partener-item3", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 2);
    tl.fromTo(".js-partener-item4", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 3);

    ScrollTrigger.create({
        trigger: "#id-sect-partener",
        start: "top+=100 80%",
        end: "top+=100 80%",
        animation: tl,
        id: `sect-partener`
    });
}

const videoFoodAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-videoFood", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);



    ScrollTrigger.create({
        trigger: "#id-video-food",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `video-food`
    });
}
