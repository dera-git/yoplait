(function ($) {
    
    $(document).ready(function () {
        
    });
    
});

const heroAnimation = () => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".kl-hero-single",
            start: "top 150",
            end: "bottom bottom",
            //scrub: 5,
            id: `hero-single`,
            once: true,
            //markers: true,
        }
    });

    tl.fromTo(".kl-hero-single-img-produit", {x: -200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75});
    tl.fromTo(".kl-hero-single-img-bol", {x: 200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<");
    tl.fromTo(".kl-hero-single h1", {y: 200, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<");
    tl.fromTo(".kl-hero-single h2", {y: 150, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<+=50%");
    tl.fromTo(".kl-hero-single h3", {y: 100, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<+=50%");
    tl.to(".kl-hero-single-bottom", {opacity: 1, duration: 0.75}, "<");
}

const degusterAnimation = () => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".kl-deguster",
            start: "top center",
            end: "bottom bottom",
            //scrub: 5,
            id: `deguster`,
            once: true,
            //markers: true,
        }
    });

    tl.fromTo(".kl-deguster .kl-text-54", {y: 200, opacity: 0}, {y: 0, opacity: 1, duration: 0.75});
    tl.fromTo(".kl-deguster-left", {x: -200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<+=50%");
    tl.fromTo(".kl-deguster-right", {x: 200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<");
    tl.to(".kl-deguster-animation", {opacity: 1, duration: 0.75}, "<+=50%");
}

const ficheAnimation = () => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".kl-fiche-produit",
            start: "top center",
            end: "bottom bottom",
            //scrub: 5,
            id: `fiche`,
            once: true,
            //markers: true,
        }
    });

    tl.fromTo(".kl-fiche-produit-ingredients-wrapper", {x: -200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75});
    tl.fromTo(".kl-fiche-produit-image", {x: 200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<");
    tl.fromTo(".kl-fiche-produit-valeurs-wrapper", {y: 200, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<+=50%");
}

const recyclageAnimation = () => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".kl-recyclage",
            start: "top center",
            end: "bottom bottom",
            //scrub: 5,
            id: `recyclage`,
            once: true,
            //markers: true,
        }
    });

    tl.fromTo(".kl-recyclage-image img", {x: -300, opacity: 0}, {x: 0, opacity: 1, duration: 0.75});
    tl.to(".kl-recyclage-image-after", {opacity: 1, duration: 0.75});
    tl.fromTo(".kl-recyclage-tri", {y: 200, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<");
    tl.fromTo(".kl-recyclage .kl-text-64", {x: 200, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<");
    tl.fromTo(".kl-recyclage .kl-text-38", {x: 150, opacity: 0}, {x: 0, opacity: 1, duration: 0.75}, "<+=75%");
    tl.fromTo(".kl-recyclage-animation", {scale: 0, opacity: 0}, {scale: 1, opacity: 1, duration: 0.75}, "<");
}

const autresProduitsAnimation = () => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".kl-autres-produits",
            start: "top center",
            end: "bottom bottom",
            //scrub: 5,
            id: `autres-produits`,
            once: true,
            //markers: true,
        }
    });

    tl.fromTo(".kl-autres-produits-col", {y: -150, opacity: 0}, {y: 0, opacity: 1, duration: 0.5, stagger: 0.15});
    tl.fromTo(".kl-autres-produits .kl-text-64", {y: 150, opacity: 0}, {y: 0, opacity: 1, duration: 0.75}, "<+=50%");
}

window.addEventListener("load", function(e){
    heroAnimation();
    degusterAnimation();
    ficheAnimation();
    recyclageAnimation();
    autresProduitsAnimation();
});