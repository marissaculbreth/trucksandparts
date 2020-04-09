<?php

/*

Template Name: Left Sidebar
Template Post Type: page, post

*/


get_header(); ?>

<div>
  <?php dynamic_sidebar('hero-image'); ?>
</div>

<div class="single-post-featured-image">
  <?php the_post_thumbnail('large'); ?>
</div>

<div class="container">
  <div class="row">


    <div class="internal-page">


      <main class="col-md-9 main-content">
        <?php if(have_posts()) {
          while(have_posts()) {
            the_post(); ?>
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
    <?php } //ends while loop
        } //ends if statement
        ?>
      </main>

      <div class="col-sm-3 left-sidebar">
        <?php dynamic_sidebar('left-sidebar'); ?>
      </div>
    </div>

  </div>
</div>


<?php get_footer(); ?>
