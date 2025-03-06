
<!-- /template header -->
<?php include 'template_header.php' ?>
<!-- /template header -->  

    <div class="content-wrapper">
      <?php
          if (isset($_GET['submenu'])){
            $submenu_selected = $_GET['submenu'];

            $file_name = 'wms/'.$submenu_selected.'.pdf';
            if (file_exists($file_name)){
              echo '<iframe src="wms/'.$submenu_selected.'.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>';
            } else {
              echo "Jancuk.. Ra ana file e..";
            }

            // switch($submenu_selected){
            //   case 'factory' :
            //     echo '<iframe src="wms/test.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>';
            //   break;
            //   case 'department' :
            //     echo '<iframe src="wms/coba.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>';
            //   break;
            //   case 'cost_center' :
            //     echo '<iframe src="wms/'.$submenu_selected.'.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>'; 
            // }
          }
      ?>
    </div>
  <!-- Content Wrapper. Contains page content -->
  <!-- <section class="content">
    
  </section> -->
  
    <!-- Main content -->
    
    <!-- /.content -->
  <!-- /.content-wrapper -->

<!-- template footer -->
<?php include 'template_footer.php' ?>
<!-- /template footer -->
  
