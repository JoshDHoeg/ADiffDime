<?php

/*
	Template Name: Page Dark
*/

get_header(); ?>

    <div id="primary" class="page page_dark content-area">
        <main id="main" class="site-main default_dark" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'content-detail', get_post_format() );

        // End the loop.
        endwhile;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
