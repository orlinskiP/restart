<section id="block_cennik">

    <div class="container">

        <div class="cennik">
            <div class=" table__box">

                <?php
                if (have_rows('elements')) :

                    while (have_rows('elements')) : the_row();

                        $title = get_sub_field('title');
                      
                    ?>
                <?php 
                ?>
                <div class="table">
                    <?php
                        echo '<div class="table__title"><p>'.$title.'</p></div>';
                        if (have_rows('table')) :

                            while (have_rows('table')) : the_row();
                            $textPrice = get_sub_field('textPrice');
                            $price = get_sub_field('price');
                ?>

                    <div class="table__line">
                        <?php
                                echo '<div class="table__price table__price--textPrice"><p>'.$textPrice.'</p></div>';
                                echo '<div class="table__price table__price--price"><p>'.$price.'</p></div>';
                            ?>
                    </div>
                    <?php
                        endwhile;
                        else :
                    endif;
                    ?>
                </div>
                <?php
                        endwhile;
                    else :
                endif;
                ?>
            </div>
            <div class="content">
                <div class="content__photo">
                    <img class="table__photo" src="<?= the_field('image') ?>" alt="icon">
                </div>
                <div class="content__info">
                    <p><?= the_field('header') ?></p>
                </div>
                <div class="content__button">
                    <a class="table__button" href="<?= the_field('link') ?>">Zamów
                        wizytę</a>
                </div>
                <div class="content__bottomText">
                    <p><?= the_field('text') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>