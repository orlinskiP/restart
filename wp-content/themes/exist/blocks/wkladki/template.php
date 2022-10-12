<section id="block_wkladki">

    <div class="container tlo">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 class="insoles__title" data-aos="fade-up" data-aos-duration="1500"><?php the_field('title') ?></h4>
            </div>
            <div class="col-sm-12 text-center">
                <h2 class="insoles__header" data-aos="fade-up" data-aos-duration="1500"><?php the_field('header') ?></h2>
            </div>
            <div class="col-sm-12 text-center">
                <h3 class="insoles__text" data-aos="fade-up" data-aos-duration="1500"><?php the_field('text') ?></h3>
            </div>
            <div class="col-sm-4">
                <a href="<?= site_url(); ?>"><img data-aos="zoom-in" data-aos-duration="1500" src="<?= get_template_directory_uri() . "/images/wkladki_1.png"; ?>" alt="Fizjomed Logo" /></a>
            </div>
            <div class="col-sm-4">
                <a href="<?= site_url(); ?>"><img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200" src="<?= get_template_directory_uri() . "/images/wkladki_2.png"; ?>" alt="Fizjomed Logo" /></a>
            </div>
            <div class="col-sm-4">
                <a href="<?= site_url(); ?>"><img data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400" src="<?= get_template_directory_uri() . "/images/wkladki_3.png"; ?>" alt="Fizjomed Logo" /></a>
            </div>
            <div class="col-sm-6">
                <div class="insoles__text" data-aos="fade-up" data-aos-duration="1500"><?php the_field('text-left') ?></div>
            </div>
            <div class="col-sm-6">
                <div class="insoles__text" data-aos="fade-up" data-aos-duration="1500"><?php the_field('text-right') ?></div>
            </div>

        </div>
    </div>

</section>