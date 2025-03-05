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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>
                  <div class="card-tools">
                    <a class="btn btn-primary" href="?page=user_add"><i class="fas fa-plus-square"></i> Add</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th><img src="dist/img/wms.png" style="width:70px;height:30px;"></th>
                    <th><img src="dist/img/mesc.png" style="width:60px;height:20px;"></th>
                    <th><img src="dist/img/mesf.png" style="width:80px;height:30px;"></th>
                    <th><img src="dist/img/lapormas.png" style="width:60px;height:15px;"></th>
                    <th><img src="dist/img/itinventory.png" style="width:80px;height:20px;"></th>
                    <th><img src="dist/img/hris.png" style="width:40px;height:15px;"></th>
                    <th><img src="dist/img/it.png" style="width:30px;height:20px;"></th>
                    <th><img src="dist/img/ga.png" style="width:30px;height:18px;"></th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from user
                                                order by id_user asc");
                        while ($data= $sql->fetch_assoc()) {
                    ?>
                  <tr>
                    <td style="text-align:center;"><?php echo $no++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td style="text-align:center;"><a class="h10"><?php echo $data['email']; ?></a></td>
                    <td style="text-align:center;">
                        <input type="checkbox" name="wms_checkbox" value="1" <?php echo ($data['menu_wms']==1 ? 'checked' : '');?> id="wms_checkbox" disabled>
                    </td>
                    <td style="text-align:center;">
                        <input type="checkbox" name="mesc_checkbox" value="1" <?php echo ($data['menu_mesc']==1 ? 'checked' : '');?> id="mesc_checkbox" disabled>
                    </td>
                    <td style="text-align:center;">
                        <input type="checkbox" name="mesf_checkbox" value="1" <?php echo ($data['menu_mesf']==1 ? 'checked' : '');?> id="mesf_checkbox" disabled>
                    </td> 
                    <td style="text-align:center;">
                        <input type="checkbox" name="lapormas_checkbox" value="1" <?php echo ($data['menu_lapormas']==1 ? 'checked' : '');?> id="lapormas_checkbox" disabled>
                    </td> 
                    <td style="text-align:center;">
                        <input type="checkbox" name="itv_checkbox" value="1" <?php echo ($data['menu_itinventory']==1 ? 'checked' : '');?> id="itv_checkbox" disabled>
                    </td> 
                    <td style="text-align:center;">
                        <input type="checkbox" name="hris_checkbox" value="1" <?php echo ($data['menu_hris']==1 ? 'checked' : '');?> id="hris_checkbox" disabled>
                    </td> 
                    <td style="text-align:center;">
                        <input type="checkbox" name="it_checkbox" value="1" <?php echo ($data['menu_it']==1 ? 'checked' : '');?> id="it_checkbox" disabled>
                    </td>  
                    <td style="text-align:center;">
                        <input type="checkbox" name="ga_checkbox" value="1" <?php echo ($data['menu_ga']==1 ? 'checked' : '');?> id="ga_checkbox" disabled>
                    </td>
                    <td>
                        <?php $level = $data['id_level']; ?>
                        <?php if($level == "1"){?>
                        <span class="badge bg-primary">Administrator</span>
                        <?php }elseif($level == "2"){ ?>  
                        <span class="badge bg-success">User</span> 
                        <?php }else{ ?>
                        <span class="badge bg-danger">Error</span>
                        <?php } ?>
                    </td>  
                    <td>
                        <a class="btn btn-info btn-sm" href="?page=user_edit&kode=<?php echo $data['id_user']; ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="?page=user_delete&kode=<?php echo $data['id_user']; ?>" onclick="return confirm('Do you really want to delete this?')">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                        <a class="btn btn-dark btn-sm" href="?page=user_reset&kode=<?php echo $data['id_user']; ?>" onclick="return confirm('Do you really want to reset this?')">
                            <i class="fas fa-registered"></i>
                        </a>
                    </td>
                  </tr>  
                  <?php
                        }
                    ?>               
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
