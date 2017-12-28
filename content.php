<!--content template how a particular content item appears in the website-->

<article id="post-<?php the_ID(); ?>" <?php post_class('container col-xs-12 latest-posts-item shadow zoomIn wow animated'); ?>>
	<div class="latest-post-title-sm">
		<h1>
			<?php the_title() ?>
		</h1>
	</div>
	<?php
		if( has_post_thumbnail() ):
		$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		endif;
	?>
		<a class="latest-posts-item-link" href="<?php echo esc_url( get_the_permalink() ); ?>" > <!--data-toggle="modal" data-target="#post-detail-<?php the_ID(); ?>"-->
			<div class="latest-posts-item-content draw" style="background-image: url(<?php echo $urlImg; ?>);">
				<div class="latest-post-title">
					<h1>
						<?php the_title() ?>
					</h1>
					<img src="<?php echo $urlImg; ?>" class="latest-post-img-sm">
				</div>
			</div>
		</a>

</article><!--post article container-->
