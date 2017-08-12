<!--the detail view template for a post-->

<div class="container col-xs-12 detail_wrapper shadow">

	<a  class="exitbtn right" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png" width="20px"></a>
	<div class="detail_header">
		<h1 class="detail-title"><?php the_title() ?></h1>

		<div class="thumbnail">
			<?php the_post_thumbnail('small'); ?>
		</div>

		<small>Posted on: <?php the_time('F j, Y'); ?> by <?php get_the_author(); ?></small>
	</div>
	<div class="detail_content">
		<?php the_content(); ?>
	</div>
	<div class="detail_footer">
			<button type="button" class="close-btn" onclick="window.location.href='/'">Close</button>
	</div>

</div>
