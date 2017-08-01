<?php

/*
	Template Name: Page No Title
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

			<div class="container col-xs-12 page-content shadow">
				<h2><?php the_title(); ?></h2>
				<hr>
				<p><?php the_content(); ?></p>
			</div>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>
