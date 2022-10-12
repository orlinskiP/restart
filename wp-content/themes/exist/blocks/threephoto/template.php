<section id="block_threephoto">
    <div class="line">

    </div>
    <div class="container">

        <div class="row">
            <div class="col-4 col-md-4 p-0  text-center	">
                <picture>
                    <source srcset="<?= the_field('photo_1webp') ?>" type="image/webp">
                    <source srcset="<?= the_field('photo_1jpg') ?>" type="image/png">
                    <img class="doublecolumn__image" src="<?= the_field('photo_1jpg') ?>">
                </picture>
            </div>
            <div class="col-4 col-md-4 p-0  text-center	">
                <picture>
                    <source srcset="<?= the_field('photo_2webp') ?>" type="image/webp">
                    <source srcset="<?= the_field('photo_2jpg') ?>" type="image/png">
                    <img class="doublecolumn__image" src="<?= the_field('photo_2jpg') ?>">
                </picture>
            </div>
            <div class="col-4 col-md-4 p-0 	text-center">
                <picture>
                    <source srcset="<?= the_field('photo_3webp') ?>" type="image/webp">
                    <source srcset="<?= the_field('photo_3jpg') ?>" type="image/png">
                    <img class="doublecolumn__image" src="<?= the_field('photo_3jpg') ?>">
                </picture>
            </div>
        </div>
    </div>

</section>