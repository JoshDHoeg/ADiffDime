<?php
/**
 * The template for displaying all interview posts so that they match a similar display style
 *
 * Template Name: Interview
 * Template Post Type: post, page, product
 * @package WordPress
 * @subpackage Dimension Theme
 * @since Dimension 0.2.0
 * @subpackage Dimension Theme
 * @since Dimension 0.2.0
 */

get_header(); ?>

  <h1>this is an interview</h1>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

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
