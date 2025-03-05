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
              <h3 class="card-title">Add Data User</h3>

            </div>
                <div class="card-body">
                <form method="POST">
                <div class="modal-body">
              
                <div class="form-group">
                  <div class="col" data-tip="This is the text of the tooltip2">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" REQUIRED>
                  </div>
                  </br>
                  <div class="col">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email" id="email" name="email" REQUIRED>
                  </div>
                  </br>
                  <div class="col">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="sash123" id="password" name="password" disabled>
                  </div>
                  </br>
                  <div class="col">
                    <label>Level</label>
                    <select class="form-control custom-select" id="level" name="level">
                      <option selected disabled>--Select Level--</option>
                      <option value="1">Administrator</option>
                      <option value="2">User</option>
                    </select>
                  </div>
                  </br>       
                  <div class="col">
                    <img src="dist/img/wms.png" style="width:70px;height:30px;">
                    <input type="checkbox" name="wms_checkbox" value="1" id="wms_checkbox">
                  
                    <img src="dist/img/mesc.png" style="width:60px;height:20px;">
                    <input type="checkbox" name="mesc_checkbox" value="1" id="mesc_checkbox">

                    <img src="dist/img/mesf.png" style="width:80px;height:30px;">
                    <input type="checkbox" name="mesf_checkbox" value="1" id="mesf_checkbox">
                  
                    <img src="dist/img/lapormas.png" style="width:60px;height:15px;">
                    <input type="checkbox" name="lapormas_checkbox" value="1" id="lapormas_checkbox">

                    <img src="dist/img/itinventory.png" style="width:80px;height:20px;">
                    <input type="checkbox" name="itv_checkbox" value="1" id="itv_checkbox">

                    <img src="dist/img/hris.png" style="width:40px;height:15px;">
                    <input type="checkbox" name="hris_checkbox" value="1" id="hris_checkbox">

                    <img src="dist/img/it.png" style="width:30px;height:20px;">
                    <input type="checkbox" name="it_checkbox" value="1" id="it_checkbox">

                    <img src="dist/img/ga.png" style="width:30px;height:18px;">
                    <input type="checkbox" name="ga_checkbox" value="1" id="ga_checkbox">
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-secondary" href="?page=user_view"><i class="fas fa-backward"></i> Back</a>
                <button type="submit" class="btn btn-primary" name="simpan">Save</button>
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
            
            $sql_simpan = "INSERT INTO user (username,email,password,menu_wms,menu_mesc,menu_mesf,menu_lapormas,menu_itinventory,menu_hris,menu_it,menu_ga,id_level) 
            VALUES (
                    '".$_POST['username']."',
                    '".$_POST['email']."',
                    MD5('sash123'),
                    '".$_POST['wms_checkbox']."',
                    '".$_POST['mesc_checkbox']."',
                    '".$_POST['mesf_checkbox']."',
                    '".$_POST['lapormas_checkbox']."',
                    '".$_POST['itv_checkbox']."',
                    '".$_POST['hris_checkbox']."',
                    '".$_POST['it_checkbox']."',
                    '".$_POST['ga_checkbox']."',
                    '".$_POST['level']."'
                    )";
            $query_simpan = mysqli_query($koneksi, $sql_simpan);
            if ($query_simpan) {
              echo "<script>location='index.php?page=user_view'</script>";
              }else{
              echo "<script>location='index.php?page=user_add'</script>";
          }
          }
            ?>