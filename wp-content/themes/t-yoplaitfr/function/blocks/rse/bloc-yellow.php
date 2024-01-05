<?php
$image = get_field('image_bloc_jaune');
$desc = get_field('description_bloc_jaune');
$desc2 = get_field('texte_en_bas_bloc_jaune');
?>
<section id="id-section-transform" class="position-relative kl-section-transform">
    <div class="overflow-hidden kl-pt-50">
        <?php if ($image) : ?>
            <div class="kl-bloc-img-flower02 kl-animate-in-left">
                <img src="<?php echo $image ?>" class="kl-mask-img-flower02 img-fluid" alt="">
            </div>
        <?php endif ?>
        <div class="container kl-container-1136 kl-p-container">

            <?php if ($desc) : ?>
                <div class="kl-animate-bloc-yellow">
                    <div class="kl-bloc-yellow">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/rse/yoplait-angle-haut-gauche.svg" class="img-fluid kl-decor-line-l position-absolute" alt="">
                        <div class="kl-color-white kl-ff-sixth kl-text-16">
                            <?php echo $desc ?>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/rse/yoplait-angle-bas-droit.svg" class="img-fluid kl-decor-line-r position-absolute" alt="">
                    </div>
                </div>
            <?php endif ?>
            <?php if ($desc2) : ?>
                <div class="kl-animate-in-right">
                    <div class="kl-transform-bloc kl-color-yellow kl-ff-seventh kl-text-20 pe-4 me-2">
                        <?php echo $desc2 ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>