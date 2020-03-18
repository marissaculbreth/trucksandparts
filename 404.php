<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <h2>Page not found</h2>
        <p>I'm sorry, this page was not found. Would you like to go back to <a href="<?php echo home_url('/');?>">Trucks and Parts?</a></p>
        <img src="<?php echo get_template_directory_uri() . '/images/404.gif' ?>" alt="error message" />
      </main>
    </div>
  </div>

<?php footer(); ?>
