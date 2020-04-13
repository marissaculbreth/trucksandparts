<?php

/*

Template Name: Search Page

*/

get_header(); ?>


<div class="container">
  <div class="row">
    <div class="twelve columns individual-post">
      <?php if(have_posts()){ ?>
          <h1><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>
            <?php while(have_posts()){
              the_post(); ?>
              <h2 class="search-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt(); ?>
              <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a><?php
            } //end while loop
          }else{?>
            <h1>Nothing Was Found</h1>
          <p>Sorry, nothing matched your search. Please try again.</p><?php
          get_search_form();
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
