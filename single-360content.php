<?php
/**
 * The template for displaying all 360 video and photo content it is focused on building 3d animations that fit the 360 degree content that is needed.
 *
 * Template Name: 360 Content
 * Template Post Type: post, page, product
 * @package WordPress
 * @subpackage Dimension Theme
 * @since Dimension 0.2.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <h1>this is a 360 content</h1>
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
