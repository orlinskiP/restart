<section id="block_elements">

    <div class="container">

        <div class="row">

            <?php

// Check rows exists.
if (have_rows('elements')) :

	// Loop through rows.
	while (have_rows('elements')) : the_row();

		// Load sub field value.
	
        $icon = get_sub_field('icon');
		$title = get_sub_field('title');
        $text = get_sub_field('text');
?>
            <div class="col-12 col-lg-6 col-xl-4 text-center">
                <div class="element">
                    <?php
                     echo '<img class="element__icon" src="' . $icon . '"/>';
                   
		echo '<p class="element__title">' . $title . '</p>';
        echo  $text ;
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
    </div>

</section>