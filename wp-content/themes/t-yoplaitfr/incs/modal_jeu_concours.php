<div class="modal fade kl-modal-yoplait" id="id-modal-jeux-concours" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <button type="button" class="btn btn-secondary close kl-close-modal position-absolute d-lg-block d-none" data-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
            <div class="container custom-modal kl-bg-red position-relative">
                <button type="button" class="btn btn-secondary close kl-close-modal kl-close-modal-inside position-absolute" data-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 text-center kl-left-content">
                            <div class="kl-title-modal position-relative">
                                <h2 class="text-uppercase">Jeu Concours</h2>
                                <h3>Du 5 janvier au 5 mars 2024</h3>
                                <div class="kl-content-description-modal">
                                    <p>
                                    Partagez votre avis sur <span>Yoplait en Brique</span> et <br> tentez de remporter un des 3 lots mis en jeu !
                                    </p>
                                </div>
                                <a href="<?php the_permalink(2452); ?>" class="btn kl-btn-theme kl-btn-xl-theme kl-bg-yellow">Je participe !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute kl-img-left">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/modal-jeu-concours/left-image.png" alt="">
            </div>
            <div class="position-absolute kl-img-right d-lg-block d-none">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/jeu-concours/image-grid.png" alt="">
            </div>
        </div>
    </div>
</div>