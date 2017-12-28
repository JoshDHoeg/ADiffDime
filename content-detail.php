<!--the detail view template for a post-->

<div class="container col-xs-12 detail_wrapper shadow zoomIn wow animated">

	<a  class="exitbtn right" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/close.png" width="20px"></a>

	<div class="detail_header">
		<a href="/"> Home </a>
		<p style="display:inline">></p>
		<a href="/"><?php the_category(' &gt; '); ?></a>
	</div>
	<div class="detail_intro row">
		<div class="col-sm-6">
			<div class="thumbnail">
				<?php the_post_thumbnail('small'); ?>
			</div>
		</div>
		<div class="col-sm-6">
			<hr/>
			<h1 class="detail-title"><?php the_title() ?></h1>
			<p>Posted on: <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
			<hr/>
		</div>
	</div>

	<div class="detail_content col-xs-12">
		<?php the_content(); ?>
	</div>

	<div class="related-posts">
		<h3>Check out some other dimensions!</h3>
		<?php
		  $orig_post = $post;
		  global $post;
		  $tags = wp_get_post_tags($post->ID);

		  if ($tags) {
		  $tag_ids = array();
		  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		  $args=array(
		  'tag__in' => $tag_ids,
		  'post__not_in' => array($post->ID),
		  'posts_per_page'=> 4, // Number of related posts to display.
		  'caller_get_posts'=> 1
		  );

		  $my_query = new wp_query( $args );

		  while( $my_query->have_posts() ) {
		  $my_query->the_post();
		  ?>

		  <div class="related-thumb col-sm-3 col-xs-12">
				<?php
					if( has_post_thumbnail() ):
					$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
					endif;
				?>
					<a class="related-link" href="<?php echo esc_url( get_the_permalink() ); ?>" > <!--data-toggle="modal" data-target="#post-detail-<?php the_ID(); ?>"-->
						<div class="related-content" style="background-image: url(<?php echo $urlImg; ?>);">
							<div class="related-post-title">
								<h1>
									<?php the_title() ?>
								</h1>
							</div>
						</div>
					</a>
		  </div>

		  <? }
		  }
		  $post = $orig_post;
		  wp_reset_query();
		?>
	</div>



</div>
