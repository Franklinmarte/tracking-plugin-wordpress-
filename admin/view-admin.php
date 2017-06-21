<script>
  jQuery( function() {
    jQuery( "#tabs" ).tabs();
  } );
  </script>
<div id="tabs">
 
<ul class="nav-tab-wrapper">
  <li> <a href="#tabs-1" class="nav-tab "><?php esc_html_e("Clientes")?></a></li>
 <li> <a href="#tabs-2" class="nav-tab "><?php esc_html_e("Estados")?></a></li>
 <li> <a href="#tabs-3" class="nav-tab"><?php esc_html_e("Procesos")?></a></li>
</ul>

  <div id="tabs-1">
      <?php include "view-customer.php"; ?>
  </div>
  <div id="tabs-2">
   <?php include "add-status.php"; ?>
  </div>
  <div id="tabs-3">
    <?php include "add-process.php"; ?>

  </div>