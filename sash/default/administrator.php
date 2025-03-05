
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome to SASH<a> -<?= $data_nama; ?>-</a></h1>
            <h6>Please select system below to operate!</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a class='h10'>SASH Active menu - <b>All System</b></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
<!-- container-fluid -->  
  <div class="container-fluid">
<!-- row 1 -->    
    <div class="row">
<!-- card wms -->
<?php
if ($data_menu_wms == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>WMS</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/wms.png" style="width:200px;height:80px;"></i>';
        echo '</div>';
        echo '<a href="?page=wms_index" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>WMS</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/wms.png" style="width:200px;height:80px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card wms -->  
<!-- card mes cable -->
<?php
if ($data_menu_mesc == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>MES Cable</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/mesc.png" style="width:150px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>MES Cable</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/mesc.png" style="width:150px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card mes cable -->  
<!-- card mes fiber -->
<?php
if ($data_menu_mesf == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>MES Fiber</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/mesf.png" style="width:180px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>MES Fiber</h3>';   
        echo '<p>Dashboard & Report</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/mesf.png" style="width:180px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card mes fiber -->  
<!-- card lapor mas -->
<?php
if ($data_menu_lapormas == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>Lapor-Mas</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/lapormas.png" style="width:160px;height:40px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>Lapor-Mas</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/lapormas.png" style="width:160px;height:40px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card lapor mas --> 
<!-- card it inventory -->
<?php
if ($data_menu_itinventory == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>IT Inventory</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/itinventory.png" style="width:150px;height:35px;"></i>';
        echo '</div>';
        echo '<a href="?page=itv_index" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>IT Inventory</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/itinventory.png" style="width:140px;height:35px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card it inventory -->    
<!-- card hris -->
<?php
if ($data_menu_hris == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>HRIS</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/hris.png" style="width:150px;height:50px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>HRIS</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/hris.png" style="width:150px;height:50px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card hris --> 
<!-- card it -->
<?php
if ($data_menu_it == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>IT</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/it.png" style="width:100px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="?page=it_index" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>IT</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/it.png" style="width:100px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card it -->
<!-- card ga -->
<?php
if ($data_menu_ga == "1") {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-light">';
      echo '<div class="inner">';
        echo '<h3>GA</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/ga.png" style="width:100px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">Select <i class="fas fa-eye"></i></a>';
    echo '</div>';
  echo '</div>';
}
else {
  echo '<div class="col-lg-3 col-6">';
    echo '<div class="small-box bg-gray">';
      echo '<div class="inner">';
        echo '<h3>GA</h3>';   
        echo '<p>System</p>';
      echo '</div>';
        echo '<div class="icon">';
          echo '<i class="nav-icon fas"><img src="dist/img/ga.png" style="width:100px;height:60px;"></i>';
        echo '</div>';
        echo '<a href="" class="small-box-footer">No access <i class="fas fa-eye-slash"></i></a>';
    echo '</div>';
  echo '</div>';
}
?>
<!-- /.card ga -->
              
</div>
<!-- /.row 1 -->
</div>
<!-- /.container-fluid -->
</section>


