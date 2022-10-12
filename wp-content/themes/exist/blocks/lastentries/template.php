<section id="block_lastentries">
			
	<div class="container">

		<div class="row">
			<div class="col-12">

				<h2>Ostatnie wpisy</h2>

			</div>

		</div>
		
		<div class="row">

			<?php

			$recent_args = array(
			    "posts_per_page" => 3,
			    "orderby"        => "date",
			    "order"          => "DESC"
			);      

			$recent_posts = new WP_Query( $recent_args );

			if ( $recent_posts -> have_posts() ) :
			    while ( $recent_posts -> have_posts() ) :

			    $recent_posts -> the_post();

			    ?>

			    <div class="col-4">

			    	<article>

			    		<a href="<?php the_permalink(); ?>">
							<?php

								if ( has_post_thumbnail() ) {

									the_post_thumbnail();

								}

							?>
						</a>

			    		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			    		<p><?php the_excerpt(); ?></p>

			    	</article>


				</div>

			    <?php

			    endwhile;
			endif;

			?>

		</div>
	</div>

</section>