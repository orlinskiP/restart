<section id="block_dlakogo">

    <div class="container for">

        <div class="row">
            <div class="col-12 text-center">
                <picture class="for__photo">
                    <source srcset="<?= get_template_directory_uri() . "/images/bigTriangle.webp"; ?>"
                        type="image/webp">
                    <source srcset="<?= get_template_directory_uri() . "/images/bigTriangle.jpg"; ?>" type="image/png">
                    <img class="" src="<?= get_template_directory_uri() . "/images/bigTriangle.jpg"; ?>" alt="icon">
                </picture>
            </div>

            <div class="col-12 for__index">
                <h3>Dla kogo jest pilates?</h3>
            </div>
            <div class="col-12 for__index">
                <div class="for__text for__text--first">
                    <?php the_field("textUp") ?>
                </div>

            </div>
            <div class="col-12 col-lg-7 offset-md-5 for__index">
                <div class="for__text for__text--second">
                    <?php the_field("textBottom") ?>
                </div>
            </div>

        </div>
    </div>

</section>