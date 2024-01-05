<?php get_header();
$id_marque = get_the_ID();
$banniere = get_field('banniere_marque');
$bloc_1 = get_field('bloc_1_marque');
$image_deco = get_field('images_de_deco_marque');
$bloc_marque = get_field('bloc_marques_sur_la_home');
?>
  
<div class="overflow-hidden">

    <section class="kl-hero-single-mark kl-hero-single-decoration">
      <div class="kl-img-hero-single-mark">
          <?php
          if($banniere['image_banniere_marque']) : ?>
            <?php echo wp_get_attachment_image($banniere['image_banniere_marque'], 'large', '', array('class' => 'img-fluid kl-img-hero-mark', 'alt' => get_the_title())); ?>
          <?php endif; ?>
      </div>
      <div class="kl-hero-after-single-mark" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/single-marque/after-hero.svg)"> </div>
      <div class="container kl-max-w-xl-1164">
          <div class="kl-max-w-590">
              <div class="kl-mb-25 kl-opacity-0 js-title-hero-marque">
                  <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/logo-yoplait-panier.png" alt="logo panier">
              </div>
              <h1 class="kl-color-red kl-ff-seventh kl-text-32 kl-fw-regular kl-mb-25 kl-opacity-0 js-title-hero-marque2">
                <span class="d-none"><?php the_title(); ?></span> <?php echo $banniere['sous-titre_banniere_marque']; ?>
              </h1>
              <div class="kl-description-hero kl-text-24 kl-ff-sixth kl-fw-semi_bold kl-opacity-0 js-title-hero-marque2">
                <?php echo $banniere['presentation_banniere_marque']; ?>
              </div>
          </div>
      </div>
    </section>

    <section id="id-sect-gamme" class="kl-section-single-mark-game-product position-relative">
        <img class="kl-decor-anime-infinity kl-decor-fraise js-framboise kl-opacity-0" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/framboise.png" alt="">
        <div class="container kl-max-w-xl-1164 position-relative">
            <div class="kl-decor-bea">
                <div class="kl-decor-bea-item js-anime-bea-svg-loop opacity-0">
                    <img class="js-bea-fly kl-opacity-0" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/bea.svg" alt="">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="149px" height="103px" viewBox="0 0 149 103" enable-background="new 0 0 149 103" xml:space="preserve">
                        <g id="Calque_1">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#E3000B" d="M52.912,55.319c-2.164,0.233-4.323,0.496-6.473,0.835
                                    c-4.832,0.76-9.587,1.854-14.283,3.217c-3.952,1.145-7.799,2.585-11.636,4.059c-2.444,0.938-4.914,1.795-7.455,2.441
                                    c-0.614,0.158-1.267-0.167-1.532-0.696c-0.268-0.532-0.132-0.955,0.458-1.422c1.552-1.229,3.208-2.298,4.942-3.247
                                    c3.559-1.946,7.325-3.384,11.2-4.545c5.105-1.533,10.292-2.734,15.538-3.682c3.614-0.653,7.252-1.117,10.914-1.401
                                    c0.331-0.025,0.479-0.143,0.596-0.438c0.577-1.458,1.248-2.875,1.978-4.262c5.058-9.622,12.223-17.307,21.335-23.205
                                    c6.533-4.228,13.581-7.327,20.992-9.633c8.998-2.8,18.235-4.367,27.592-5.314c0.367-0.037,0.733-0.084,1.102-0.104
                                    c0.423-0.021,0.699,0.222,0.759,0.637c0.054,0.376-0.146,0.681-0.523,0.792c-0.106,0.031-0.215,0.053-0.322,0.076
                                    c-1.898,0.378-3.8,0.741-5.694,1.135c-5.469,1.14-10.893,2.455-16.233,4.102c-6.089,1.877-12.007,4.179-17.645,7.169
                                    c-7.883,4.183-14.762,9.611-20.483,16.478c-2.956,3.545-5.463,7.376-7.371,11.589c-0.088,0.195-0.223,0.381-0.208,0.626
                                    c0.104,0.005,0.195,0.015,0.287,0.012c6.188-0.12,12.358,0.184,18.507,0.875c3.101,0.35,6.166,0.89,9.177,1.717
                                    c2.873,0.789,5.643,1.838,8.216,3.357c2.396,1.414,4.369,3.267,5.795,5.667c1.736,2.921,2.365,6.056,1.719,9.41
                                    c-0.468,2.431-1.594,4.544-3.162,6.436c-2.178,2.628-4.957,4.378-8.138,5.53c-3.135,1.135-6.394,1.615-9.706,1.744
                                    c-3.975,0.156-7.929-0.077-11.84-0.853c-2.907-0.578-5.715-1.456-8.332-2.872c-5.042-2.729-8.39-6.836-9.919-12.374
                                    c-1.006-3.646-0.914-7.334-0.221-11.022c0.176-0.939,0.405-1.868,0.624-2.865C53.239,55.299,53.074,55.302,52.912,55.319z
                                    M59.389,54.879c-0.729,0.019-0.581,0.014-0.737,0.571c-0.806,2.875-1.255,5.803-1.196,8.791c0.068,3.414,1.045,6.534,3.194,9.235
                                    c1.567,1.972,3.541,3.426,5.788,4.531c2.05,1.011,4.229,1.617,6.451,2.086c3.462,0.734,6.963,1.056,10.499,0.879
                                    c3.321-0.164,6.55-0.764,9.578-2.212c2.347-1.124,4.283-2.73,5.693-4.935c0.837-1.31,1.375-2.729,1.514-4.285
                                    c0.184-2.055-0.389-3.902-1.569-5.574c-1.305-1.85-3.037-3.203-5.025-4.241c-2.167-1.129-4.466-1.916-6.823-2.543
                                    c-2.854-0.76-5.761-1.239-8.693-1.574c-4.072-0.466-8.16-0.656-12.253-0.778C63.668,54.779,61.528,54.825,59.389,54.879z" mask="url('#writing1')" />
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#F7A600" d="M69.142,93.73c2.275,0.031,4.35-0.33,6.351-1.107
                                    c0.242-0.094,0.479-0.195,0.667-0.381c0.355-0.349,0.517-0.762,0.371-1.256c-0.166-0.559-0.576-0.845-1.134-0.912
                                    c-0.732-0.087-1.466-0.148-2.2-0.227c-3.098-0.322-6.184-0.71-9.209-1.501c-6.106-1.599-10.909-5.07-14.608-10.124
                                    c-2.42-3.309-3.994-6.997-4.812-11.01c-0.018-0.09-0.056-0.178-0.065-0.268c-0.048-0.485-0.438-0.631-0.783-0.581
                                    c-0.41,0.058-0.64,0.323-0.612,0.774c0.047,0.791,0.088,1.585,0.187,2.37c0.45,3.563,1.488,6.944,3.172,10.124
                                    c2.766,5.226,6.901,8.998,12.205,11.536c2.528,1.209,5.173,2.039,7.954,2.411C67.502,93.696,68.386,93.76,69.142,93.73z" mask="url('#writing1')" />
                        </g>
                        <defs>
                            <mask id="writing1">
                                <path class="kl-play" fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#ffffff" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                                    M7.371,66.982c8-4,48.333-21.333,76-12.333s18.333,21.667,10.667,26.667s-61.333,0.333-30.667-42
                                    c26.636-36.769,70-30.333,70-30.333l-87,28.333c0,0-8,41,8.667,49.333c15.621,7.811,27.333,4.333,27.333,4.333" />
                            </mask>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="kl-text-54 kl-color-red kl-ff-seventh text-center kl-mb-15 kl-opacity-0 js-gamme-title">
                <h2>Nos gammes de produits</h2>
                <span class="kl-lh-0 kl-svg-resp-wrap d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="358" height="31" viewBox="0 0 358 31" fill="none">
                        <path d="M6.36115 22.9546C50.862 20.0123 95.3159 17.5365 139.827 17.2177C184.13 16.8985 228.353 18.281 272.499 21.3624C284.893 22.2286 297.28 23.2363 309.662 24.278C322.248 25.3365 334.829 27.046 347.444 27.6668C356.69 28.1199 357.831 11.5882 348.757 10.2627C337.769 8.65761 326.595 8.1736 315.527 7.37842C304.436 6.58207 293.336 5.9346 282.228 5.41368C260.004 4.36698 237.753 3.84771 215.497 3.53128C170.727 2.89537 125.981 4.29677 81.1807 6.62892C56.0777 7.93494 31.049 9.83787 6.00065 12.6898C1.25556 13.2284 1.54762 23.2745 6.36115 22.9546Z" fill="#F7A600" stroke="white" stroke-width="5" />
                    </svg>
                </span>
            </div>
            <div class="row kl-gy-40">
              <?php
              $list_produits_marque = new WP_Query(array(
                'post_type' => 'produit',
                'posts_per_page' => -1,
                'meta_query' => array(
                  array(
                    'key' => 'marque_produit',
                    'value' => $id_marque,
                    'compare' => '=',
                    'type' => 'IN',
                  ),
                ),
              ));
              while ($list_produits_marque->have_posts()) : $list_produits_marque->the_post(); ?>
                <div class="col-lg-3 col-sm-6 kl-opacity-0 js-gamme-item-1">
                    <a href="<?php the_permalink(); ?>" class="kl-card-range-product-mark text-center">
                        <div class="kl-product-wrapper-thumb kl-mb-30 d-flex flex-column align-items-center kl-max-w-280 mx-auto" data-mh="img-product">
                            <?php
                            if (has_post_thumbnail()) {
                              the_post_thumbnail('large', array('class' => 'img-fluid kl-img-product', 'alt' => get_the_title()));
                            }
                            ?>
                            <div class="kl-decor-top-hover">
                                <span class="kl-decor-top-1 d-inline-block">
                                    <img class="img-fluid" src="<?php the_field('deco_produit_#1'); ?>">
                                </span>
                                <span class="kl-decor-top-2 d-inline-block">
                                    <img class="img-fluid" src="<?php the_field('deco_produit_#2'); ?>">
                                </span>
                            </div>
                            <div class="kl-decor-bottom-hover">
                                <span class="kl-decor-bottom-1 d-inline-block">
                                    <img class="img-fluid" src="<?php the_field('deco_produit_#3'); ?>">
                                </span>
                                <span class="kl-decor-bottom-2 d-inline-block">
                                    <img class="img-fluid" src="<?php the_field('deco_produit_#4'); ?>">
                                </span>
                            </div>
                        </div>
                        <h3 class="kl-text-32 kl-ff-seventh mb-0" style="color: <?php the_field('couleur_principale_du_produit'); ?>;">
                          <?php the_title(); ?>
                        </h3>
                    </a>
                </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>

    <section id="id-sect-discovery-mark" class="kl-section-single-mark-discover kl-bg-green">
        <div class="kl-before-section-discover-single-mark" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/single-marque/before-section-decouvrir.svg)"></div>
        <div class="kl-after-section-discover-single-mark" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/single-marque/after-section-decouvrir.svg)"></div>
        <img class="kl-decor-anime-infinity kl-decor-fraise1 kl-opacity-0 js-discovery-fraise" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/fraise.png" alt="">
        <div class="container kl-max-w-xl-1164">
            <div class="kl-wrapper-row-map-discover">
                <div class="row kl-gy-50 kl-color-white align-items-center">
                    <div class="col-lg-6 kl-col-xl-45-perc order-lg-1 order-2 kl-pt-xl-125 kl-pt-lg-50 kl-opacity-0 js-discovery-left">
                        <div class="kl-title-strong-69 kl-ff-seventh kl-text-54 kl-mb-18">
                            <h2>Découvrez l’<span style="color: #F7A600">onctuosité</span> <strong>d’un bon yaourt
                                    au lait</strong>
                                <span style="color: #F7A600">100% français</span>
                            </h2>
                        </div>
                        <h3 class="kl-text-20 kl-ff-seventh kl-mb-22">avec de délicieux morceaux de fruits.</h3>
                        <div class="kl-text-18 kl-ff-sixth kl-color-strong-yellow kl-max-w-486">
                            <p>
                                Nos yaourts sont <strong>fabriqués en France</strong> dans nos laiteries de Vienne et Le Mans, le tout avec des méthodes
                                d’élevage favorisant le <strong>bien-être animal</strong> et le <strong>respect de l’environnement</strong>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 kl-col-xl-55-perc order-lg-2 order-1 kl-opacity-0 js-discovery-right">
                        <div class="text-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/map-desc.png" alt="map-desc">
                        </div>
                    </div>
                </div>
                <div class="kl-ingredients">
                    <div class="row g-0">
                        <div class="col-md-12 col-lg-3 kl-opacity-0 js-discovery-left">
                            <div class="kl-i-left position-relative">
                                <div class="kl-i-left-content">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/Puce.png" alt="Puce">
                                    <div class="kl-ff-seventh kl-color-black-primary kl-text-20 kl-lh-0_6 text-center">Aux bons
                                        <div class="kl-text-36 kl-lh-1">morceaux</div>
                                        <div class="kl-text-36 kl-lh-1">de <span class="kl-color-red">fruits</span></div>
                                    </div>
                                </div>
                                <img class="kl-i-left-decor-img kl-opacity-0 js-discovery-left1" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/fruits.png" alt="Puce">
                                <img class="kl-i-left-decor-arrow" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/arrow3.svg" alt="Puce...">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 position-relative kl-z-index-9">
                            <div class="kl-ingredients-center position-relative">
                                <div class="kl-i-center-data d-flex kl-opacity-0 js-discovery-left">
                                    <div class="kl-ingredients-center-listing">
                                        <div class="d-flex align-items-center kl-content-ingredients">
                                            <div class="kl-title-listing">
                                                <p class="kl-ff-seventh kl-color-black-primary kl-text-36 mb-0 text-uppercase">sans</p>
                                            </div>
                                            <ul class="kl-ff-seventh kl-color-black-primary">
                                                <li>conservateur,</li>
                                                <li>colorant*,</li>
                                                <li>arôme artificiel</li>
                                            </ul>
                                        </div>
                                        <div class="kl-ff-sixth kl-color-black-primary kl-text-14">*conformément à la réglementation</div>
                                    </div>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/arrow.svg" alt="..." class="kl-arrow1">
                                </div>
                                <img class="img-fluid kl-img-central kl-opacity-0 js-discovery-bottom" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/pack.png" alt="...">
                                <div class="kl-i-center-data-end kl-opacity-0 js-discovery-right">
                                    <img class="kl-arrow2" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/arrow2.svg" alt="...">
                                    <div class="kl-content-i-center-end text-center kl-ff-seventh kl-color-black-primary kl-text-24 mt-3 mt-md-0">
                                        Un nutri-score
                                        <span class="kl-text-40">de <span class="kl-color-green-quartenary">A</span> à <span class="kl-color-yellow">C</span></span>
                                        sur nos produits
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3 kl-opacity-0 js-discovery-right">
                            <div class="kl-i-right">
                                <div class="text-center">
                                    <div class="kl-ff-seventh kl-color-red kl-text-34">
                                        Le pot Panier est fait <br />à partir de Polystyrène
                                    </div>
                                    <img class="kl-i-left-decor-arrow my-2" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/bg_yellow.png" alt="Puce...">
                                    <div class="kl-ff-sxith kl-text-16 kl-color-black-primary">
                                        <p>Aujourd’hui c’est le pot <strong>le plus léger du marché</strong> sur sa catégorie.</p>
                                        <br />
                                        <p>Ce pot a été optimisé au maximum, <br />depuis 2018 nous avons </p>
                                    </div>
                                    <div class="kl-ff-seventh kl-color-red kl-text-24 mt-1">réduit de 13% la quantité de polystyrène utilisée.</div>
                                    <div class="kl-ff-sxith kl-text-16 kl-color-black-primary mt-2">
                                        <p>C'est simple, un pot plus légerne <br />tiendrait pas !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="kl-decor-anime-infinity kl-decor-fraise2 kl-opacity-0 js-discovery-coco" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/coco.png" alt="">
    </section>

    <section id="id-sect-partener-single-mark" class="kl-sect-partener-single-mark position-relative kl-z-index-9 overflow-x-hidden">
        <div class="container kl-max-w-xl-1164">
            <div class="row">
                <div class="col-md-12 col-lg-6 position-relative">
                    <img class="kl-feuille-decor kl-decor-anime-infinity kl-opacity-0 js-partener-item3" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/feuille-mure.png" alt="">
                    <div class="kl-partener-img-bordered position-relative kl-z-index-5 kl-opacity-0 js-partener-item1">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/image7.png" alt="">
                        <svg width="493" height="570" viewBox="0 0 493 570" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M476.094 192.14C476.088 191.948 476.052 191.485 475.881 191.327C475.378 190.866 473.305 190.974 472.625 191.01C469.066 191.197 469.099 192.133 469.125 192.886C473.224 309.082 485.78 530.822 485.907 533.049C485.991 534.512 485.602 537.417 484.203 538.976C484.067 539.128 483.786 539.604 483.581 539.952C482.776 541.316 481.776 543.014 479.968 543.108L438.026 545.306C436.619 545.38 436.237 546.338 436.039 545.411C406.092 547.838 367.38 548.356 321.193 550.777C207.907 556.714 79.8984 560.811 43.3637 561.925C42.19 561.962 41.5241 561.982 41.4042 561.986C37.8223 562.119 34.5726 559.154 34.3095 555.508C33.9977 551.203 31.2326 513.173 28.9998 488.644C24.5981 418.24 22.7236 346.953 20.9101 278.012L20.9067 277.891C20.1751 250.059 19.4189 221.28 18.5035 192.865C16.4909 135.564 7.29408 29.0947 7.20155 28.0361C7.05324 26.3336 7.5812 24.6947 8.68585 23.4171C9.79066 22.1426 11.3342 21.3867 13.0345 21.2906C13.3201 21.2746 42.7864 19.5912 85.5327 17.351C156.556 13.6288 254.471 8.87581 317.606 7.37352L317.729 7.36904C319.589 7.27159 321.066 5.66608 321.023 3.79078C321 2.8567 320.615 1.98665 319.939 1.34213C319.262 0.696663 318.375 0.353625 317.441 0.376542C254.304 1.87893 156.417 6.62948 85.4161 10.3505C45.1234 12.4621 15.9081 14.1194 12.7093 14.3011C9.03125 14.5118 5.75012 16.1238 3.39519 18.8427C1.04032 21.5627 -0.0828017 25.0483 0.230432 28.6558C0.610187 33.055 9.52904 136.743 11.5099 193.132C12.4304 221.74 13.1861 250.472 13.9163 278.258C15.7308 347.292 17.6074 418.678 22.0206 489.225L22.0349 489.459C24.3566 514.958 27.3243 556.108 27.3524 556.512C27.8985 564.084 34.4763 570.251 41.7149 569.978C41.8278 569.974 42.4017 569.957 43.4075 569.926C72.7187 569.049 176.303 565.772 278.586 560.412C299.986 559.29 321.348 558.343 342.006 557.426C361.643 556.555 380.192 555.732 397.808 554.809C413.682 553.977 426.956 552.896 438.425 552.295L480.335 550.099C483.039 549.957 486.019 548.03 489.445 544.21C491.952 541.414 493.097 536.233 492.902 532.778C492.775 530.548 480.197 308.427 476.094 192.14Z" fill="#E3000B" />
                        </svg>
                    </div>
                    <img class="img-fluid kl-logo-ofa-mark kl-opacity-0 js-partener-item1" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/logo-ofa.png" alt="">
                </div>
                <div class="col-md-12 col-lg-6 py-5">
                    <div class="kl-ff-seventh kl-color-red kl-text-64 kl-lh-1 kl-opacity-0 js-partener-item2">Yoplait, <br />partenaire de l’OFA</div>
                    <div class="kl-ff-sixth kl-color-black-primary kl-text-18 kl-mt-40 kl-mb-45 kl-opacity-0 js-partener-item3">
                        <p>Depuis 2018, Yoplait participe à la préservation de la biodiversité, aux côtés de l’Observatoire français d’Apidologie (OFA) ! Ensemble, <span class="kl-ff-seventh kl-color-red kl-text-24">plus de 800 millions de fleurs mellifères</span> qui nourrissent les abeilles ont déjà été semées en France.</p>
                    </div>
                    <a href="#" class="btn kl-bg-red kl-btn-theme kl-btn-xl-theme kl-opacity-0 js-partener-item3">En savoir plus sur l’OFA</a>
                </div>
            </div>
        </div>
    </section>
    
</div>
<div id="id-coco" class="kl-decor-feuille-coco position-relative">
    <img class="kl-decor-anime-infinity kl-decor-fraise3 kl-opacity-0 js-coco" src="<?php bloginfo('template_directory'); ?>/assets/images/single-marque/feulle-coco.png" alt="">
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/single-marque.js"></script>
<?php get_footer(); ?>