<?php if(is_page_template('page-right-sidebar.php')){
  dynamic_sidebar('right-sidebar');
}elseif(is_page_template('page-left-sidebar.php')){
  dynamic_sidebar('left-sidebar');
} ?>
