<?php
/*
        Template Name: A propos
    */
?>
<?php get_header(); ?>

<section class="kl-section-hero kl-section-hero-a-propos">
    <div class="container-fluid gx-0">
        <div class="kl-default-hero kl-object-position-top kl-product-hero">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/banniere_a_propos.jpg" class="img-fluid kl-img-hero w-100" alt="bannière à propos">
        </div>
    </div>
</section>

<section class="kl-section-default-desc kl-section-about-desc">
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
                <h2><?php the_field('titre_a_propos'); ?></h2>
            </div>
            <div class="kl-desc kl-mw-xl-85-perc mx-auto">
                <?php the_field('sous-titre_a_propos'); ?>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-about-territorial kl-pb-xl-100 kl-pb-md-50 kl-pb-30">
    <div class="kl-container-1144 container">
        <div class="row kl-row-desc-ter kl-gutter-y-25 kl-gutter-md-x-50 align-items-center">
            <div class="col-md-6 kl-col-md-62-perc">
                <div class="kl-desc-territorial kl-color-black">
                    <div class="kl-default-ctx-stf kl-mb-20 kl-cust-ln-title">
                        <h2><?php the_field('titre_bloc_1'); ?></h2>
                    </div>
                    <div class="kl-mw-xl-71-perc">
                        <?php the_field('paragraphe_bloc_1_a_propos'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 kl-col-md-38-perc kl-col-img">
                <div class="kl-img-prt-ter">
                    <figure class="kl-figure d-inline-block">
                        <?php
                        if (get_field('img_bloc_2_a_propos')) : ?>
                            <?php echo wp_get_attachment_image(get_field('img_bloc_2_a_propos'), 'large', '', array('class' => 'img-fluid kl-mask-img')); ?>
                        <?php endif; ?>
                        <span class="kl-bg-figure">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/bg-prd-apropos.png" class="img-fluid" alt="">
                        </span>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-map-interact kl-color-black kl-p-section-mobile kl-py-xl-75 kl-py-40">
    <div class="kl-decor-left">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/aft-left-flowers-map.svg" class="img-fluid" alt="">
    </div>
    <div class="kl-decor-right d-md-block d-none">
        <svg width="176" height="579" viewBox="0 0 176 579" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="" fill-rule="evenodd" clip-rule="evenodd" d="M236.326 577.291C329.721 561.911 345.091 425.816 358.741 315.057C371.739 209.587 383.156 84.5349 304.009 28.1035C218.86 -32.6073 114.852 13.0242 48.7349 94.0246C-10.0999 166.104 -11.975 274.999 24.913 370.028C66.9774 478.393 139.237 593.278 236.326 577.291Z" fill="#FDECB2" />
        </svg>
        <span class="kl-decor-sm">
            <svg width="155" height="207" viewBox="0 0 155 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M203.904 11.0998C173.109 -16.1628 123.022 15.9769 81.9463 41.748C42.8319 66.2887 -2.4494 96.7324 0.233393 138.885C3.11963 184.233 47.0216 206.778 92.4543 206.851C132.883 206.916 170.102 177.687 192.017 139.195C217.008 95.3007 235.917 39.4409 203.904 11.0998Z" fill="#FFDAAD" />
            </svg>
        </span>
    </div>
    <div class="container">
        <div class="kl-info-map text-center mx-auto kl-mw-950">
            <?php the_field('paragraphe1_a_propos'); ?>
        </div>
        <div class="kl-desc text-center mx-auto kl-mw-700">
            <?php the_field('paragraphe2_a_propos'); ?>
        </div>
        <div class="container mt-5">
            <div class="kl-media-photo-wrapper mx-auto kl-mw-617">
                <div class="kl-media-photo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/YOPLAIT DEF CARRE-1.jpg" class="img-fluid  kl-img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-yop-about-desc kl-p-section-mobile kl-my-md-60">
    <div class="kl-default-ctx-stf kl-mb-md-34 kl-mb-20 text-center">
        <h2><?php the_field('titre_bloc3_a_propos'); ?></h2>
    </div>
    <div class="kl-bg-yop-desc mx-auto kl-mw-1058">
        <div class="kl-yop-about-desc mx-auto kl-mw-660 text-md-start text-center">
            <div class="kl-yop-about-item">
                <div class="kl-title kl-mb-md-34 kl-mb-20">
                    <h3>
                        <i class="kl-icon">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers-orange-sd.svg" class="img-fluid" alt="">
                        </i>
                        <?php the_field('sous-titre_bloc3_a_propos'); ?>
                    </h3>
                </div>
                <div class="kl-desc">
                    <?php the_field('paragraphe_bloc3_a_propos'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-media-video">
    <div class="container">
        <div class="kl-media-video-wrapper">
            <span class="kl-logo-absolute">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/logo-ofa-b.svg" class="img-fluid" alt="">
            </span>
            <div class="kl-media-video mx-auto kl-mw-811 ratio ratio-16x9">
                <?php if (get_field('video_blocvideo_a_propos')) : ?>
                    <?php the_field('video_blocvideo_a_propos'); ?>
                <?php else : ?>
                    <video width="811" height="535" controls class="tm-mb-40">
                        <source src="<?php the_field('video_fichier_blocvideo_a_propos'); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
            </div>
            <div class="kl-yop-about-desc kl-mw-811 mx-auto kl-mt-36">
                <div class="kl-about-text text-center">
                    <div class="kl-mb-36">
                        <h5>Pour en savoir plus sur notre engagement auprès de l’OFA</h5>
                    </div>
                    <a href="https://yoplait.fr/yoplait-partenaire-de-lofa-pour-la-protection-des-abeilles/" class="kl-btn-red-primary kl-btn-decor kl-min-w-229">Cliquez ici</a>
                </div>
            </div>
            <span class="kl-anim-bee">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/abeille.svg" class="img-fluid kl-anim-svg-abeille" alt="">
            </span>
        </div>
    </div>
</section>

<section class="kl-section-src-nt">
    <div class="container kl-container-1000">
        <div class="row align-items-center kl-gutter-y-25 kl-mb-lg-80 kl-mb-40">
            <div class="col-md-6">
                <div class="kl-desc-src-prod text-md-end text-center">
                    <?php the_field('paragraphe_blocvideo_a_propos'); ?>
                </div>
            </div>
            <div class="col-md-6 kl-pl-lg-80 kl-pl-md-40 text-md-start text-center">
                <div class="kl-figure-src-prod d-inline-block">
                    <?php
                    if (get_field('img_blocvideo_a_propos')) : ?>
                        <?php echo wp_get_attachment_image(get_field('img_blocvideo_a_propos'), 'large', '', array('class' => 'img-fluid kl-mask-img')); ?>
                    <?php endif; ?>
                    <span class="kl-bg-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/bg-site-ind.png" class="img-fluid" alt="">
                    </span>
                </div>
            </div>
        </div>
        <div class="text-center kl-yop-about-desc kl-mb-xl-80 kl-mb-40">
            <div class="kl-title kl-mb-27">
                <h3>
                    <i class="kl-icon">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers-red.svg" class="img-fluid" alt="">
                    </i>
                    <?php the_field('titre_bloc4_a_propos'); ?>
                </h3>
            </div>
            <div class="text-center kl-about-text">
                <div class="kl-color-red-secondary kl-mb-25">
                    <h5><?php the_field('sous-titre_bloc4_a_propos'); ?></h5>
                </div>
                <?php the_field('paragraphe_bloc4_a_propos'); ?>
            </div>
        </div>
        <?php
        if (get_field('sous-titre_bloc4_a_propos')) : ?>
            <div class="row align-items-center kl-mb-xl-70 kl-mb-40 kl-gutter-y-30 gx-md-0">
                <div class="col-md-5">
                    <div>
                        <figure class="d-inline-block mb-0 kl-figure-yop-cart">
                            <?php
                            if (get_field('img_bloc4_a_propos')) : ?>
                                <?php echo wp_get_attachment_image(get_field('img_bloc4_a_propos'), 'large', '', array('class' => 'img-fluid', 'alt' => get_sub_field(''))); ?>
                            <?php endif; ?>
                            <span class="kl-aft-cart">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/aft-yop-panier.svg" class="img-fluid" alt="">
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div>
                        <?php the_field('paragraphe2_bloc4_a_propos'); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="text-center kl-yop-about-desc">
            <div class="text-center kl-about-text">
                <div class="kl-color-red-secondary kl-mb-25">
                    <h5><?php the_field('sous-titre2_bloc4_a_propos'); ?></h5>
                </div>
                <?php the_field('paragraphe3_bloc4_a_propos'); ?>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-photo-thumb">
    <div class="kl-media-photo-prt">
        <span class="kl-decor-left">
            <svg width="349" height="477" viewBox="0 0 486.2 477" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="" fill-rule="evenodd" clip-rule="evenodd" d="M271.423 121.102C231.797 60.3529 131.606 91.6003 49.7161 116.229C-28.2643 139.683 -119.49 170.292 -134.625 243.224C-150.908 321.687 -86.7884 380.538 -9.56561 401.893C59.152 420.896 136.1 388.584 191.353 333.369C254.36 270.407 312.616 184.254 271.423 121.102Z" fill="#FFDAAD" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M226.903 278.405C206.556 260.392 173.463 281.628 146.323 298.655C120.479 314.87 90.561 334.985 92.3336 362.836C94.2406 392.798 123.248 407.694 153.266 407.742C179.978 407.786 204.569 388.473 219.049 363.04C235.561 334.039 248.054 297.131 226.903 278.405Z" fill="#FDECB2" />
                <path d="M318.744 120.411C312.664 86.5096 285.091 82.4753 272.065 84.6958C317.041 107.534 309.294 182.185 299.799 216.656L304.721 233.962C312.273 216.671 326.343 162.787 318.744 120.411Z" fill="#FDECB2" />
            </svg>
        </span>
        <span class="kl-decor-right">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/flower-beige.svg" class="img-fluid" alt="">
        </span>
        <div class="container">
            <div class="kl-media-photo-wrapper mx-auto kl-mw-617">
                <div class="kl-media-photo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/Usine-about.jpg" class="img-fluid  kl-img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-about-coop">
    <div class="container kl-container-1134">
        <div class="kl-about-coop">
            <div class="kl-title kl-color-red-primary text-center kl-mb-27">
                <h3><?php the_field('titre_bloc5_a_propos'); ?></h3>
            </div>
            <div class="kl-desc text-center kl-mb-lg-40 kl-mb-20">
                <?php the_field('paragraphe_bloc5_a_propos'); ?>
            </div>
            <div class="row mx-auto kl-mw-924 kl-gutter-y-30">
                <?php if (have_rows('listing_bloc5_a_propos')) : ?>
                    <?php while (have_rows('listing_bloc5_a_propos')) : the_row(); ?>
                        <div class="col-md-6">
                            <div class="kl-about-coop-item d-flex">
                                <?php if (get_sub_field('logo_item')) : ?>
                                    <a href="<?php the_sub_field('lien_vers_item'); ?>" target="_blank">
                                        <?php
                                        if (get_sub_field('logo_item')) : ?>
                                            <?php echo wp_get_attachment_image(get_sub_field('logo_item'), 'large', '', array('class' => 'img-fluid')); ?>
                                        <?php endif; ?>
                                    </a>
                                <?php else : ?>
                                    <div class="kl-icon">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-flowers-red.svg" class="img-fluid" alt="">
                                    </div>
                                    <h6>
                                        <?php the_sub_field('item_#1'); ?> <span class="kl-color-orange-secondary"><?php the_sub_field('item_#2'); ?></span>
                                    </h6>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>