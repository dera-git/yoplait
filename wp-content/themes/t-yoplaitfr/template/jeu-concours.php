<?php 
/**
 * Template Name: Jeu Concours
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
    <div class="container kl-container-xs-full kl-container-1030 kl-container--form position-relative">
        <div class="kl-image-absolute-yop">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/jeu-concours/brique-yoplait.png" class="img-fluid" alt="">
        </div>
        <div class="kl-form-opinion kl-bg-white">

            <?php the_content(); ?>

            <div class="kl-text--10 kl-color-black-primary kl-ff-sixth text-center mt-2">
                <p>Les informations personnelles communiquées sur ce formulaire sont destinées à l’usage exclusif de Yoplait France dans l’unique finalité de [...]. Conformément à la loi Informatique et Libertés du 6 Janvier 1978 modifiée, chaque internaute ayant rempli ce formulaire dispose d’un droit d’accès, de rectification ou de radiation des informations personnelles le concernant qu’il peut exercer en s’adressant au Délégué à la Protection des Données.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>