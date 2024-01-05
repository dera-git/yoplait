<section class="objectifs">
    <div class="bloc-abeilles">
        <?php if (get_field('titre_du_bloc_abeilles')) : ?>
            <h2 class=""><?php the_field('titre_du_bloc_abeilles'); ?></h2>
        <?php endif; ?>

        <?php if (get_field('bandeau_bloc_abeilles')) : ?>
            <div class="bandeau-abeilles">
            <?php while (have_rows('bandeau_bloc_abeilles')) : the_row(); ?>
                <div class="sous-bloc">
                    <?php 
                    $imageSousBloc = get_sub_field('image_bloc_abeilles'); ?>
                    <img src="<?php echo $imageSousBloc['url'] ?>" alt="">
                    <p><?php the_sub_field('sous-titre_bloc_abeilles'); ?></p>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>