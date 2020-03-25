<footer class="footer-container">
  <div class="row">
    <div class="footer-row">
      <div class="col-md-4 d-flex align-items-center">
        <div class="col-lg-3">
            <?php dynamic_sidebar('bottom-left-footer'); ?>
          </div>
      </div>

      <div class="col-md-4 d-flex align-items-center">
        <div class="col-lg-3">
            <?php dynamic_sidebar('bottom-middle-footer'); ?>
          </div>
      </div>

      <div class="col-md-4 d-flex align-items-center">
        <?php dynamic_sidebar('bottom-right-footer'); ?>
      </div>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
