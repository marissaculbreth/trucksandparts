<footer class="footer-container">
  <div class="row">
    <div class="footer-row">
      <div class="col-sm-4 d-flex align-items-center">
        <div class="col-sm-4">
            <?php dynamic_sidebar('bottom-left-footer'); ?>
          </div>
      </div>

      <div class="col-sm-4 d-flex align-items-center">
        <div class="col-sm-4">
            <?php dynamic_sidebar('bottom-middle-footer'); ?>
          </div>
      </div>

      <div class="col-sm-3 d-flex align-items-center">
        <div class="col-sm-4">
          <?php dynamic_sidebar('bottom-right-footer'); ?>
        </div>
      </div>

      <div class="col-lg-3 d-flex align-items-center">
        <div class="col-lg-4">
          <?php dynamic_sidebar('footer-image'); ?>
        </div>
      </div>

    </div>

  </div>

  <p class="footer-p">Copyright 1950-2020 Trucks & Parts of Tampa, LLC</p>

</footer>


<?php wp_footer(); ?>
</body>
</html>
