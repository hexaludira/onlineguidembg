<?php
if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM user WHERE id_user='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
  }
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">SASH - All System In One</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a class='h10'>SASH Active menu - <b>Manage User</b></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data User</h3>

            </div>
                <div class="card-body">
                <!-- <form method="POST" action="administrator/user/tambah.php"> -->
                <form method="POST">
                <div class="modal-body">
              
                <div class="form-group">
                  <div class="col">
                    <input type="hidden" class="form-control" placeholder="Id User" name="id_user" value=<?php echo $data_cek['id_user']; ?>>
                  </div>
                  <div class="col">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="username" name="username" value=<?php echo $data_cek['username']; ?>>
                  </div>
                  </br>
                  <div class="col">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value=<?php echo $data_cek['email']; ?>>
                  </div>
                  </br>
                  <div class="col">
                    <label>Level</label>
                    <select class="form-control custom-select" id="id_level" name="id_level">
                    <?php 
                        $levelvalue = mysqli_query($koneksi, "select * from level_user"); 
                        while($row = mysqli_fetch_array($levelvalue)){?>
                        <?php 
                            if ($data_cek['id_level'] == $row['id_level']) 
                                echo "<option value=$data_cek[id_level] selected>$row[level]</option>";
                            else echo "<option value=$row[id_level]>$row[level]</option>";
                        ?>
                        <?php } ?>
                    </select>
                  </div>
                  </br>       
                  <div class="col">
                    <img src="dist/img/wms.png" style="width:70px;height:30px;">                  
                    <input type="checkbox" name="wms_checkbox" value="1" <?php echo ($data_cek['menu_wms']==1 ? 'checked' : '');?> id="wms_checkbox">

                    <img src="dist/img/mesc.png" style="width:60px;height:20px;">
                    <input type="checkbox" name="mesc_checkbox" value="1" <?php echo ($data_cek['menu_mesc']==1 ? 'checked' : '');?> id="mesc_checkbox">

                    <img src="dist/img/mesf.png" style="width:80px;height:30px;">
                    <input type="checkbox" name="mesf_checkbox" value="1" <?php echo ($data_cek['menu_mesf']==1 ? 'checked' : '');?> id="mesf_checkbox">

                    <img src="dist/img/lapormas.png" style="width:95px;height:25px;">
                    <input type="checkbox" name="lapormas_checkbox" value="1" <?php echo ($data_cek['menu_lapormas']==1 ? 'checked' : '');?> id="lapormas_checkbox">

                    <img src="dist/img/itinventory.png" style="width:80px;height:20px;">
                    <input type="checkbox" name="itv_checkbox" value="1" <?php echo ($data_cek['menu_itinventory']==1 ? 'checked' : '');?> id="itv_checkbox">

                    <img src="dist/img/hris.png" style="width:60px;height:20px;">
                    <input type="checkbox" name="hris_checkbox" value="1" <?php echo ($data_cek['menu_hris']==1 ? 'checked' : '');?> id="hris_checkbox" >

                    <img src="dist/img/it.png" style="width:60px;height:40px;">
                    <input type="checkbox" name="it_checkbox" value="1" <?php echo ($data_cek['menu_it']==1 ? 'checked' : '');?> id="it_checkbox">

                    <img src="dist/img/ga.png" style="width:30px;height:18px;">
                    <input type="checkbox" name="ga_checkbox" value="1" <?php echo ($data_cek['menu_ga']==1 ? 'checked' : '');?> id="ga_checkbox">

                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-secondary" href="?page=user_view"><i class="fas fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-primary" name="simpan">Update</button>
              </div>
            </form>
                </div>
          </div>
            <!-- /.card-body -->
        </div>
          <!-- /.card -->
      </div>
      
    </section>
    <!-- /.content -->
        <?php
        if (isset ($_POST['simpan'])){
            
            $id = $_POST['id_user'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $id_level = $_POST['id_level'];
            $menu_wms = $_POST['wms_checkbox'];
            $menu_mesc = $_POST['mesc_checkbox'];
            $menu_mesf = $_POST['mesf_checkbox'];
            $menu_lapormas = $_POST['lapormas_checkbox'];
            $menu_itv = $_POST['itv_checkbox'];
            $menu_hris = $_POST['hris_checkbox'];
            $menu_it = $_POST['it_checkbox'];
            $menu_ga = $_POST['ga_checkbox'];
            
            $query_ubah = mysqli_query($koneksi, "UPDATE user SET username='$username', email='$email', id_level='$id_level', menu_wms='$menu_wms', menu_mesc='$menu_mesc', menu_mesf='$menu_mesf', menu_lapormas='$menu_lapormas', menu_itinventory='$menu_itv', menu_hris='$menu_hris', menu_it='$menu_it', menu_ga='$menu_ga' WHERE id_user='$id'");
            if ($query_ubah) {
              echo "<script>location='index.php?page=user_view'</script>";
              }else{
              echo "<script>location='index.php?page=user_edit'</script>";
          }
          }
            ?>
