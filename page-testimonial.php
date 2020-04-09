<?php

/*

Template Name: Testimonial
Template Post Type: page, post

*/


get_header(); ?>

<div class="container-fluid">
  <?php dynamic_sidebar('hero-image-testimonial'); ?>
</div>

<div class="container">
  <div class="row">

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

  </div>
</div>


<?php get_footer(); ?>
