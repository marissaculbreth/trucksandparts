<?php get_header(); ?>

<div class="container">
  <div class="row" id="home-display">
    <?php if(have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="col-md-4 blog-main">

          <h3 class="post-h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

          <div class="post-featured-image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>

          <p>Category: <?php the_category(); ?></p>

          <?php the_excerpt(); ?>

          <?php
            $archive_year = get_the_time('Y');
            $archive_month = get_the_time('m');
            $archive_day = get_the_time('d');
          ?>

          <p class="post-info">Published <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a></p>

          <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
        </div>
 <?php  } //ends while loop
} //ends if statement
    ?>
  </div>
</div>

<?php get_footer(); ?>
