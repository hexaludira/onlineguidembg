
<?php

include "inc/koneksi.php";

?>
<!-- /template header -->
<?php include 'it/it_template_header.php' ?>
<!-- /template header -->  

<!-- main content -->
<div>
<?php
            if (isset($_GET['page']) == 'it_index') {
                include "it/default/it_administrator.php";
                }
                
              elseif (isset($_GET['page']) <> 'it_index') {   
                echo "<center><h1> ERROR !</h1></center>";
                }
          
?>
</div>
<!-- /main content -->  



