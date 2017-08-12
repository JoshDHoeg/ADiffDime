<?php

/*
	Template Name: General
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>
			<div class="container col-xs-12 page detail_wrapper shadow">
				<a  class="exitbtn right" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png" width="20px"></a>
				<div class="detail_header">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="detail_content">
					<p><?php the_content(); ?></p>
				</div>
				<div class="detail_footer">
						<button type="button" class="close-btn" onclick="window.location.href='/'">Close</button>
				</div>
			</div>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>
