
<!-- /template header -->
<?php include 'template_header.php' ?>
<!-- /template header -->  

    <div class="content-wrapper">
              <?php
                      if (isset($_GET['submenu'])){
                        $submenu_selected = $_GET['submenu'];
                        
                        switch($submenu_selected){
                          case 'factory' :
                            echo '<iframe src="wms/test.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>';
                          break;
                          case 'department' :
                            echo '<iframe src="wms/coba.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>';
                          break;
                        }
                      }
                    ?>
    </div>
  <!-- Content Wrapper. Contains page content -->
  <!-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              
              <div class="content-wrapper iframe-mode" data-widget="iframe">
                  <div class="tab-content">
                    
                   
                    <iframe src="wms/test.pdf" width="100%" style="height:100vh; flex:1; display:flex;" allowfullscreen></iframe>

                    <object data="wms/test.pdf" type="application/pdf" width="100%" style="height:100vh;"></object>
                    
                  
                  </div>
              </div>
            </div>

        </div>

    </div>
  </section> -->


  <!-- <div class="col-md-12">
    <div class="row">
    <embed class="pdf" 
                  src=
    "https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">
    </div>
      
  </div> -->

  
    <!-- Main content -->
    
    <!-- /.content -->
  <!-- /.content-wrapper -->

<!-- template footer -->
<?php include 'template_footer.php' ?>
<!-- /template footer -->
  
