<?php

/*
	Template Name: General
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>
			<div class="container col-xs-12 page_wrapper shadow">
				<div class="page_header">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="page_content">
					<p><?php the_content(); ?></p>
				</div>
			</div>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>
