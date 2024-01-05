(function ($) {
    "use strict";

    $(document).ready(function () {
        //section detail brique
        const detailBriqueSlider = $('.kl-detail-brique-slider'),
            detailBriqueDotsWrapper = $('.kl-detail-brique-slider-dots-wrapper'),
            detailBriqueSliderWrapper = $('.kl-detail-brique-slider-wrapper');

        detailBriqueSlider.slick({
            infinite: true,
            slidesToShow: 1,
            autoplay: false,
            autoplaySpeed: 4000,
            fade: true,
            cssEase: 'linear',
            appendDots: detailBriqueDotsWrapper,
            dots: true,
            prevArrow: $(".kl-detail-brique-slider-prev"),
            nextArrow: $(".kl-detail-brique-slider-next"),
            dotsClass: 'kl-detail-brique-slider-dots',
            customPaging: function (slider, i) {
                return `<button class="kl-detail-brique-slider-dots-btn"><span>${i+1}</span></button>`;
            },
            responsive: [
                {
                  breakpoint: 992,
                  settings: {
                    adaptiveHeight: true,
                  }
                }
            ]
        });

        $('.kl-detail-brique-initial-link[data-slide]').on('click', function(e) {
            e.preventDefault();
            const slideIndex = $(this).data('slide');
            detailBriqueSlider.slick('slickGoTo', slideIndex - 1);
            $('.kl-detail-brique-initial').hide();
            $('.kl-detail-brique-slider-wrapper').fadeIn();
            if (window.matchMedia("(min-width: 992px)").matches) {
                detailBriqueSlider.slick('setPosition');
                detailBriqueSliderWrapper.addClass('kl-is-visible');
            } else {
                setTimeout(() => {
                    detailBriqueSlider.slick('setPosition');
                    detailBriqueSliderWrapper.addClass('kl-is-visible');
                }, 600);
            }
            if(slideIndex == 4) {
                $.fn.matchHeight._update();
            }
        });

        $('.kl-return-to-detail-brique').on('click', function(e) {
            e.preventDefault();
            $('.kl-detail-brique-slider-wrapper').fadeOut();
            $('.kl-detail-brique-initial').fadeIn();
            detailBriqueSliderWrapper.removeClass('kl-is-visible');
        });
        //fin section detail brique

        $.fn.commentCards = function (options) {
            let settings = $.extend({
                autoplay: true,
                interval: 3300
            }, options);

            return this.each(function () {
                let $this = $(this),
                    $cards = $this.find('.kl-card-brands'),
                    $current = $cards.filter('.card--current'),
                    $next,
                    autoplayInterval;

                function showNextCard() {
                    $cards.removeClass('card--current card--out card--next card-after-next card--prev card-before-prev');
                    $current.addClass('card--out');
                    $next = $current.next();
                    $next = $next.length ? $next : $cards.first();
                    $current = $next.addClass('card--current');
                    $next = $current.next();
                    $next = $next.length ? $next : $cards.first();
                    $next.addClass('card--next');

                    let $elementAfterNext = $next.next();
                    $elementAfterNext = $elementAfterNext.length ? $elementAfterNext : $cards.first();
                    $elementAfterNext.addClass('card-after-next');
                }

                function showPrevCard() {
                    $cards.removeClass('card--current card--out card--next card-after-next card--prev card-before-prev');
                    $next = $current.prev();
                    $next = $next.length ? $next : $cards.last();
                    $current.addClass('card--out');
                    $current = $next.addClass('card--current');
                    $next = $current.next();
                    $next = $next.length ? $next : $cards.first();
                    $next.addClass('card--next');

                    let $elementBeforeCurrent = $current.prev();
                    $elementBeforeCurrent = $elementBeforeCurrent.length ? $elementBeforeCurrent : $cards.last();
                    $elementBeforeCurrent.addClass('card--prev');

                    let $elementBeforePrev = $elementBeforeCurrent.prev();
                    $elementBeforePrev = $elementBeforePrev.length ? $elementBeforePrev : $cards.last();
                    $elementBeforePrev.addClass('card-before-prev');
                }

                $cards.on('click', function () {
                    showNextCard();
                    resetAutoplayInterval();
                });

                $('.next-button').on('click', function () {
                    showNextCard();
                    resetAutoplayInterval();
                });

                $('.prev-button').on('click', function () {
                    showPrevCard();
                    resetAutoplayInterval();
                });

                function autoplay() {
                    autoplayInterval = setInterval(function () {
                        showNextCard();
                    }, settings.interval);
                }

                function resetAutoplayInterval() {
                    clearInterval(autoplayInterval);
                    if (settings.autoplay) {
                        autoplay();
                    }
                }

                if (settings.autoplay) {
                    autoplay();
                }

                if (!$current.length) {
                    $current = $cards.last();
                    $cards.first().trigger('click');
                }

                $this.addClass('cards--active');
            });
        };

        $('.kl-slider-cards-group').commentCards({ autoplay: false, interval: 0 });

        
        $('#tabAll').on('click', function(){
            $(this).addClass('active')
            $('.tab-pane').removeClass('show');
            $('.tab-pane').addClass('active');
            $('.nav-link').removeClass('active');
            $('.nav-link').attr('aria-selected', 'false');
            setTimeout(function() { 
                $('.tab-pane').addClass('show');
            }, 1000);
          });

          $('.nav-link').on('click', function(){
            $('.tab-pane').removeClass('active');
            $($(this).attr('data-bs-target')).addClass('active');
            $(this).addClass('active');
          });

          $('.js-btn-to-bottom').click(function(e){
            let _this = $(this);
            $('html, body').stop().animate({
              scrollTop: $(_this.attr('href')).offset().top - 110
            }, 600);
            e.preventDefault();
          });

    });

    document.addEventListener("DOMContentLoaded", function () {


        window.addEventListener("load", function (e) {
            console.log("window loaded");

            brandsPageAnimation();
            tastingAnimation();
            consumptionAnimation();
            ecoDesignedAnimation();
            ecoDesignedAnimation2();
            ecoDesignedAnimation3();
            recipesAnimation();
            engagementAnimation();

        }, false);

        const swiperConsumption = document.querySelector('.js-swiper-consumption')
        if (swiperConsumption) {
            const swiperText = new Swiper(".js-swiper-text", {
                slidesPerView: 3,
                direction: "vertical",
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
            });
            const swiperFade = new Swiper(".js-swiper-consumption", {
                spaceBetween: 30,
                effect: "fade",
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                thumbs: {
                    swiper: swiperText,
                },
            });
        }



    });

})(jQuery);


const brandsPageAnimation = () => {
    let lineSvgClass3 = 'kl-deco-03 kl-deco-03-animate kl-opacity-0 js-deco-hero-3'
    let lineSvgClass2 = 'kl-deco-02 kl-deco-02-animate kl-opacity-0 js-deco-hero-2'
    let tl = new TimelineMax();
    tl.fromTo(".js-title-hero-brands", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-img-hero-items-5", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, 1);
    tl.fromTo(".js-img-hero-items-4", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=20%");
    tl.fromTo(".js-img-hero-items-6", { y: 75, opacixy: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=30%");
    tl.fromTo(".js-img-hero-items-3", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=40%");
    tl.fromTo(".js-img-hero-items-7", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=50%");
    tl.fromTo(".js-img-hero-items-2", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=60%");
    tl.fromTo(".js-img-hero-items-8", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=70%");
    tl.fromTo(".js-img-hero-items-1", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=80%");
    tl.fromTo(".js-img-hero-items-9", { y: 75, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=90%");
    tl.fromTo(".js-btn-to-bottom", { opacity: 0 }, { opacity: 1, duration: 0.65 }, 5);
    tl.fromTo(".js-deco-hero", { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65 }, 5);
    tl.fromTo(".js-text-hero-brands", { y: 200, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75 }, 5);
    tl.fromTo(".js-deco-hero-3", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + lineSvgClass3 }, 5);
    tl.fromTo(".js-deco-hero-2", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + lineSvgClass2 }, 5);
}

const tastingAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-section-tasting", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-slide-section-tasting", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=20%");
    tl.fromTo(".js-deco-tasting-4", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=30%");
    tl.fromTo(".js-deco-tasting-5", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=50%");

    ScrollTrigger.create({
        trigger: "#id-section-tasting",
        start: "top 65%",
        end: "top 65%",
        animation: tl,
        id: `section-tasting`
    });
}

const consumptionAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-section-consumption", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-swiper-consumption", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=20%");
    tl.fromTo(".js-swiper-text-1", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=25%");
    tl.fromTo(".js-swiper-text-2", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=30%");
    tl.fromTo(".js-swiper-text-3", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=35%");
    tl.fromTo(".js-text-share", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=40%");

    ScrollTrigger.create({
        trigger: "#id-section-consumption",
        start: "top 45%",
        end: "top 45%",
        animation: tl,
        id: `section-consumption`
    });
}

const ecoDesignedAnimation = () => {
    let deco6ClassSvg = 'kl-deco-06 kl-deco-06-animate position-absolute'
    let tl = new TimelineMax();
    tl.fromTo(".kl-deco-06", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + deco6ClassSvg }, 1);
    tl.fromTo(".js-title-eco-designed", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-brick-items-1", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 1);

    ScrollTrigger.create({
        trigger: "#id-section-eco-designed",
        start: "top 65%",
        end: "top 65%",
        animation: tl,
        id: `section-eco-designed`
    });
}

const ecoDesignedAnimation2 = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-brick-items-2", { x: 300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);

    ScrollTrigger.create({
        trigger: "#id-grid-item-2",
        start: "top 75%",
        end: "top 75%",
        animation: tl,
        id: `grid-item-2`
    });
}

const ecoDesignedAnimation3 = () => {
    let deco7ClassSvg = 'kl-deco-07 kl-deco-07-animate position-absolute'
    let tl = new TimelineMax();
    tl.fromTo(".kl-deco-07", { opacity: 0 }, { opacity: 1, duration: 0.01, className: '+= ' + deco7ClassSvg }, 0);
    tl.fromTo(".js-brick-items-3", { x: -300, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);

    ScrollTrigger.create({
        trigger: "#id-grid-item-3",
        start: "top 75%",
        end: "top 75%",
        animation: tl,
        id: `grid-item-3`
    });
}

const recipesAnimation = () => {
    let tl = new TimelineMax();
    tl.fromTo(".js-title-section-recipes", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-deco-8", { opacity: 0 }, { opacity: 1, duration: 0.85 }, "<+=20%");
    tl.fromTo(".js-nav-tabs-brands", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, "<+=45%");
    tl.fromTo(".js-link-recipes-1", { opacity: 0 }, { opacity: 1, duration: 0.75 }, 1);
    tl.fromTo(".js-link-recipes-2", { opacity: 0 }, { opacity: 1, duration: 0.75 }, 2);
    tl.fromTo(".js-link-recipes-3", { opacity: 0 }, { opacity: 1, duration: 0.75 }, 3);

    ScrollTrigger.create({
        trigger: "#id-section-recipes",
        start: "top 45%",
        end: "top 45%",
        animation: tl,
        id: `section-recipes`
    });
}

const engagementAnimation = () => {
    let tl = new TimelineMax();
    let list = document.querySelectorAll('.js-anim-listing-ul li');
    tl.fromTo(".js-animate-fadein-left", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 0);
    tl.fromTo(".js-anime-title-h2", { y: -100, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=50%");
    tl.fromTo(".js-anime-title-h3", { y: 50, opacity: 0 }, { y: 0, opacity: 1, duration: 0.85 }, "<+=50%");
    tl.from(list, {duration: 0.5, x: 75, autoAlpha: 0, ease: "power3", stagger: { each: 0.35,amount: 0.5}},"<+=50%");
    tl.fromTo(".js-anime-btn", { x: -100, opacity: 0 }, { x: 0, opacity: 1, duration: 0.85 }, 2);
    ScrollTrigger.create({
        trigger: "#id-section-yop-mark-engagement",
        start: "top 80%",
        end: "bottom 20%",
        animation: tl,
    });
}