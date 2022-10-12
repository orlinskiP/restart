<section id="block_slider">

    <div class="slides">

        <?php

            if( have_rows('slides') ):

                while ( have_rows('slides') ) : the_row(); ?>

                    <div class="slide <?= get_sub_field("align_to"); ?>" style="background-image: url('<?= get_sub_field("background"); ?>');">

                        <div class="container">
                        
                            <div class="caption">

                                <?= get_sub_field("content"); ?>

                            </div>

                        </div>

                    </div>

                <?php endwhile;

            endif;

        ?>

    </div>

</section>