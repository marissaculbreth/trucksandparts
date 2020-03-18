<footer>
  <div class="row">
    <div class="col-md-4 d-flex align-items-center">
      <nav>
        <?php
          if(has_nav_menu('footer-left')){
            wp_nav_menu(array('theme_location' => 'footer-left' , 'container_class' => 'footer-left-class'));
          }else{
            echo "Please select a footer left menu through the dashboard";
          }
        ?>
      </nav>
    </div>

    <div class="col-md-4 d-flex align-items-center">
      <nav>
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
      <nav>
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
