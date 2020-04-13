<?php

/*

Template Name: Archive Page

*/

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <h2><?php
      if(is_category()){
        single_cat_title();
      }elseif(is_tag()){
        single_tag_title();
      }elseif(is_date()){
        echo "Daily Archives: " . get_the_date();
      }elseif(is_month()){
        echo "Monthly Archives: " . get_the_date('F Y');
      }elseif(is_year()){
        echo "Yearly Archives: " . get_the_date('Y');
      }else{
        echo "Archives";
      }
      ?>
      </h2>
      <?php if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="twelve columns individual-post">

            <div class="archive-page">
              <div class="post-featured-image">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
              <div class="archive-info">
                <h3 class="post-h3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <p>Published on <?php the_time('F j, Y'); ?></p>
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-primary" href="<?php the_permalink() ?>">Read More</a>
              </div>
            </div>

          </div>
          <?php
        } //ends while loop
      } // ends if statement
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
