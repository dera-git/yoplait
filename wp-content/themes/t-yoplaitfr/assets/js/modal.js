(function ($) {
    "use strict";
    let globalTimeline = gsap.timeline();
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("load", function (e) {
            if (sessionStorage.getItem('modalClosedkxk')) {
                $('#id-modal-jeux-concours').modal('hide');
            } else {
                $('#id-modal-jeux-concours').modal('show');
            }
            modalElement();
            $('#id-modal-jeux-concours').on('hidden.bs.modal', function () {
                closeModal();
            });

        }, false);
    
    });
})(jQuery);

function closeModal() {
    if (!sessionStorage.getItem('modalClosedkxk')) {
      $('#id-modal-jeux-concours').modal('hide');
      sessionStorage.setItem('modalClosedkxk', 'true');
    }
}

const modalElement = () => {
    let tl = new TimelineMax();
    tl.fromTo(".kl-img-right", { x: 200, opacity: 0 }, { x: 0, opacity: 1, duration: 2 }, 0);
    tl.fromTo(".kl-img-left", { x: -200, opacity: 0 }, { x: 0, opacity: 1, duration: 2 }, 0);
    tl.fromTo(".kl-title-modal", { y: -50, opacity: 0 }, { y: 0, opacity: 1, duration: 2 }, 0);
}