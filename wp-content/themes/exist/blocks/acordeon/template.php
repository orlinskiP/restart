<section id="block_acordeon">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="accordion">
                    <?php


                if (have_rows('elements')) :
                     $ilosc = 0;
    
                    while (have_rows('elements')) : the_row();

    
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    ?>

                    <div>
                        <?php
                    echo '<input type="radio" name="faq-accordion" id="section'.$ilosc.'" class="accordion__input">';
                    echo '<label for="section'.$ilosc.'" class="accordion__label">'.$title.'</label>';
                    echo '<div class="accordion__content">';
                    echo '<p> '.$text.' </p>';
                    echo '</div>' ;
                   
                    $ilosc++;
                    ?>
                    
                    </div>

                    <?php
    endwhile;

else :
endif;
?>


</section>