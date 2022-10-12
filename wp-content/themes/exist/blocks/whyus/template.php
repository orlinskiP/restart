<section id="block_whyus">

    <div class="container">

        <div class="row">
            <div class="text-center <?= (get_field('reverse') ? 'col-12 col-lg-4 order-1 order-lg-2 reverse' : 'col-12 col-lg-4 order-2 order-lg-1') ?>" data-aos="fade-up" data-aos-duration="1500">

            </div>
            <div class="whyus__center  <?= (get_field('reverse') ? 'col-12 col-lg-8 order-1' : 'col-12 col-lg-8 order-2') ?>" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="whyus__number "><?php the_field('number') ?></h3>
                <div>

                    <h3 class="whyus__title "><?php the_field('title') ?></h3>
                    <?php the_field('text') ?>
                </div>
            </div>
        </div>
    </div>

</section>