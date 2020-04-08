<?php get_header(); ?>

<div class="single-post-featured-image">
  <?php the_post_thumbnail('large'); ?>
</div>

<div class="container">
  <div class="row">
    <main class="col-lg-9">
      <?php if(have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>


          <div class="post-section">


            <?php the_content(); ?>

        </div>

          &nbsp;

          <p class="post-info"><?php echo "<span class='bold'>Published </span>" . get_the_date(); echo " | "; echo "<span class='bold'>Written by </span>" . get_the_author(); ?></p>

  <?php } //ends while loop
      } //ends if statement
      ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
