<div class="kl-bg-deco-footer position-relative kl-z-index-1">
    <?php if(is_page_template('template/yoplait-home4.php')) : ?>
        <div class="position-absolute kl-group-person-img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/home4/group-person.png" class="img-fluid" alt="">
        </div>
    <?php endif ?>
</div>

<footer class="kl-bg-yellow kl-custom-footer">
    <div class="container kl-container-xs-full kl-container-1136">
        <div class="kl-d-grid-footer">
            <div class="kl--logo-footer">
                <a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/new-logo-yoplait-small1.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="text-center">
                <div class="kl-text-24 kl-ff-seventh kl-fw-regular kl-color-white kl-mb-35 kl-el-mb">
                    <h3>Service consommateur</h3>
                </div>
                <div class="kl-mb-12">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/home4/phone-number.png" class="img-fluid" alt="">
                </div>
                <div class="kl-color-white kl-ff-sixth kl-text-14 kl-mb-40 kl-el-mb">
                    <p>Du lundi au vendredi de 9h à 18h et samedi de 9h à 12h (appel et service gratuit)</p>
                </div>
                <div>
                    <a href="#" class="btn kl-btn-theme kl-btn-lg-theme kl-bg-red kl-min-w-none kl-min-w-lg-240">Formulaire de contact</a>
                </div>
            </div>
            <div class="kl-column-menu">
                <svg class="kl-line-svg-separator" xmlns="http://www.w3.org/2000/svg" width="10" height="241" viewBox="0 0 10 241" fill="none">
                    <path d="M2.49128 2.86095L2.49128 2.86092C2.44113 2.03592 2.71984 1.46372 3.13277 1.0908C3.55799 0.706789 4.16631 0.498815 4.81541 0.500005C6.12008 0.502397 7.39602 1.32648 7.49313 2.92164C7.64926 5.49278 7.81254 8.05704 7.9755 10.6161C9.08383 28.0215 10.1769 45.188 8.90153 62.6548C7.43277 82.7599 7.60026 102.704 7.85424 122.817C8.01616 135.588 7.33974 148.229 6.66108 160.911C6.29674 167.72 5.93176 174.541 5.6955 181.4C5.30399 192.762 5.657 204.142 6.00945 215.506C6.24126 222.979 6.47283 230.445 6.4922 237.893C6.49434 238.718 6.18135 239.304 5.73392 239.689C5.27601 240.084 4.64762 240.293 3.99974 240.293C3.35191 240.293 2.72173 240.084 2.26091 239.688C1.81043 239.302 1.49433 238.716 1.4922 237.89C1.4726 230.435 1.23398 223.001 0.995648 215.576C0.611737 203.616 0.228562 191.679 0.762704 179.712C0.99399 174.531 1.27474 169.363 1.55529 164.198C2.30332 150.426 3.04998 136.68 2.85415 122.803C2.56217 102.032 2.47661 81.4868 4.04377 60.779C5.26331 44.6724 4.1984 28.7248 3.13059 12.7339C2.911 9.44532 2.69128 6.15494 2.49128 2.86095Z" fill="white" stroke="white"/>
                </svg>
                <div class="kl-text-24 kl-ff-seventh kl-fw-regular kl-color-white kl-mb-35 kl-el-mb">
                    <h3>Liens utiles</h3>
                </div>
                <div class="d-flex flex-column flex-lg-row">
                    <div class="kl-menu-footer">
                        <ul class="list-unstyled">
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Nos engagements</a></li>
                            <li><a href="#">Nos marques</a></li>
                            <li><a href="#">Nous rejoindre</a></li>
                            <li><a href="#">Actualités</a></li>
                        </ul>
                    </div>
                    <div class="kl-menu-footer">
                        <ul class="list-unstyled">
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">Qualité et caractéristiques environnementales produits</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if(get_the_id() == 1936 || get_the_id() == 1934): ?>
  <div class="mentionmanger">
    <h5>Une alimentation variée et équilibrée et un modèle de vie sain sont importants pour une bonne santé</h5>
  </div>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>