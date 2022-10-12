<section class="logos">

	<div class="content" data-aos="fade-in">

		<div>
			<h3><?php the_field("maly_tekst"); ?></h3>
			<h2><?php the_field("duzy_tekst"); ?></h2>
		</div>

			<div class="logo-rotator">

				<?php

					if( have_rows('logotypy') ):

						$i = 0;

					    while ( have_rows('logotypy') ) : the_row();

					    	echo "<div>";

					    	$image = wp_get_attachment_image_src( get_sub_field('logo') , 'medium');

					    	if(get_sub_field('link')) {
					    	
					    		$logo = '<a href="' . get_sub_field('link') . '" target="_blank"><img src="' . $image[0] . '" /></a>';
					    	
					    	} else {
					    		$logo = '<img src="'. $image[0] . '" />';
					    	}

					    	echo $logo;

					    	echo "</div>";
								
					    endwhile;

					endif;

					?>
				

		</div>
	</div>

</section>