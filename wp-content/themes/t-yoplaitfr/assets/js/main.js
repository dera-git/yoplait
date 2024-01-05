$(document).ready(function () {
    /* animate scroll */
    scrollWaypointInit($('.kl-animate-scroll'));

    $('.kl-slider-yop-default').slick({
        infinite: false,
        initialSlide: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth:true,
        centerMode:true,
        arrows: true,
        prevArrow : $('.kl-prev-slide'),
        nextArrow : $('.kl-next-slide'),
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    dots:true,
                    variableWidth:false,
                    centerMode:false,
                    slidesToShow: 1,
                    arrows: false,
                }
            },
        ]
    });

    $('.kl-slider-team').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.kl-prev-slider-team'),
        nextArrow: $('.kl-next-slider-team'),
        asNavFor: '.kl-slider-navs-info',
        fade: true,
    });

    $('.kl-slider-navs-info').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.kl-slider-team',
        dots: false,
        focusOnSelect: true,
        fade: true,
        adaptiveHeight: true,
    });

    $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.kl-slider-team').slick('slickGoTo', slideno - 1);
    });

    var link_filter = $('.kl-filter-tag-nws  li a') ;
    link_filter.on('click', function (){
        link_filter.removeClass('active');
        $(this).addClass('active');
    });

    $('.js-infinite-slide-logo').infiniteslide({
        'speed': 50,
        'direction': 'left',
        'pauseonhover': true,
        'clone': 3
    });

    $(window).on("load", function(){
        $('.kl-slide-infinite').removeClass('kl-hidden-slide-infinite');
    });
});

/* animate general */
function scrollWaypointInit( items, trigger ) {
    items.each( function() {
        var element = jQuery(this),
            osAnimationClass = element.data("animation"),
            osAnimationDelay = element.attr('data-animation-delay');
        element.css({
            '-webkit-animation-delay':  osAnimationDelay,
            '-moz-animation-delay':     osAnimationDelay,
            'animation-delay':          osAnimationDelay
        });
        var trigger = ( trigger ) ? trigger : element;
        trigger.waypoint(function() {
            element.addClass('animate__animated').addClass(osAnimationClass);
        },{
            // triggerOnce: true,
            offset: '80%'
        });
    });
}

$(".kl-img-hero").css({"-webkit-mask-size" : "initial"});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH').equalHeights();
});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH1').equalHeights();
});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH2').equalHeights();
});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH3').equalHeights();
});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH4').equalHeights();
});

jQuery.fn.equalHeights = function() {
    var max_height = 0;
    jQuery(this).each(function() {
        max_height = Math.max(jQuery(this).height(), max_height);
    });
    jQuery(this).each(function() {
        jQuery(this).height(max_height);
    });
};
jQuery(document).ready(function() {
    jQuery('.equalH5').equalHeights();
});

