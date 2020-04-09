<?php

/*

Template Name: Home Page Layout
Template Post Type: page, post

*/


get_header(); ?>

<div class="col-md-12">
  <?php dynamic_sidebar('hero-image'); ?>
</div>

  <div class="container">
    <main>
      <div class="row">

        <div class="col-md-12">
          <?php dynamic_sidebar('home-video'); ?>
        </div>
      </div>

      <div class="home-red-section">
        <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar('about-us'); ?>
          </div>
        </div>

        <div class="row home-page-bottom">
          <div class="col-md-4">
            <?php dynamic_sidebar('bottom-left-home-page'); ?>
          </div>

          <div class="col-md-4 middle-widget">
            <?php dynamic_sidebar('bottom-middle-home-page'); ?>
          </div>

          <div class="col-md-4">
            <?php dynamic_sidebar('bottom-right-home-page'); ?>
          </div>
        </div>
      </div>

      <div>
        <?php dynamic_sidebar('home-contact'); ?>
      </div>

      <div>
        <?php dynamic_sidebar('home-image-gallery'); ?>
      </div>
    </main>
  </div>

<?php get_footer(); ?>
