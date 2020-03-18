<footer>
  <div class="row">
    <div class="col-md-4 d-flex align-items-center">
      <nav class="left-footer">
        <h3 class="footer-h3">Stay Connected</h3>
        <div class="col-lg-3">
          <?php dynamic_sidebar('bottom-left-home-page'); ?>
        </div>

        <!-- <?php
          if(has_nav_menu('footer-left')){
            wp_nav_menu(array('theme_location' => 'footer-left' , 'container_class' => 'footer-left-class'));
          }else{
            echo "Please select a footer left menu through the dashboard";
          }
        ?> -->

      </nav>
    </div>

    <div class="col-md-4 d-flex align-items-center">
      <nav class="middle-footer">
        <h3 class="footer-h3">Links</h3>
        <?php
          if(has_nav_menu('footer-middle')){
            wp_nav_menu(array('theme_location' => 'footer-middle' , 'container_class' => 'footer-middle-class'));
          }else{
            echo "Please select a footer middle menu through the dashboard";
          }
        ?>
      </nav>
    </div>

    <div class="col-md-4 d-flex align-items-center">
      <nav class="right-footer">
        <h3 class="footer-h3">Navigate</h3>
        <?php
          if(has_nav_menu('footer-right')){
            wp_nav_menu(array('theme_location' => 'footer-right' , 'container_class' => 'footer-right-class'));
          }else{
            echo "Please select a footer right menu through the dashboard";
          }
        ?>
      </nav>
    </div>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
