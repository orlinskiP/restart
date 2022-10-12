<section id="<?php echo the_field('block_type') ?>" class="<?php echo the_field('block_type') ?>" >

    <div class="container additional">
        <div class="row">
            <div
                class="col-12 text-center <?= (get_field('reverse') ? 'col-lg-6 col-xl-6 order-1 order-lg-2' : 'col-lg-6 order-2 order-lg-1') ?>">
                <img class="additional__icon " id="<?= the_field('image') ?>" src="<?= the_field('image') ?>"
                    alt="<?= the_field('image') ?>">
            </div>
            <div
                class="col-12 additional__center  <?= (get_field('reverse') ? 'col-lg-6 col-xl-6 order-1' : 'col-lg-6 order-2') ?>">
                <div>
                    <h3 class="additional__title "><?php the_field('title') ?></h3>
                    <?php the_field('text') ?>
                </div>

            </div>
        </div>
    </div>

</section>