(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();

    $(document).ready(function () {
        // js page contact
        $(document).on('gform_post_render', function () {
            $('.gfield_select').select2({
                minimumResultsForSearch: Infinity,
                width:'100%',
                dropdownCssClass: 'kl-dropdown-gf-select'
            });

            let inputFile = $('.kl-form-contact-us input[type=file]')
            let parentEl = inputFile.parent();
            parentEl.append( '<div class="kl--input-file"><div>Parcourir...</div><span class="kl-no-files-selected">Aucun fichier sélectionné.</span></div>' )
            inputFile.on('change', function () {
              const fileName = jQuery(this).val().split('\\').pop()
              jQuery('.kl-no-files-selected', jQuery(this).parent().parent()).html(fileName)
            })
        })
        // Fin js page contact

    });

    document.addEventListener("DOMContentLoaded", function () {

        const textWrapper = document.querySelector('.title-animate .letters-animate');
        if (textWrapper) {
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        }

        setTimeout(() => {
            anime.timeline({ loop: false })
                .add({
                    targets: '.title-animate .letter',
                    translateY: ["1.1em", 0],
                    translateZ: 0,
                    opacity: 1,
                    duration: 950,
                    delay: (el, i) => 50 * i
                })
        }, 100);

        window.addEventListener("load", function (e) {
            console.log("window loaded");

            essentialAnimation();
            yellowSectionAnimation();
            titleAnimation();
            blocCardAnimation1();
            blocCardAnimation2();
            actionPlanAnimation();
            heroHomeAnimation();
            introHomeTitle();
            introHomeContent();
            brandsHomeSvgAnimation();
            brandsHomeAnimation();
            commitmentsHomeAnimation();
            actusHomeAnimation();
            promotionsHomeAnimation();
            JoinUsHomeAnimation();

        }, false);

        // Swiper hero
        const swiperHero = document.querySelector('.js-swiper-hero')

        if (swiperHero) {
            const swiper = new Swiper(".js-swiper-hero", {
                slidesPerView: 1,
                spaceBetween: 20,
                speed: 700,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
            });
        }

        // Swiper Our brands
        const swiperBrands = document.querySelector('.js-swiper-brands')
        
        if (swiperBrands) {

            const swiperThumb = new Swiper('.js-swiper-brands-thumb', {
                slidesPerView: 3,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                breakpoints: {
                    768: {
                        slidesPerView: 5,
                    },
                    576: {
                        slidesPerView: 4,
                    }
                }
              });
              const swiper2 = new Swiper('.js-swiper-brands', {
                slidesPerView: 1,
                speed: 700,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                navigation: {
                  nextEl: '.swiper2-button-next',
                  prevEl: '.swiper2-button-prev',
                },
                thumbs: {
                  swiper: swiperThumb,
                },
              });

              swiper2.on('slideChange', function () {
                changeBgColor(this);
            
              });

        }

        

    });

})(jQuery);

const essentialAnimation = () => {
    let animationClassF = 'kl-g-item1 position-relative kl-animate-line-svg';
    let animationClassS = 'kl-decor-line02 kl-svg-animated kl-animate-line-svg';
    let tl = new TimelineMax();
    tl.fromTo(".kl-g-item1", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75, className: '+= ' + animationClassF }, 0);
    tl.fromTo(".kl--img-globe", { scale: 0 }, { scale: 1, transformOrigin: "center", duration: 0.75 }, "<+=10%");
    tl.fromTo(".kl--animate-bottom", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 }, 1);
    tl.fromTo(".kl--animate-bottom2", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 1 }, 1);
    tl.fromTo(".kl-decor-line02", { opacity: 0 }, { opacity: 1, duration: 1, className: '+= ' + animationClassS }, 1);
    tl.fromTo(".kl--animate-bottom3", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 }, 2);
    tl.fromTo(".kl--animate-bottom4", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, 2);
    tl.fromTo(".kl--animate-bottom5", { y: 100, opacity: 0 }, { y: 0, opacity: 1, duration: 1 }, 2);

    ScrollTrigger.create({
        trigger: "#id-section-essential",
        start: "top center",
        end: "top center",
        animation: tl,
        // toggleActions: "play none none reverse",
        id: `section-essential`
    });
}

const yellowSectionAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".kl-animate-in-left", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".kl-animate-bloc-yellow", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".kl-animate-in-right", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=50%");

    ScrollTrigger.create({
        trigger: "#id-section-transform",
        start: "top center",
        end: "top center",
        animation: tl,
        id: `section-transform`
    });
}

const titleAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".title-animate-in-bottom", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, 0);

    ScrollTrigger.create({
        trigger: "#id-section-act-rse",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl,
        id: `section-act-rse`
    });
}

const blocCardAnimation1 = () => {
    let tl = new TimelineMax();
    tl.fromTo(".kl-animate-item01Left", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".kl-animate-item01Right", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);

    ScrollTrigger.create({
        trigger: ".kl-animate-item01",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl
    });
}

const blocCardAnimation2 = () => {
    let tl = new TimelineMax();
    tl.fromTo(".kl-title-item02Left", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".kl-title-item02Right", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 0);
    tl.fromTo(".kl-animate-item02Left", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=50%");
    tl.fromTo(".kl-animate-item02Right", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=50%");

    ScrollTrigger.create({
        trigger: ".kl-animate-item02",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl
    });
}

const actionPlanAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".kl-logo-actionPlan", { scale: 0 }, { scale: 1, transformOrigin: "center", duration: 0.75 }, 0);
    tl.fromTo(".kl-text-animate01", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=40%");
    tl.fromTo(".kl-text-animate02", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=30%");
    tl.fromTo(".kl-text-animate03", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=20%");

    ScrollTrigger.create({
        trigger: "#id-section-action-plan",
        start: "top 75%",
        end: "top 75%",
        animation: tl,
        id: `section-action-plan`
    });
}

// Animation Homepage
const heroHomeAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-hero", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-text-hero", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-slide-hero", { y: 200, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, 0);
}

const introHomeTitle = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-animate-title01", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-animate-title02", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-animate-title03", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);

    ScrollTrigger.create({
        trigger: "#id-section-presentation",
        start: "top 65%",
        end: "top 65%",
        animation: tl,
        id: `section-presentation`
    });
}

const introHomeContent = () => {
    let classIntroImg = 'kl-image-transform kl-w-image-transform position-relative kl-opacity-0 js-animate-intro-img kl-animate-border01'
    let tl = new TimelineMax();
    tl.fromTo(".js-animate-intro-img", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75, className: '+= ' + classIntroImg }, 1);
    tl.fromTo(".js-animate-intro-text", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-card-xs01", { y: 10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45 }, 2);
    tl.fromTo(".js-card-xs02", { y: 10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45 }, 3);
    tl.fromTo(".js-card-xs03", { y: 10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45 }, 4);

    ScrollTrigger.create({
        trigger: "#id-section-presentation",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl,
        id: `section-presentation`
    });
}

const brandsHomeAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-brands", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-desc-brands", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=20%");
    tl.fromTo(".js-thumbs-brands", { x: -300, opacixy: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=25%");
    tl.fromTo(".js-slider-brands", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);

    ScrollTrigger.create({
        trigger: "#id-section-brands",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl,
        id: `section-brands`
    });
}

const brandsHomeSvgAnimation = () => {
    let animationClassSvg = 'kl-svg-line-brands kl-svg-anim-line-brands'
    let tl = new TimelineMax();
    tl.fromTo(".kl-svg-line-brands", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + animationClassSvg }, 1);

    ScrollTrigger.create({
        trigger: "#id-section-brands",
        start: "top 95%",
        end: "top 95%",
        animation: tl,
        id: `section-brands`
    });
}

const commitmentsHomeAnimation = () => {
    let classCommitmentsImg = 'kl-image-transform3 kl-w-image-transform3 position-relative kl-opacity-0 js-img-commitments kl-animate-border02'
    let tl = new TimelineMax();
    tl.fromTo(".js-title-commitments", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-text-commitments", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=20%");
    tl.fromTo(".js-img-commitments", { x: 300, opacixy: 0 }, { x: 0, opacity: 1, duration: 0.75, className: '+= ' + classCommitmentsImg }, 1);

    ScrollTrigger.create({
        trigger: "#id-section-commitments",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl,
        id: `section-commitments`
    });
}

const actusHomeAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-actus", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-btn-actus", { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=25%");
    tl.fromTo(".js-card-actus1", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-card-actus2", { y: 250, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-card-actus3", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);

    ScrollTrigger.create({
        trigger: "#id-section-actus",
        start: "top+=100 85%",
        end: "top+=100 85%",
        animation: tl,
        id: `section-actus`
    });
}

const promotionsHomeAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-img-promotions", { scale: 0 }, { scale: 1, transformOrigin: "center", duration: 0.75 }, 0);
    tl.fromTo(".js-title-promotions", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=40%");
    tl.fromTo(".js-desc-promotions", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=30%");
    tl.fromTo(".js-btn-promotions", { y: 300, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, "<+=20%");

    ScrollTrigger.create({
        trigger: "#id-setion-promotions",
        start: "top 75%",
        end: "top 75%",
        animation: tl,
        id: `setion-promotions`
    });
}

const JoinUsHomeAnimation = () => {
    let animationClassSvg2 = 'kl-ms-35 kl-svg-decor-join kl-svg-decor-join-anim';
    let classJoinUsImg = 'kl-image-transform kl-w-image-transform2 position-relative kl-opacity-0 js-img-JoinUs kl-animate-border03';
    let tl = new TimelineMax();
    tl.fromTo(".js-title-JoinUs", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-desc-JoinUs", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.75 }, "<+=20%");
    tl.fromTo(".js-img-JoinUs", { x: -300, opacixy: 0 }, { x: 0, opacity: 1, duration: 0.75, className: '+= ' + classJoinUsImg }, 1);
    tl.fromTo(".kl-svg-decor-join", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + animationClassSvg2 }, "<+=20%");

    ScrollTrigger.create({
        trigger: "#id-section-JoinUs",
        start: "top+=100 75%",
        end: "top+=100 75%",
        animation: tl,
        id: `section-JoinUs`
    });
}

const changeBgColor = () => {
    const slides = document.querySelectorAll('.js-swiper-brands .swiper-slide');
    const parent = document.querySelector('.kl-section-brands');
    parent.classList.remove('kl-bg-green');

    let counter = 1;
    const colors = ['kl-bg-blue', 'kl-bg-purple', 'kl-bg-green'];
    colors.forEach((color) => {
        parent.classList.remove(color);
    });
    slides.forEach((item) => {
        if(counter == 4) counter = 1;
        item.classList.add(`kl-${counter}`)
        

        if (item.classList.contains('swiper-slide-active')) {
            const colorToApply = colors[counter - 1];
            parent.classList.add(colorToApply);
        }
        
        counter++; 
    });
};
