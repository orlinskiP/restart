<section id="block_about">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="about__title">
                    <?php the_field('title') ?>
                </div>
                <div class="about__text about__text--first">
                    <?php the_field('text1') ?>
                </div>
                <div class="about__text about__text--second">
                    <?php the_field('text2') ?>
                </div>
            </div>

        </div>
    </div>
        <picture class="about__photo">
            <source srcset="<?= get_template_directory_uri() . "/images/trojkat.webp"; ?>" type="image/webp">
            <source srcset="<?= get_template_directory_uri() . "/images/trojkat.jpg"; ?>" type="image/png">
            <img class="" src="<?= get_template_directory_uri() . "/images/trojkat.jpg"; ?>" alt="icon">
        </picture>


</section>