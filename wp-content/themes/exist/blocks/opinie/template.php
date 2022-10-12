<section id="block_opinie">

    <div class="slider">
        <div class="slide-track">
            <?php


if (have_rows('elements')) :
     $ilosc = 0;

    while (have_rows('elements')) : the_row();


    $name = get_sub_field('name');
    $text = get_sub_field('text');
    ?>

            <div>


                <div class="slide">
                    <?php
echo '<h4>'.$name.'</h4>';
echo '<p>'.$text.'</p>';
?>
                </div>



            </div>
            <?php
    endwhile;

else :
endif;
?>
            <?php


if (have_rows('elements')) :
     $ilosc = 0;

    while (have_rows('elements')) : the_row();


    $name = get_sub_field('name');
    $text = get_sub_field('text');
    ?>

            <div>


                <div class="slide">
                    <?php
echo '<h4>'.$name.'</h4>';
echo '<p>'.$text.'</p>';
?>
                </div>



            </div>
            <?php
    endwhile;

else :
endif;
?>
        </div>
    </div>

</section>