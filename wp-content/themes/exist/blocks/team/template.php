<section id="block_team">

    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="team__title"><?php the_field('title') ?></h2>
            </div>
            <div class="col-sm-12 card__container">

                <?php

                if (have_rows('card')) :
                    while (have_rows('card')) : the_row();

                        // vars
                        $name = get_sub_field('name');
                        $title = get_sub_field('academic');
                        $photo = get_sub_field('photo');
                        $text = get_sub_field('text');
                        $doctor = get_sub_field('doctor')

                        ?>

                <div class="card__container--user">

                    <div class="up">
                        <div>
                            <?php
                                            echo '<h4 class="title">' . $title . '</h4>';
                                            echo '<h3 class="name">' . $name . '</h3>';
                                            ?>
                            <div class="line"></div>
                        </div>

                        <div class="image">
                            <?php
                                            echo '<img class="photo" src="' . $photo . '"/>'
                                            ?>
                        </div>


                    </div>
                    <div class="down">

                        <div>
                            <?php
                                            echo '<p class="text">' . $text . '</p>';

                                            if ($doctor != "") {
                                                echo '<a class="znany" target="_blank" href="' . $doctor . '"><img src="' . get_template_directory_uri() . "/images/znany.png" . '"/></a>';
                                            } else { }
                                            ?>
                        </div>

                    </div>

                </div>

                <?php

                    $delay = $delay + 400;

                    endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</section>