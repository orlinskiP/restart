<section id="block_offer">

    <div class="container">
        <div class="row offer">
            <div class="offer__box <?php the_field('title') ?>">
                <h4><?php the_field('title') ?></h4>
                <?php the_field('price') ?>
                <?php

                    // Check rows exists.
                    if (have_rows('elements')) :

                        // Loop through rows.
                        while (have_rows('elements')) : the_row();

                            // Load sub field value.
                        
                            $text = get_sub_field('text');
                    ?>

                <div class="element">
                    <?php
                            echo '<p class="text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;

                    else :
                    endif;
                    ?>
                <!-- <div class="offer__button text-center">
                    <p class="text-center"><a href="<?php the_field('link') ?>">Wiecej informacji</a></p>
                </div> -->

            </div>
            <div class="offer__box <?php the_field('title2') ?>">
                <h4> <?php the_field('title2') ?> </h4>
                <?php the_field('price2') ?>
                <?php

                    // Check rows exists.
                    if (have_rows('elements2')) :

                        // Loop through rows.
                        while (have_rows('elements2')) : the_row();

                            // Load sub field value.
                        
                            $text = get_sub_field('text2');
                    ?>

                <div class="element">

                    <?php
                            echo '<p class="text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;

                    else :
                    endif;
                    ?>
                  <!-- <div class="offer__button text-center">
                    <p class="text-center"><a href="<?php the_field('link2') ?>">Wiecej informacji</a></p>
                </div> -->
            </div>
            <div class="offer__box <?php the_field('title3') ?>" >
                <h4> <?php the_field('title3') ?> </h4>
                <?php the_field('price3') ?>
                <?php

                    // Check rows exists.
                    if (have_rows('elements3')) :

                        // Loop through rows.
                        while (have_rows('elements3')) : the_row();

                            // Load sub field value.
                        
                            $text = get_sub_field('text3');
                    ?>

                <div class="element">

                    <?php
                            echo '<p class="text">' . $text . '</p>';
                    ?>
                </div>

                <?php
                        endwhile;

                    else :
                    endif;
                    ?>
                <!-- <div class="offer__button text-center">
                    <p class="text-center"><a href="<?php the_field('link3') ?>">Wiecej informacji</a></p>
                </div> -->
            </div>
        </div>

    </div>

</section>