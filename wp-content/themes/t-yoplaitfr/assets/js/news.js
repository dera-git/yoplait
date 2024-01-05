(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();
    
    $(document).ready(function () {
        
        
    });
    const commitmentsHomeAnimationNews = () => {
        let classCommitmentsImg = 'kl-image-transform-news kl-w-image-transform-news position-relative kl-opacity-0 js-img-commitments-news kl-animate-border02'
        let tl = new TimelineMax();
        tl.fromTo(".js-title-commitments", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
        tl.fromTo(".js-text-commitments", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=20%");
        tl.fromTo(".js-img-commitments", { x: 300, opacixy: 0 }, { x: 0, opacity: 1, duration: 0.75, className: '+= ' + classCommitmentsImg }, 1);
    
        ScrollTrigger.create({
            trigger: "#id-section-news",
            start: "top+=100 75%",
            end: "top+=100 75%",
            animation: tl,
            id: `section-news`
        });
    }

    const PromoHomeAnimation = () => {
        let animationClassSvg = 'kl-svg-line-brands kl-svg-anim-line-brands'
        let tl = new TimelineMax();
        tl.fromTo(".kl-svg-line-brands", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + animationClassSvg }, 1);
    
        ScrollTrigger.create({
            trigger: "#id-setion-promotions",
            start: "top 95%",
            end: "top 95%",
            animation: tl,
            id: `setion-promotions`
        });
    }

    window.addEventListener("load", function (e) {
        console.log("window loaded");

        commitmentsHomeAnimationNews();
        PromoHomeAnimation();
    }, false);
})