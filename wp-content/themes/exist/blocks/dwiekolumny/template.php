<section id="block_dwiekolumny" class="<?= the_field("bg"); ?>">
    <div class="container">
        <div class="row">
            <div
                class="<?= (get_field('reverse') ? 'col-lg-9 col-xl-9 order-1 ' : 'col-lg-9 order-2 doublecolumn__right') ?> doublecolumn__block">

                <h2><?php the_field('title') ?></h2>
                <div class="<?= (get_field('reverse') ? 'left' : 'right') ?>">
                    <?php the_field('text') ?>
                    <div class="<?= (get_field('reverse') ? 'doublecolumn__visible ' : 'doublecolumn__novisible') ?>">
                        <a class="doublecolumn__button" target="_blank"
                            href="https://booksy.com/pl-pl/86371_restart-studio-pilates-i-terapia-ruchem_trening-i-dieta_20383_gdansk">Umów
                            wizytę
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-12  <?= (get_field('reverse') ? 'col-lg-3 col-xl-3 order-2' : 'col-lg-3 order-1') ?>">
                <picture>
                    <source srcset="<?= the_field('photo_webp') ?>" type="image/webp">
                    <source srcset="<?= the_field('photo_jpg') ?>" type="image/png">
                    <img class="doublecolumn__image" src="<?= the_field('photo_jpg') ?>"
                        alt="<?php the_field('title') ?>">
                </picture>
            </div>
        </div>
    </div>
</section>