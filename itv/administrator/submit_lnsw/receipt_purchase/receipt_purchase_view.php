<?php

include "inc/koneksi.php";
include "inc/koneksi_wms.php";

?>
<!-- /template header -->
<?php include 'itv/itv_template_header.php' ?>
<!-- /template header -->  

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">IT Inventory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a class='h10'>IT Inventory Active menu - <b>Submit To LNSW>Receipt From Purchase</b></a></li>
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
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">WMS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">LNSW</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Receipt From Purchase Data</h3>
                                </div>
                                <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Document Number</th>
                                            <th>Factory</th>
                                            <th>Warehouse</th>  
                                            <th>Storehouse</th>                          
                                            <th>Item</th>
                                            <th>Purchase No</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $no = 1;
                                                $sql = $koneksi_wms->query("select * from BillOutIn
                                                                            where BillOutIn
                                                                        order by BillOutInNo asc");
                                                while ($data= $sql->fetch_assoc()) {
                                            ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['BillOutInNo']; ?></td>
                                            <td><?php echo $data['Werks']; ?></td>
                                            <td><?php echo $data['nib']; ?></td>
                                            <td><?php echo $data['PurchaseNo']; ?></td>
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
                                    </div>
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



