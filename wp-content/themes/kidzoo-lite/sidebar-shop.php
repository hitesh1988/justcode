<?php

  /*
    @package kidzoo-lite
  */

if ( !is_active_sidebar( 'sidebar-2' ) ) {
    return;
}

?>

<aside id="secondary" class="widget-area" role="complementary">

    <!-- begin sidebar -->
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <!-- end sidebar -->

</aside>
