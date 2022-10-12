<section id="block_realization">
    <section id="block_realization">


        <div class="slider">
            <div class="slide-track">
                <?php

if (have_rows('element')) :
    while (have_rows('element')) : the_row();

        // vars
        $title = get_sub_field('title');
        $photowebp = get_sub_field('photowebp');
        $photojpg = get_sub_field('photojpg');
        $link = get_sub_field('link');

       
            echo
			'<div class="slide">
				<a href="' . $link . '" target="_blank">
					<picture>
						<source srcset="' . $photowebp . '" type="image/webp">
						<source srcset="' . $photojpg . '" type="image/png">
						<img class="doubleColumn__block--image" src="' . $photojpg . '" alt="' . $title . '">
					</picture>
				</a>
			
         	</div>' ;

    endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
</section>