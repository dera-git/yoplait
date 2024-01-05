<?php
/*
    Template Name: Nous rejoindre
*/
?>
<?php get_header(); ?>

<section class="kl-section-default-desc">
    <div class="kl-decor-left-ctx d-sm-block d-none">
        <span class="kl-anim-svg-01 d-block">
            <svg width="264" height="588" viewBox="0 0 264 588" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="" fill-rule="evenodd" clip-rule="evenodd" d="M216.151 36.4304C127.25 -49.2309 -20.6861 34.9374 -141.979 102.25C-257.481 166.348 -391.283 246.496 -385.274 370.195C-378.809 503.275 -251.356 577.7 -118.444 586.759C-0.16988 594.82 109.991 516.652 175.785 408.435C250.813 285.033 308.568 125.48 216.151 36.4304Z" fill="#FFDAAD" />
            </svg>
        </span>
        <span class="kl-decor">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/decor-anim-01.svg" class="img-fluid" alt="">
        </span>
    </div>
    <div class="kl-decor-right-ctx">
        <span>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/flower-right.svg" class="img-fluid" alt="">
        </span>
    </div>
    <div class="container kl-container-912">
        <div class="text-center kl-default-ctx-stf kl-color-black">
            <div class="kl-title">
                <h2><?php the_field('titre_rejoindre'); ?></h2>
            </div>
            <div class="kl-desc">
                <p><?php the_field('sous-titre_rejoindre'); ?>
                </p>
                <div>
                    <a href="<?php the_field('lien_vers_nousrejoindrebloc'); ?>" class="kl-btn-red-primary kl-btn-decor kl-fill-green-secondary" target="_blank">
                        Nos offres
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-strength-team overflow-hidden kl-mt-n-xl-65 kl-mt-n-50">
    <div class="container kl-container-1110">
        <div class="row align-items-center kl-gutter-y-30">
            <div class="col-lg-8 col-md-7">
                <div class="kl-desc-prt kl-color-black-primary text-md-start text-center ">
                    <div class="kl-default-ctx-stf kl-color-black kl-mb-lg-46 kl-mb-25">
                        <div class="kl-title">
                            <h2><?php the_field('titre_bloc1_rejoindre'); ?></h2>
                        </div>
                        <div class="kl-desc">
                            <p><?php the_field('paragraphe1_bloc1_rejoindre'); ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="kl-title kl-mb-lg-42 kl-mb-20">
                        <h3><?php the_field('sous-titre_bloc1_rejoindre'); ?></h3>
                    </div>
                    <p>
                        <?php the_field('paragraphe2_bloc1_rejoindre'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="kl-msk-img-cli text-md-start text-center">
                    <figure class="mb-0 kl-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/mask/mask-equipe.png" class="img-fluid kl-img" alt="">
                        <span class="kl-decor">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/mask/flower-msk-cli-01.svg" class="img-fluid" alt="">
                        </span>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kl-section-advantage kl-color-black">
    <span class="kl-decor-advantage">
        <svg width="308" height="477" viewBox="0 0 308 477" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="" fill-rule="evenodd" clip-rule="evenodd" d="M230.423 121.102C190.797 60.3527 90.6064 91.6002 8.71604 116.229C-69.2643 139.683 -160.49 170.292 -175.625 243.224C-191.908 321.687 -127.788 380.538 -50.5657 401.893C18.152 420.896 95.0996 388.584 150.353 333.369C213.36 270.407 271.616 184.254 230.423 121.102Z" fill="#DBF0E5" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M185.903 278.405C165.556 260.392 132.463 281.628 105.323 298.655C79.4794 314.87 49.561 334.985 51.3336 362.835C53.2406 392.798 82.2476 407.694 112.266 407.742C138.978 407.786 163.569 388.473 178.049 363.04C194.561 334.039 207.055 297.131 185.903 278.405Z" fill="#FDECB2" />
            <path d="M277.744 120.411C271.664 86.51 244.091 82.4757 231.065 84.6961C276.041 107.534 268.294 182.185 258.799 216.656L263.721 233.962C271.273 216.671 285.343 162.787 277.744 120.411Z" fill="#DBF0E5" />
        </svg>
    </span>
    <div class="container kl-container-1268">
        <div class="text-center kl-default-ctx-stf kl-color-black kl-mb-73">
            <div class="kl-title kl-color-green-primary">
                <h2><?php the_field('titre_avantage_rejoindre'); ?></h2>
            </div>
            <div class="kl-desc kl-mw-780 mx-auto">
                <?php the_field('paragraphe_avantage_rejoindre'); ?>
            </div>
        </div>
        <div class="row align-items-center kl-gutter-y-30">
            <div class="col-md-7 kl-pl-xl-75 kl-pl-xxl-100">
                <div class="d-flex kl-list-tag-ctx kl-mw-564 kl-mb-25">
                    <div class="kl-icon">
                        <i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers.svg" class="img-fluid" alt=""></i>
                    </div>
                    <div class="kl-list-tag-item">
                        <h3><?php the_field('titre2_avantage_rejoindre'); ?></h3>

                        <?php the_field('paragraphe2_avantage_rejoindre'); ?>
                    </div>
                </div>
                <div class="d-flex flex-wrap kl-list-tag-row">
                    <div class="d-flex kl-list-tag-ctx">
                        <div class="kl-icon">
                            <i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers.svg" class="img-fluid" alt=""></i>
                        </div>
                        <div class="kl-list-tag-item">
                            <h3><?php the_field('titre3_avantage_rejoindre'); ?></h3>
                            <?php the_field('paragraphe3_avantage_rejoindre'); ?>
                        </div>
                    </div>
                    <div class="d-flex kl-list-tag-ctx">
                        <div class="kl-icon">
                            <i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers.svg" class="img-fluid" alt=""></i>
                        </div>
                        <div class="kl-list-tag-item">
                            <h3><?php the_field('titre4_avantage_rejoindre'); ?></h3>
                            <?php the_field('paragraphe4_avantage_rejoindre'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="kl-img-msk-advantage text-md-end">
                    <figure class="mb-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/img-flowers.png" class="img-fluid kl-img" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-map-ctx kl-color-black text-center kl-bg-default ">
    <div class="kl-container-1190 container">
        <div class="kl-default-ctx-stf kl-mb-lg-46 kl-mb-25">
            <h2><?php the_field('titre_bloc3_rejoindre'); ?></h2>
            <div class="kl-desc kl-mw-780 mx-auto">
                <?php the_field('paragraphe1_bloc3_rejoindre'); ?>
            </div>
        </div>
        <div class="row kl-my-lg-80 kl-my-40 kl-gutter-y-20">
            <div class="col-md-4 col-sm-6">
                <div class="text-center kl-cart-map kl-color-green-primary  ">
                    <div class="kl-img kl-mb-36">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/cart-green.svg" class="img-fluid" alt="">
                    </div>
                    <p class="kl-green-primary"><?php the_field('titre_image_bloc3_rejoindre'); ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-center kl-cart-map kl-color-red-primary">
                    <div class="kl-img kl-mb-36">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/cart-red.svg" class="img-fluid" alt="">
                    </div>
                    <p class="kl-red-primary"><?php the_field('titre_image2_bloc3_rejoindre'); ?></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-center kl-cart-map kl-color-orange-secondary">
                    <div class="kl-img kl-mb-36">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/cart-orange.svg" class="img-fluid" alt="">
                    </div>
                    <p class="kl-orange-secondary"><?php the_field('titre_image3_bloc3_rejoindre'); ?></p>
                </div>
            </div>
        </div>
        <div class="mx-auto kl-info-nb mx-auto">
            <p><?php the_field('sousimage3_bloc3_rejoindre'); ?></p>
        </div>
    </div>
</section>

<section class="kl-section-hs-yop kl-color-black">
    <span class="kl-decor-flower d-sm-block d-none">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/flowers-yelow.svg" class="img-fluid" alt="">
    </span>
    <div class="container-fluid kl-container-fluid-p-mobile kl-container-full-right-1134">
        <div class="row align-items-center kl-mb-lg-90 kl-mb-40 kl-gutter-y-25">
            <div class="col-md-7 col-lg-6">
                <div class="kl-hs-desc-green-primary kl-hs-desc kl-px-md-0 kl-px-sm-15">
                    <div class="kl-title">
                        <h2><i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-map-green.svg" class="img-fluid" alt=""></i> <?php the_field('titre_bloc4_rejoindre'); ?></h2>
                    </div>
                    <?php the_field('paragraphe_bloc4_rejoindre'); ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-6 kl-col-img-right pe-0">
                <div class="kl-img-hs-right d-flex justify-content-end">
                    <figure class="kl-figure mb-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/img-hs-1.png" class="img-fluid kl-img" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid kl-container-fluid-p-mobile kl-container-full-left-1134 kl-section-2">
        <span class="kl-decor-flower d-sm-block d-none">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/flowers-yelow.svg" class="img-fluid" alt="">
        </span>
        <div class="row align-items-center kl-gutter-y-25 kl-mb-lg-90 kl-mb-40">
            <div class="col-md-5 col-lg-6 kl-col-img-right ps-0 order-md-1 order-2">
                <div class="kl-img-hs-left d-flex justify-content-start">
                    <figure class="kl-figure mb-0">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/img-hs-2.png" class="img-fluid kl-img" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 order-md-2 order-1">
                <div class="kl-hs-desc-red-primary kl-hs-desc kl-px-md-0 kl-px-sm-15">
                    <div class="kl-title">
                        <h2><i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-map-red.svg" class="img-fluid" alt=""></i><?php the_field('titre_bloc5_rejoindre'); ?></h2>
                    </div>
                    <?php the_field('paragraphe_bloc5_rejoindre'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container kl-container-1268 kl-container-1290">
        <div class="row kl-gutter-y-30">
            <div class="kl-col-xl-56-perc col-md-6 kl-pl-lg-6-perc">
                <div class="kl-hs-desc-orange-secondary kl-hs-desc">
                    <div class="kl-title">
                        <h2><i><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-map-orange.svg" class="img-fluid" alt=""></i><?php the_field('titre_bloc6_rejoindre'); ?></h2>
                    </div>
                    <?php the_field('paragraphe_bloc6_rejoindre'); ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="kl-hs-img-merge">
                    <div class="d-flex justify-content-center">
                        <figure class="mb-0 kl-figure-top">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/img-hs-4.png" class="img-fluid kl-img" alt="">
                        </figure>
                    </div>
                    <div class="d-flex justify-content-end kl-mt-n-80">
                        <figure class="mb-0 kl-figure-bottom">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/img-hs-3.png" class="img-fluid kl-img" alt="">
                            <span class="kl-decor-flowers">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers.svg" class="img-fluid" alt="">
                            </span>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-info-collaborator overflow-hidden kl-p-section-mobile kl-color-black">
    <span class="kl-decor-flower d-sm-block d-none">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/flowers-yelow.svg" class="img-fluid" alt="">
    </span>
    <div class="kl-container-1044 container">
        <div class="kl-default-ctx-stf kl-mb-50 text-center">
            <div class="kl-title kl-mb-lg-39">
                <h2> <?php the_field('titre_bloc7_rejoindre'); ?></h2>
            </div>
            <div class="kl-desc kl-mw-740 mx-auto">
                <?php the_field('paragraphe_bloc7_rejoindre'); ?>
            </div>
        </div>

        <div class="kl-slick-navs-info mt-5">
            <div class="row kl-gutter-y-40 kl-gutter-lg-x-42">
                <div class="col-md-6 kl-col-xl-55-perc order-md-1 order-2">
                    <div class="kl-slider-navs-info">
                        <?php if (have_rows('membre_de_lequipe_rejoindre')) : ?>
                            <?php while (have_rows('membre_de_lequipe_rejoindre')) : the_row(); ?>
                                <div class="kl-slider-navs-item">
                                    <h3><?php the_sub_field('titre_membre_de_lequipe_rejoindre'); ?></h3>
                                    <?php the_sub_field('description_membre_de_lequipe_rejoindre'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 kl-col-xl-45-perc order-md-2 order-1">
                    <div class="kl-slider-team-prt">
                        <div class="kl-control-slider d-flex justify-content-between">
                            <button class="kl-prev-slider-team kl-btn-slider kl-button-not-bg">
                                <svg width="14" height="27" viewBox="0 0 14 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3494 0.613257C13.5402 0.811318 13.647 1.0772 13.647 1.35406C13.647 1.63093 13.5402 1.89681 13.3494 2.09487L2.68967 13.1826L13.3494 24.268C13.5402 24.4661 13.647 24.732 13.647 25.0088C13.647 25.2857 13.5402 25.5516 13.3494 25.7497C13.2566 25.8462 13.1457 25.923 13.0233 25.9754C12.9008 26.0278 12.7692 26.0548 12.6362 26.0548C12.5033 26.0548 12.3717 26.0278 12.2492 25.9754C12.1267 25.923 12.0158 25.8462 11.9231 25.7497L0.587482 13.9566C0.38839 13.7495 0.276963 13.4718 0.276963 13.1826C0.276963 12.8934 0.38839 12.6156 0.587482 12.4085L11.9231 0.615475C12.0158 0.518897 12.1267 0.442135 12.2492 0.389721C12.3717 0.337307 12.5033 0.310303 12.6362 0.310303C12.7692 0.310303 12.9008 0.337307 13.0233 0.389721C13.1457 0.442135 13.2566 0.518897 13.3494 0.615475V0.613257Z" fill="#43856A" />
                                </svg>
                            </button>
                            <button class="kl-next-slider-team kl-btn-slider kl-button-not-bg">
                                <svg width="14" height="27" viewBox="0 0 14 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.776071 0.822241C0.585272 1.0203 0.478455 1.28618 0.478455 1.56305C0.478455 1.83991 0.585272 2.10579 0.776071 2.30385L11.4358 13.3915L0.776071 24.477C0.585272 24.6751 0.478455 24.941 0.478455 25.2178C0.478455 25.4947 0.585272 25.7606 0.776071 25.9586C0.868812 26.0552 0.979696 26.132 1.10218 26.1844C1.22466 26.2368 1.35625 26.2638 1.4892 26.2638C1.62214 26.2638 1.75373 26.2368 1.87621 26.1844C1.9987 26.132 2.10958 26.0552 2.20232 25.9586L13.5379 14.1656C13.737 13.9585 13.8485 13.6808 13.8485 13.3915C13.8485 13.1023 13.737 12.8246 13.5379 12.6175L2.20232 0.82446C2.10958 0.727881 1.9987 0.651119 1.87621 0.598705C1.75373 0.546291 1.62214 0.519287 1.4892 0.519287C1.35625 0.519287 1.22466 0.546291 1.10218 0.598705C0.979696 0.651119 0.868812 0.727881 0.776071 0.82446V0.822241Z" fill="#43856A" />
                                </svg>
                            </button>
                        </div>
                        <div class="kl-slider-team">
                            <?php if (have_rows('membre_de_lequipe_rejoindre')) : ?>
                                <?php while (have_rows('membre_de_lequipe_rejoindre')) : the_row(); ?>
                                    <div class="kl-slider-team-item">
                                        <figure class="kl-figure mb-0 kl-figure-slider">
                                            <div class="d-inline-block kl-prt-img-team">
                                                <?php if (get_sub_field('portrait_membre_de_lequipe_rejoindre')) : ?>
                                                    <?php echo wp_get_attachment_image(get_sub_field('portrait_membre_de_lequipe_rejoindre'), 'large', '', array('class' => 'img-fluid kl-img-team', 'alt' => get_sub_field(''))); ?>
                                                <?php endif; ?>
                                                <span class="kl-decor kl-top d-block">
                                                    <svg class="kl-anim-svg-slider" width="290" height="309" viewBox="0 0 290 309" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M254.602 9.71507C205.786 -20.9081 143.921 35.0012 93.0531 80.0415C44.6139 122.931 -10.9962 175.394 2.37686 233.044C16.7641 295.066 82.6167 316.162 145.433 305.846C201.331 296.667 246.075 247.731 267.542 189.5C292.021 123.097 305.35 41.5497 254.602 9.71507Z" fill="#FFDAAD" />
                                                    </svg>
                                                </span>
                                                <span class="kl-decor kl-left"><img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/bf-slick.svg" class="img-fluid" alt=""></span>
                                                <span class="kl-decor kl-right"><img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/af-slick.svg" class="img-fluid" alt=""></span>
                                            </div>
                                        </figure>
                                        <div class="kl-info-team">
                                            <div class="d-inline-block kl-bg-team">
                                                <h3>
                                                    <?php the_sub_field('nom_membre_de_lequipe_rejoindre'); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-ours-jobs kl-p-section-mobile kl-color-black">
    <div class="kl-decor-anim-jobs">
        <svg width="169" height="620" viewBox="0 0 169 620" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="" fill-rule="evenodd" clip-rule="evenodd" d="M100.805 24.2878C0.128534 -47.1654 -133.609 58.1131 -243.514 142.753C-348.171 223.352 -468.532 322.548 -444.152 443.969C-417.923 574.599 -280.801 629.195 -148.023 618.341C-29.8687 608.683 67.4098 514.968 116.339 398.153C172.135 264.946 205.463 98.5677 100.805 24.2878Z" fill="#FFDAAD" />
        </svg>
    </div>
    <div class="kl-container-1044 container">
        <div class="text-center kl-mw-xl-83-perc mx-auto">
            <div class="kl-default-ctx-stf kl-mb-lg-45 kl-mb-30">
                <h2><?php the_field('titre_bloc8_rejoindre'); ?></h2>
            </div>
            <div class="text-center kl-jobs-item kl-mb-lg-50 kl-mb-40">
                <div class="kl-title kl-color-red-primary">
                    <?php the_field('paragraphe_bloc8_rejoindre'); ?>
                </div>
            </div>
            <div class="row align-items-center kl-gutter-md-y-50 kl-gutter-y-30 kl-mb-48">
                <div class="col-lg-4 col-md-5">
                    <div class="kl-jb-left-figure text-md-start text-center">
                        <figure class="kl-figure d-inline-block kl-pl-54">
                            <span class="kl-decor"><img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/aft-jb-left.svg" class="img-fluid" alt=""></span>
                            <?php
                            if (get_field('image_bloc8_rejoindre_2')) : ?>
                                <?php echo wp_get_attachment_image(get_field('image_bloc8_rejoindre_2'), 'large', '', array('class' => 'img-fluid kl-img', 'alt' => get_field('titre_bloc8_rejoindre_2'))); ?>
                            <?php endif; ?>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 offset-md-1">
                    <div class="kl-jobs-item text-md-start text-center">
                        <div class="kl-title kl-color-orange-primary">
                            <h3><?php the_field('titre_bloc8_rejoindre_2'); ?></h3>
                        </div>
                        <?php the_field('paragraphe2_bloc8_rejoindre'); ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="kl-jobs-item text-md-start text-center kl-col-md-90-perc">
                        <div class="kl-title kl-color-green-primary">
                            <h3><?php the_field('titre_bloc8_rejoindre_3'); ?></h3>
                        </div>
                        <?php the_field('paragraphe3_bloc8_rejoindre'); ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="kl-jb-right-figure text-md-start text-center">
                        <figure class="kl-figure d-inline-block kl-pr-52">
                            <span class="kl-decor"><img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/aft-jb-right.svg" class="img-fluid" alt=""></span>
                            <?php
                            if (get_field('image_bloc8_rejoindre_3')) : ?>
                                <?php echo wp_get_attachment_image(get_field('image_bloc8_rejoindre_3'), 'large', '', array('class' => 'img-fluid img kl-img', 'alt' => get_sub_field('titre_bloc8_rejoindre_3'))); ?>
                            <?php endif; ?>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="text-center kl-jobs-item">
                <div class="kl-title kl-color-orange-secondary kl-w-lg-88-perc mx-auto">
                    <h3><?php the_field('titre_bloc8_rejoindre_4'); ?></h3>
                </div>
                <?php the_field('paragraphe4_bloc8_rejoindre'); ?>
            </div>
        </div>
</section>

<section class="kl-section-want-join kl-pt-md-60 kl-pt-30 kl-color-black">
    <div class="kl-bg-section-want-join">
        <div class="kl-decor-right d-md-block d-none">
            <span class="kl-flower-decor">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/join-us/flower.png" class="img-fluid" alt="">
            </span>
        </div>
        <div class="container kl-container-cust-want-join">
            <div class="kl-want-join-item">
                <div class="kl-default-ctx-stf kl-mb-30">
                    <h2><?php the_field('titre_nousrejoindrebloc'); ?></h2>
                </div>
                <div class="kl-desc kl-mb-30 kl-mw-580">
                    <p><?php the_field('intro_nousrejoindrebloc'); ?></p>
                </div>
                <div>
                    <a href="<?php the_field('lien_vers_nousrejoindrebloc'); ?>" class="kl-btn-red-primary kl-btn-decor kl-fill-green-secondary" target="_blank">
                        Voir les offres
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>