<?php
/*
        Template Name: Actualités
    */
?>
<?php get_header(); ?>
<section class="kl-sect-banner-new" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/news/banner.png')">
    <div class="container kl-container-1170">
        <div class="kl-max-w-280 kl-new-title">
            <div class="kl-ff-seventh kl-text-72 kl-fw-regular kl-color-red kl-title-new text-center">
                <h2>Nos actualités</h2>
            </div>
        </div>
    </div>
</section>
<section id="id-section-news" class="kl-bg-yellow kl-section-actus-news">
    <div class="container kl-container-xs-full kl-container-1136">
        <div class="kl-img-marques">
            <div class="kl-image-transform-news kl-w-image-transform-news position-relative js-img-commitments-news kl-animate-border02 kl-marque-news">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/marques.png" class="img-fluid" alt="">
                <svg width="756" height="271" viewBox="0 0 756 271" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M615.392 270.223C589.413 270.223 563.611 270.212 538.121 270.028C499.852 269.753 460.282 269 421.398 270C421.36 270 421.322 270 421.284 270C342.471 267 262.005 267.874 184.188 268.192C125.834 268.434 65.4933 268.593 6.3283 267.737C3.7363 267.737 1.4213 265.406 1.3723 262.778C-0.428702 222.514 -0.0627021 201.594 0.291298 162.044C0.527298 135.71 0.771298 108.469 0.372298 81.7051C0.347298 80.0491 1.6703 78.6801 3.3273 78.6551C4.9763 78.606 6.3473 79.9511 6.3713 81.6071C6.7723 108.443 6.5273 135.708 6.2913 162.077C5.9403 201.285 5.5773 221.817 7.3303 261.663C66.1733 262.504 126.153 262.257 184.163 262.017C262.009 261.697 342.505 261.363 421.399 263.649C460.311 263.291 499.889 263.577 538.163 263.853C606.921 264.346 678.012 264.859 748.392 261.69C750.361 177.351 750.361 91.909 748.392 7.64005C694.202 7.15205 639.397 7.40505 586.383 7.64905C533.032 7.89405 477.863 8.14905 423.342 7.64905C297.741 5.85405 160.378 5.52705 3.3913 6.64905C1.7603 6.66305 0.381298 5.32705 0.370298 3.67005C0.359298 2.01305 1.6923 0.660054 3.3493 0.649054C160.38 -0.471946 297.785 -0.144946 423.413 1.64905C477.877 2.14805 533.025 1.89505 586.356 1.64905C639.709 1.40305 694.878 1.15005 749.397 1.64905C752.034 1.64905 754.37 3.98505 754.37 6.64905C756.369 91.5601 756.369 177.738 754.369 262.719C754.37 265.284 752.084 267.599 749.456 267.648C704.778 269.679 659.832 270.223 615.392 270.223Z" fill="#E3000B"/>
                </svg>
                <div class="text-center kl-mt-new--30">
                    <a href="<?php the_permalink(1508); ?>" class="btn kl-btn-theme kl-btn-xl-theme kl-bg-red kl-min-w-none kl-min-w-lg-346">Découvrir nos engagements</a>
                </div>
            </div>
        </div>
        <div class="row kl-gx-lg-40 kl-gx-xl-50 kl-gy-55">
          <?php
          $articles = new WP_Query(array(
            'ignore_sticky_posts'	=> true,
            'update_post_meta_cache' => false,
            'no_found_rows'		  => true,
            'post_type'			  => 'post',
            'orderby'				=> 'date',
            'order'				  => 'DESC',
            'posts_per_page'		 => -1,
          ));
          while ($articles->have_posts()) : $articles->the_post(); ?>
            <?php
            $id_marque = get_field('marque_associee_article');
            ?>
            <div class="col-lg-4">
                <div class="kl-card-actus kl-opacity-0 js-card-actus1">
                    <a href="<?php the_permalink(); ?>">
                        <div class="position-relative kl-header-card-actus">
                            <?php if($id_marque[0]): ?>
                              <span class="kl-image-brand-card">
                                <?php
                                if(get_field('logo_rond_m', $id_marque[0])) : ?>
                                  <?php echo wp_get_attachment_image(get_field('logo_rond_m', $id_marque[0]), 'large', '', array('class' => 'img-fluid kl-img-contain', 'alt' => get_the_title($id_marque))); ?>
                                <?php endif; ?>
                              </span>
                            <?php endif; ?>
                            <div class="kl-image-actus">
                              <?php
                              if (has_post_thumbnail()) {
                                the_post_thumbnail('large', array('class' => 'img-fluid kl-img-cover', 'alt' => get_the_title()));
                              }
                              ?>
                            </div>
                        </div>
                        <div class="kl-card-body-actus d-flex flex-column">
                            <div class="kl-text-14 kl-ff-sixth kl-fw-bold kl-color-black-primary mb-1">
                              Publié le <?php echo get_the_date('d/m/Y'); ?>
                            </div>
                            <div class="kl-text-24 kl-ff-seventh kl-fw-regular kl-color-red kl-mb-20 kl-el-mb">
                                <h3>
                                  <?php the_title(); ?>
                                </h3>
                            </div>
                            <div class="kl-text-16 kl-ff-sixth kl-fw-regular kl-color-black-primary kl-mb-20 kl-el-mb">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="mt-auto">
                                <span class="d-inline-block kl-btn-theme text-uppercase kl-btn-md-theme kl-bg-yellow kl-min-w-138">Lire l’article</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
          
          <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<section id="id-setion-promotions" class="kl-mb-20 position-relative kl-z-index-9">
    <div class="container kl-container-xs-full kl-container-1136">
        <div class="position-relative">
            <div class="kl-deco-promotion">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/home4/deco-promotion.png" class="img-fluid" alt="">
            </div>
            <div class="kl-bg-red kl-block-promotion position-relative">
                <div class="d-flex align-items-center flex-column flex-lg-row mx-auto kl-max-w-500 kl-max-w-lg-730">
                    <div class="kl-pub-promotion js-img-promotions">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/home4/promotion-price.png" class="img-fluid" alt="">
                    </div>
                    <div class="kl-ms-lg-40 kl-mt-30 kl-mt-lg-0 text-center text-lg-start">
                        <div class="kl-ff-seventh kl-color-white kl-fw-regular kl-text-64 kl-opacity-0 js-title-promotions">
                            <h2>Nos promotions</h2>
                        </div>
                        <div class="kl-color-white kl-text-18 kl-ff-sixth mx-auto kl-opacity-0 js-desc-promotions">
                            <p>Découvrez nos promotions et gagnez des réductions pour découvrir les nouveautés Yoplait !</p>
                        </div>
                        <div class="kl-mt- kl-opacity-0 js-btn-promotions">
                            <a href="<?php the_permalink(850); ?>" class="btn kl-btn-theme kl-btn-xl-theme kl-bg-yellow">Accéder aux promotions du moment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>