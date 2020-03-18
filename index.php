<?php get_header(); ?>

<div class="container">
  <div class="row" id="home-display">
    <?php if(have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="col-md-3">
          <h3><?php the_title(); ?></h3>
          <p class="post-info"><?php echo "Published " . get_the_date(); echo " <br /> "; echo "Written by: " . get_the_author(); ?></p>

          <div class="post-featured-image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>

          <?php the_excerpt(); ?>

          <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
        </div>
 <?php  } //ends while loop
} //ends if statement
    ?>
  </div>
</div>

<?php get_footer(); ?>
