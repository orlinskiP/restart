<section id="block_fourblock">

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-6 text-center fourblock__flex">
                <picture>
                    <source srcset="<?= the_field('iconwebp1') ?>" type="image/webp">
                    <source srcset="<?= the_field('iconpng1') ?>" type="image/png">
                    <img class="fourblock__flex--image" src="<?= the_field('iconpng1') ?>" alt="twój opiekun www">
                </picture>
                <div class="fourblock__info">
                    <h3><?php the_field('title1') ?></h3>
                    <?php the_field('text1') ?>
                </div>

            </div>
            <div class="col-12 col-lg-6 text-center fourblock__flex">
                <picture>
                    <source srcset="<?= the_field('iconwebp2') ?>" type="image/webp">
                    <source srcset="<?= the_field('iconpng2') ?>" type="image/png">
                    <img class="fourblock__flex--image" src="<?= the_field('iconpng2') ?>" alt="twój opiekun www">
                </picture>
				<div class="fourblock__info">
                    <h3><?php the_field('title2') ?></h3>
                    <?php the_field('text2') ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center fourblock__flex">
                <picture>
                    <source srcset="<?= the_field('iconwebp3') ?>" type="image/webp">
                    <source srcset="<?= the_field('iconpng3') ?>" type="image/png">
                    <img class="fourblock__flex--image" src="<?= the_field('iconpng3') ?>" alt="twój opiekun www">
                </picture>
				<div class="fourblock__info">
                    <h3><?php the_field('title3') ?></h3>
                    <?php the_field('text3') ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center fourblock__flex ">
                <picture>
                    <source srcset="<?= the_field('iconwebp4') ?>" type="image/webp">
                    <source srcset="<?= the_field('iconpng4') ?>" type="image/png">
                    <img class="fourblock__flex--image" src="<?= the_field('iconpng4') ?>" alt="twój opiekun www">
                </picture>
				<div class="fourblock__info">
                    <h3><?php the_field('title4') ?></h3>
                    <?php the_field('text4') ?>
                </div>
            </div>

        </div>
    </div>

</section>