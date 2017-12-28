<?php

/*
	Template Name: Shop Page
*/?>
<div id="particles-js"></div>
<?php get_header(); ?>

    <div id="primary" class="page page_dark page_shop content-area">
        <main id="main" class="site-main default_dark" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'content-shop', get_post_format() );

        // End the loop.
        endwhile;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
