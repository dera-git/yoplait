<?php
/*
    Template Name: Nos marques
*/
?>
<?php get_header(); ?>

<section class="kl-section-hero">
    <div class="container kl-container-912">
        <div class="text-center kl-default-ctx-stf kl-color-black">
            <div class="kl-title">
                <h2>Nos marques</h2>
            </div>
        </div>
    </div>
</section>

<section class="kl-section-marques kl-section-default-desc">
    <div class="kl-decor-left-ctx d-sm-block d-none">
        <span class="kl-anim-svg-01 d-block">
            <svg width="187" height="541" viewBox="0 0 187 541" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="kl-morpht-path-03" fill-rule="evenodd" clip-rule="evenodd" d="M185.322 248.961C174.559 112.693 80.3042 70.4629 3.59621 34.4568C-69.4492 0.169859 -156.052 -34.7524 -195.03 70.4269C-236.963 183.582 -205.24 339.563 -149.072 446.427C-99.0911 541.521 -23.6876 560.358 42.0677 521.528C117.05 477.25 196.511 390.619 185.322 248.961Z" fill="#FDECB2" />
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
    <div class="container">
        <ul class="row logos-wrapper">
            <?php $marques = new WP_Query(array('post_type' => 'marque', 'orderby' => 'date', 'posts_per_page' => '-1')); ?>
            <?php while ($marques->have_posts()) : $marques->the_post(); ?>
                <li class="col-lg-4 col-md-6 col-12 d-flex justify-content-center align-items-center flex-column text-center">
                    <div class="marque-content equalH">
                        <div class="image-content img-fluid image-rounded equalH1">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large', array('class' => 'logo-marque img-fluid', 'alt' => get_the_title()));
                            }
                            ?>
                        </div>
                        <div class="presentation">
                            <div class="kl-desc text-marque equalH3">
                                <p>
                                    <?php the_field('presentation_marque'); ?>
                                </p>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="kl-btn-green-primary kl-btn-decor kl-fill-beige-secondary equalH4">
                            Découvrir la marque
                        </a>
                    </div>
                </li>
            <?php endwhile;
            wp_reset_query();
            $marques->reset_postdata(); ?>
        </ul>
    </div>
    <span class="kl-decor-flower d-sm-block" id="numalim">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/svg-globals/flowers-yelow.svg" class="img-fluid" alt="">
    </span>
    <div class="container">
        <div class="text-center kl-default-ctx-stf kl-color-black">
            <div class="kl-desc descNuma">
                <p>
                    Retrouvez les fiches produits et informations relatives aux qualités ou caractéristiques environnementales en téléchargeant le tableau ci-dessous.
                </p>
                <a href="https://yoplait.fr/wp-content/uploads/2023/12/AGEC-Yoplait.xlsx" download="AGEC-Yoplait.xlsx" class="kl-btn-red-primary kl-btn-decor btn-before kl-min-w-229">
                    Télécharger le fichier
                </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>