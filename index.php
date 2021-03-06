<?php get_header(); ?> <!--pull the header template in-->


<style>

</style>


<!--this is the main feed sectino this is how posts will show up on the main blog page-->
		<div class="latest-posts container" id="primary">
			<!--We wanted the content to show up in two seperate columns so column a takes odd umbered post {1,3,5....}-->
			<div class="col-sm-6 latest-posts-column" id="content-a" data-scroll-speed="6">
				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

				<!--pull up the template for the content item-->
				<?php get_template_part('content', get_post_format()); ?>

				<!--if the query was empty use the template for the no-results-->
				<?php endif; endwhile; else: ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
				<?php endif; ?>

				<?php $i = 0; rewind_posts(); ?>
			</div>
			<!--and column b takes takes all even numbered posts {2,4,6.....}-->
			<div class="col-sm-6 latest-posts-column" id="content-b" data-scroll-speed="2">
				<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

				<!--pull up the template for the content item-->
				<?php get_template_part('content', get_post_format()); ?>

				<!--if the query was empty use the template for the no-results-->
				<?php endif; endwhile; else: ?>
				<?php get_template_part( 'no-results', 'index' ); ?>
				<?php endif; ?>
			</div>
	</div>

<?php get_footer(); ?> <!--pull in the footer template-->
