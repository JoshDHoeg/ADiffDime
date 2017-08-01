<!--content template how a particular content item appears in the website-->

<article id="post-<?php the_ID(); ?>" <?php post_class('container col-xs-12 latest-posts-item shadow'); ?>>
		<?php if( has_post_thumbnail() ): ?>
			<div class="latest-posts-item-content">
				<a href="" data-toggle="modal" data-target="#post-detail-<?php the_ID(); ?>">
					<div class="thumbnail-title">
						<h1>
							<!-- <?php the_title() ?> -->
							<?php
								$thetitle = $post->post_title; /* or you can use get_the_title() */
								$getlength = strlen($thetitle);
								$thelength = 64;
								echo substr($thetitle, 0, $thelength);
							?>
						</h1>
					</div>
					<div class="thumbnail-image container col-xs-12">
						<div class="thumbnail">
							<?php the_post_thumbnail('small'); ?>
						</div>
					</div>
				</a>
			</div>
		<?php else: ?>
			<!-- <div class="thumbnail"><a href="" data-toggle="modal" data-target="#post-detail-<?php the_ID(); ?>"><h1><?php the_title() ?></h1><?php the_post_thumbnail('small'); ?></a></div> -->
			<!--need to add a temporary thumbnail-->
		<?php endif; ?>

		<!--boostrap modal container-->
		<div class="modal fade <?php post_class('container post-modal'); ?>" id="post-detail-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h2 class="modal-title"><?php the_title() ?></h2>
										<div class="thumbnail">
											<?php the_post_thumbnail('small'); ?>
										</div>
										<small>Posted on: <?php the_time('F j, Y'); ?> by <?php get_the_author(); ?></small>
								</div>
								<div class="modal-body">
									<?php if( has_post_thumbnail() ): ?>
										<?php the_content(); ?>
									<?php else: ?>
											<?php the_content(); ?>
									<?php endif; ?>
								</div>
								<div class="modal-footer">
										<button type="button" class="close-btn" data-dismiss="modal">Close</button>
								</div>
						</div>
				</div>
		</div>
</article><!--post article container-->
