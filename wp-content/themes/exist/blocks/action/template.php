<section id="block_action">

    <div class="container">

        <div class="row">
            <?php
                if (have_rows('part')) :
                 
                    while (have_rows('part')) : the_row();
                        // vars
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>

            <div class="col-6 col-sm">
                <div>
                    <?php echo  $title; ?>
                </div>
                <div class="action__line" ></div>
                <div class="action__dot" ></div>
                <div><?php echo  $text; ?></div>

            </div>
            <?php
                     
                        endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>