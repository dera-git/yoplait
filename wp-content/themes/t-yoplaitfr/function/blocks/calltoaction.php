<section class="proteger-abeilles">
    <div class="calltoaction">
        <?php 
        $image = get_field('image_calltoaction'); ?>
        <?php if ($image) : ?>
            <img src="<?php echo $image['url']; ?>" alt="logo-ofa">
        <?php endif; ?> 
        <?php if (get_field('titre_du_bloc_calltoaction')) : ?>
            <h2 class="title-border"><?php the_field('titre_du_bloc_calltoaction'); ?></h2>
        <?php endif; ?>
        <?php the_field('contenu_bloc_calltoaction'); ?>
        <?php
        $lien = get_field('lien_calltoaction');
        ?>
        <?php if ($lien['url']) : ?>
            <a href="<?php echo $lien['url']; ?>"><?php echo $lien['title']; ?></a>
        <?php endif; ?>
    </div>
</section>