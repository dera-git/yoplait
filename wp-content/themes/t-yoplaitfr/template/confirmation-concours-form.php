<?php 
/**
 * Template Name: Confirmation formulaire Concours
 */

 get_header();
?>

<section class="kl-bg-red kl-section-game-competition position-relative">
    <div class="container kl-container-xs-full kl-container-1136 position-relative kl-z-index-3">
        <div class="row kl-gy-45">
            <div class="col-lg-6 text-center">
                <div class="kl-desc-game-competition pt-3">
                    <div class="kl-text-64 kl-color-yellow kl-ff-seventh kl-lh-0_95 kl-transform--3 text-uppercase mb-2">
                        <h2>Jeu <br> Concours</h2>
                    </div>
                    <div class="kl-text-36 kl-color-white kl-ff-seventh kl-mb-12">
                        <p>Du 5 janvier au 5 mars 2024</p>
                    </div>
                    <div class="kl-text-18 kl-color-white kl-ff-sixth kl-p-18-22 kl-max-w-428 mx-auto kl-mb-20">
                        <p>Partagez votre avis sur <a href="#">Yoplait en Brique</a> et tentez de remporter un des <strong>3 lots mis en jeu</strong> !</p>
                    </div>
                    <div class="kl-text-18 kl-color-white kl-ff-seventh kl-max-w-370 mx-auto">
                        <p>Le tirage au sort pour déterminer les gagnants aura lieu le 06/03/2024</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <div class="kl-grid-image">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/jeu-concours/image-grid.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container kl-container-xs-full kl-container-1030 kl-container--form position-relative kl-z-index-2">
        <div class="kl-image-absolute-yop">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/jeu-concours/brique-yoplait.png" class="img-fluid" alt="">
        </div>
        <div class="kl-block-cofiramtion kl-bg-white">
            <div class="kl-max-w-490 mx-auto">
                <div class="kl-text-36 kl-color-red kl-ff-seventh text-center d-flex justify-content-center align-items-center mb-2">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="37" height="35" viewBox="0 0 37 35" fill="none">
                        <path d="M7.96636 29.8902C8.39959 27.6941 13.6689 19.5252 16.949 15.1313C19.9045 11.1714 30.4853 0.925637 33.2307 0.0883886C35.9785 -0.748049 37.0373 4.45881 34.8354 11.1828C32.6328 17.9075 22.0544 27.5132 16.407 31.0277C10.7589 34.543 9.99137 34.2899 9.21578 33.6368C8.441 32.9821 7.60291 31.7319 7.96636 29.8902Z" fill="#E30613"/>
                        <path d="M3.61352 16.1845C5.21257 17.3585 8.04314 20.1266 9.58458 23.7133C11.0214 27.0598 12.6942 29.9991 11.9681 32.2237C11.4351 33.8552 10.5533 35.3301 7.17994 32.6358C3.80579 29.9407 0.326157 24.1976 0.0503194 19.9205C-0.225518 15.6426 0.68721 15.5274 1.46037 15.3984C2.23515 15.2694 2.75112 15.5517 3.61352 16.1845Z" fill="#F7A600"/>
                    </svg>
                    <h2>Félicitations !</h2>
                </div>
                <div class="kl-text-18 kl-color-red kl-ff-sixth kl-fw-semi_bold text-center kl-mb-20">
                    <p>Votre participation au jeu concours Yoplait en Brique a bien été prise en compte.</p>
                </div>
                <div class="kl-text-12 kl-color-black-primary kl-ff-inter text-center kl-fw-semi_bold kl-p-stong">
                    <p>
                    Vous ne recevrez pas d’email de confirmation. <br>
                    Le tirage au sort aura lieu le <strong>06/03/2024</strong>. Seuls les gagnants seront avertis par mail.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>