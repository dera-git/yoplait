<?php get_header(); ?>

<section class="kl-section-article">
    <div class="container kl-container-996">
        <div class="text-center kl-default-ctx-stf kl-cust-ln-title kl-mb-lg-75 kl-color-black">
            <div class="kl-title">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="text-left kl-pb-30 kl-pb-sm-50">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>