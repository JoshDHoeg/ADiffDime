<?php
/**
 * The template for displaying all countdown feature posts that are like a booklet
 *
 * Template Name: Booklet
 * Template Post Type: post, page, product
 * @package WordPress
 * @subpackage Dimension Theme
 * @since Dimension 0.2.0
 * @subpackage Dimension Theme
 * @since Dimension 0.2.0
 */

get_header(); ?>
    <div id="primary" class="content-area booklet">
        <main id="main" class="site-main" role="main">

          <div class="container-box">
              <section class="front-side" id="1">
                <div class="container col-xs-12 detail_wrapper shadow zoomIn wow animated">
                  <a  class="exitbtn right" href="/"><div class="close-btn"></div><div class="close-btn"></div></a>
                  <div class="detail_header">
                    <h1 class="detail-title"><?php the_title() ?></h1>

                    <div class="thumbnail">
                      <?php the_post_thumbnail('small'); ?>
                    </div>

                  </div>
                  <div class="detail_footer">
                      <button type="button" class="close-btn" onclick="window.location.href='/'">Close</button>
                  </div>
                </div>
                </section>
                <section class="right-side" id="2">
                  <div class="container col-xs-12 detail_wrapper shadow zoomIn wow animated">
                    <a  class="exitbtn right" href="/"><div class="close-btn"></div><div class="close-btn"></div></a>
                    <div class="detail_content">

                      <?php
                      // Start the loop.
                      while ( have_posts() ) : the_post();

                          get_template_part( 'content-box', get_post_format() );

                      // End the loop.
                      endwhile;
                      ?>
                    </div>
                    <div class="detail_footer">
                        <button type="button" class="close-btn" onclick="window.location.href='/'">Close</button>
                    </div>
                </div>
              </section>
          </div>

          <button class="box_button" onclick="rotateBox('Back')">Previous</button>
          <button class="box_button" onclick="rotateBox('Next')">Next</button>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
