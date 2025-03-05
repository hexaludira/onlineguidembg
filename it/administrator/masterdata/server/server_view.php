<?php

include "inc/koneksi.php";

?>
<!-- /template header -->
<?php include 'it/it_template_header.php' ?>
<!-- /template header -->  

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">IT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a class='h10'>IT Active menu - <b>Master Data>Server</b></a></li>
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
                <h3 class="card-title">Server Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Asset Tag</th>
                    <th>Description</th>
                    <th>Availabe Storage</th>
                    <th>RAID</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from it_masterdata_asset where id_asset_category='1'
                                                order by id_asset asc");
                        while ($data= $sql->fetch_assoc()) {
                    ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['itam_tag']; ?></td>
                    <td><?php echo $data['asset_name']; ?></td>
                    <td><?php echo ($data['total_storage']-$data['storage_usage_bysystem']); ?> GB</td>
                    <td><?php
                          $raidcode = $data['raid'];
                          if ($raidcode=='1'){
                            echo "RAID 1";   
                          }
                          else {
                            echo "NO RAID"; 
                          }  
                        ?>
                    </td>      
                    <td>
                        <a class="btn btn-info btn-sm" href="?page=company_edit&kode=<?php echo $data['id_company']; ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                    </td>
                  </tr>  
                  <?php
                        }
                    ?>               
                  </tbody>
                </table>
                

                <img src="http://admin:Admin123@10.101.100.105/ISAPI/Streaming/channels/1/picture" alt="">
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



