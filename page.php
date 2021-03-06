<?php get_header(); ?>

<div class="container-fluid">
  <?php dynamic_sidebar('hero-image'); ?>
</div>

<div class="container">
  <div class="row">

      <main class="col-md-9">

        <div class="services-content">

          <div class="left-content">
            <?php if(have_posts()) {
              while(have_posts()) {
                the_post(); ?>
                <h2 class="entry-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
        <?php } //ends while loop
            } //ends if statement
            ?>
          </div>

          <div class="col-lg-3 right-content">
            <?php dynamic_sidebar('right-sidebar'); ?>
          </div>
        </div>

      </main>


  </div>
</div>


<?php get_footer(); ?>
