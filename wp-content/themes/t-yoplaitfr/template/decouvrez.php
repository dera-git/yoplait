<?php
/*
    Template Name: Découvrez
*/
?>
<?php get_header(); ?>

<section class="kl-section-hero">
    <div class="container-fluid gx-0">
        <div class="kl-default-hero kl-small">
            <?php
            if(get_field('banniere_decouvrez')) : ?>
                <?php echo wp_get_attachment_image(get_field('banniere_decouvrez'), '', '', array('class' => 'img-fluid kl-img-hero w-100')); ?>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="content-decouvrez">
    <div class="container">
        <iframe src="https://yoplait.pixibox.com/" frameborder="0"></iframe>
    </div>
</section>
    
<?php get_footer(); ?>