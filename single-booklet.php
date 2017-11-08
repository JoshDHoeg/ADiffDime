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
    <div id="primary" class="content-area bootklet">
        <main id="main" class="site-main" role="main">

          <style>
          .front-side {
              transform: translateZ(-100px) rotateY(  0deg) translateZ(100px);
              background: gray;
          }

          .left-side {
              transform: translateZ(-100px) rotateY(-90deg) translateZ(100px);
              background: black;
          }

          .right-side {
              transform: translateZ(-100px) rotateY( 90deg) translateZ(100px);
              background: white;
          }
          .left-side,.front-side,.right-side {
              position:absolute;
              top:0;
              bottom:0;
              left:0;
              right:0;
              backface-visibility: hidden;
              transition: transform 0.6s ease-in-out, background-color 0.6s ease-in-out;
          }

          .container-box {
              position:relative;
              width:200px;
              height:100px;
              perspective: 1000;
          }
          </style>

          <div class="container-box">
              <section class="front-side" id="1">
                  <h1>title</h1>
              </section>
              <section class="right-side" id="2">
                  <h1>info</h1>
              </section>
              <section class="right-side" id="3">
                  <h1>info-2</h1>
              </section>
              <section class="right-side" id="4">
                  <h1>info-3</h1>
              </section>
              <section class="right-side" id="5">
                  <h1>info-4</h1>
              </section>
              <section class="right-side" id="6">
                  <h1>info-5</h1>
              </section>
              <section class="right-side" id="7">
                  <h1>info-6</h1>
              </section>
              <section class="right-side" id="8">
                  <h1>end</h1>
              </section>
          </div>

          <button onclick="rotateBox('Back')">Previous</button>
          <button onclick="rotateBox('Next')">Next</button>

          <script>
              var currentBox = 1;

              function rotateBox(direction){

                if(direction == "Next"){
                  var current = document.getElementById(String(currentBox));
                  var next = document.getElementById(String(currentBox+1));
                  if(next != null){
                    console.log("there is no next card");
                    current.className = "left-side";
                    next.className = "front-side";
                    currentBox++;
                  }

                }else if(direction == "Back"){
                  var current = document.getElementById(String(currentBox-1));
                  var next = document.getElementById(String(currentBox));
                  if(current != null){
                    current.className = "front-side";
                    next.className = "right-side";
                    currentBox--;
                  }
                }
              }
          </script>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
