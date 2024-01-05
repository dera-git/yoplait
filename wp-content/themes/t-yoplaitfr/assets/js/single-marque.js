(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();

    $(document).ready(function () {


    });

    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener("load", function (e) {

            heroMarqueBanner();
            gammeAnimation();
            discoveryMarkAnimation();
            partenerMarkAnimation();
            cocoAnimation();
        }, false);

    });

})(jQuery);

const heroMarqueBanner = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-hero-marque", { x: -400, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 0);
    tl.fromTo(".js-title-hero-marque2", { y: 200, opacity: 0 }, { y: 0, opacity: 1, duration: 0.95 }, 0);
}

const gammeAnimation = () => {
    let tl = new TimelineMax();
    let animationClassSvg2 = 'kl-decor-bea-item kl-svg-decor-join kl-svg-decor-join-anim';
    tl.fromTo(".js-bea-fly", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.65 }, 0);
    tl.fromTo(".js-framboise", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.65 }, 0);
    tl.fromTo(".js-gamme-title", { y: 200, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65 }, 0);
    tl.fromTo(".js-anime-bea-svg-loop", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + animationClassSvg2 }, 0);
    tl.fromTo(".js-gamme-item-1", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.50 }, 1);
    tl.fromTo(".js-gamme-item-2", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.50 }, 2);
    tl.fromTo(".js-gamme-item-3", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.50 }, 3);
    tl.fromTo(".js-gamme-item-4", { x: -50, opacity: 0 }, { x: 0, opacity: 1, duration: 0.50 }, 4);

    ScrollTrigger.create({
        trigger: "#id-sect-gamme",
        start: "top+=100 90%",
        end: "top+=100 90%",
        animation: tl,
        id: `sect-gamme`
    });
}

const discoveryMarkAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-discovery-fraise", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".js-discovery-bottom", { y: 200, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-discovery-left", { x: -100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-discovery-left1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.95 }, 1);
    tl.fromTo(".js-discovery-right", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 2);
    tl.fromTo(".js-discovery-coco", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 3);


    ScrollTrigger.create({
        trigger: "#id-sect-discovery-mark",
        start: "top+=100 80%",
        end: "top+=100 80%",
        animation: tl,
        id: `sect-discovery-mark`
    });
}

const partenerMarkAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-partener-item1", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 0);
    tl.fromTo(".js-partener-item2", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45 }, 0);
    tl.fromTo(".js-partener-item3", { x: 100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.45 }, 1);

    ScrollTrigger.create({
        trigger: "#id-sect-partener-single-mark",
        start: "top+=100 80%",
        end: "top+=100 80%",
        animation: tl,
        id: `sect-partener-single-mark`
    });
}

const cocoAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-coco", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);

    ScrollTrigger.create({
        trigger: "#id-coco",
        start: "top+=100 95%",
        end: "top+=100 95%",
        animation: tl,
        id: `coco`
    });
}
