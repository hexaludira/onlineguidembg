<?php

include "inc/koneksi.php";
//include "inc/koneksi_wms.php";
if (isset($_GET['kode'])) {
  $sql_cek = "SELECT 
              Purchase.PurchaseNo as PurchaseNo,
              Purchase.CreatedByUserName as CreatedByUserName,
              Purchase.CreatedDateTime as CreatedDateTime,
              Purchase.AuditByUserName as AuditByUserName,
              Purchase.AuditDateTime as AuditDateTime,
              Purchase.Werks as Werks,
              Purchase.SupplierNo as SupplierNo,
              Supplier.Name as Name
              FROM Purchase INNER JOIN supplier ON Purchase.SupplierNo=Supplier.SupplierNo WHERE Purchase.PurchaseNo='" . $_GET['kode'] . "' AND Supplier.IsDelete='0'";
//   $query_cek = sqlsrv_query($koneksi_wms,$sql_cek);
//   $data_cek = sqlsrv_fetch_array($query_cek, SQLSRV_FETCH_ASSOC);
}
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
              <li class="breadcrumb-item active"><a class='h10'>IT Inventory Active menu - <b>Master Data>Purchase Order>Purchase Order Document</b></a></li>
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
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Purchase Order Document</h3>
            </div>
                <div class="card-body">
                <form method="POST">
                <div class="modal-body">
              
                <div class="form-group">
                  <div class="row">         
                    <div class="col-md-2">
                      <label>Purchase No</label>
                      <input type="text" class="form-control" placeholder="Purchase No" name="PurchaseNo" value=<?php echo $data_cek['PurchaseNo']; ?> disabled>
                    </div> 
                    <div class="col-md-1">
                        <label>Factory</label>
                        <input type="text" class="form-control" placeholder="Factory" name="Factory" value=<?php echo $data_cek['Werks']; ?> disabled>
                    </div>         
                  </div> 
                  </br>
                  <div class="row"> 
                    <div class="col-md-2">
                      <label>Created By</label>
                      <input type="text" class="form-control" placeholder="Created By" name="CreatedByUserName" value=<?php echo $data_cek['CreatedByUserName']; ?> disabled>
                      <label>Audited By</label>
                      <input type="text" class="form-control" placeholder="Audited By" name="AuditByUserName" value=<?php echo $data_cek['AuditByUserName']; ?> disabled>            
                    </div>  
                    <div class="col-md-2">
                    <label>Create Date</label>
                      <textarea class="form-control" rows="1" placeholder="CreatedDateTime" id="CreatedDateTime" name="CreatedDateTime" disabled><?php 
                                                                                                                 $newformatdatex = $data_cek['CreatedDateTime']->format('Y-m-d H:i:s');     
                                                                                                                      echo $newformatdatex; ?></textarea>
                      <label>Audit Date</label>
                      <textarea class="form-control" rows="1" placeholder="Audit DateTime" id="AuditDateTime" name="AuditDateTime" disabled><?php 
                                                                                                                 $newformatdatex = $data_cek['AuditDateTime']->format('Y-m-d H:i:s');     
                                                                                                                      echo $newformatdatex; ?></textarea>
                    </div>  
                  </div>
                  </br>
                  <div class="row">  
                    <div class="col-md-1">
                        <label>Supplier</label>
                        <input type="text" class="form-control" placeholder="Suuplier No" name="SupplierNo" value=<?php echo $data_cek['SupplierNo']; ?> disabled>                     
                      </div>
                      <div class="col-md-4">  
                        <label>Name</label>              
                        <textarea class="form-control" rows="1" placeholder="Supplier Name" id="Name" name="Name" disabled><?php echo $data_cek['Name']; ?></textarea>
                      </div>                     
                    </div>          
                  </div>                 
                  </br>
                  <div class="row">  
                    <div class="col-12">
                      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#sys_add_modal"><i class="fas fa-plus-square"></i> Add Document</button>
                    </div>
                  </div>
                  </br>
                  <div class="row"> 
                  <div class="col-12">
                      <div class="card">                 
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="table-responsive">
                          <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Document Code</th>
                              <th>Document Number</th>
                              <th>Document Date</th>
                              <th>Action</th>                                                        
                            </tr>
                            </thead>
                            <tbody>
                            <?php        
                              $no = 1;             
                              $sql = $koneksi->query("SELECT * FROM itv_masterdata_po_dokumen 
                                                      INNER JOIN itv_lnsw_masterdata_documentcode ON itv_masterdata_po_dokumen.id_doc_code=itv_lnsw_masterdata_documentcode.id_doc_code 
                                                      WHERE PurchaseNo='" . $_GET['kode'] . "' 
                                                order by itv_masterdata_po_dokumen.id_po_dokumen");
                              while ($data= $sql->fetch_assoc()) {
                              ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $data['id_doc_code']; ?><?php echo " - "; ?><?php echo $data['document']; ?></td>
                              <td><?php echo $data['nomorDokumen']; ?></td>
                              <td><?php echo $data['tanggalDokumen']; ?></td>                               
                              <td>
                              <a class="btn btn-danger btn-sm" href="?page=po_delete_document&kode=<?php echo $data['id_po_dokumen']; ?>">
                              <i class="fas fa-trash"></i>                             
                              Delete
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
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-secondary" href="?page=po_view"><i class="fas fa-backward"></i> Back</a>
              </div>
            </form>
                </div>
          </div>
        </div>
      </div>
   </div>
      
    </section>
   <!-- /.Main content -->


<!------------------- Modal Add Document ---------------------------------->
<div class="modal fade" id="sys_add_modal" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Document - <?php echo $data_cek['PurchaseNo']; ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Add form here -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <form id="add_system_form" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <!-- <div class="form-group">
                           <input type="hidden" class="form-control" id="system_id_edit">
                        </div> -->
                        <div class="form-group">
                          <div class="form-group">                           
                            <input type="hidden" class="form-control" id="PurchaseNo" name="PurchaseNo"  value=<?php echo $data_cek['PurchaseNo']; ?>>                         
                          </div>      
                           <label><h5>Document Code</h5></label>
                           <select class="form-control custom-select" id="id_doc_code" name="id_doc_code" REQUIRED>
                            <?php 
                              $documentcodeisi = mysqli_query($koneksi, "select * from itv_lnsw_masterdata_documentcode"); 
                              while($row = mysqli_fetch_array($documentcodeisi)){?>
                                  <?php                                  
                                    echo "<option value=$row[id_doc_code]>$row[id_doc_code]  $row[document]</option>";
                                  ?>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label><h5>Document Number</h5></label>
                          <input type="text" class="form-control" id="nomorDokumen" name="nomorDokumen" REQUIRED>                         
                        </div>
                        <div class="form-group">
                          <label><h5>Document Date</h5></label>
                          <input type="date" class="form-control" id="tanggalDokumen" name="tanggalDokumen" REQUIRED>
                        </div>                      
                      </div>                                  
                </div>
              </div>
            </div>
          </div>
				</div>
				<div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-backward"></i> Close</button>
          <button type="submit" class="btn btn-success" id="btn_system_add"><i class="fas fa-backward"></i> Add</button>
				</div>
			</div>
		</div>
    </form>
	</div>
  


  <!------------------- <END>Modal Add Document<END> ---------------------------------->

  <!----------------------- Modal Delete System-------------------------------------->
  <div class="modal fade" id="sys_delete_modal" tabindex="-1">
		<div class="modal modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete System</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
          <h4>Are you sure you want to delete?</h4>
				</div>
				<div class="modal-footer">
          <button type="button" class="btn btn-danger" id="btn_confirm_delete">Delete</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
  <!----------------------- <END>Modal Delete System<END>---------------------------->
  
<!------------------------------ JavaScript --------------------------------------->
<script type="text/javascript">

$(document).ready(function(){

  /* ======================= Add Document ========================= */
  $('#btn_system_add').on('click', function(e){
    e.preventDefault();
    var PurchaseNo = $('#PurchaseNo').val();
    var id_doc_code = $('#id_doc_code').find(":selected").val();
    var nomorDokumen = $('#nomorDokumen').val();
    var tanggalDokumen = $('#tanggalDokumen').val();
    

    $.ajax({
      url : "itv/administrator/masterdata/po/po_add_document_controller.php",
      type : "POST",
      data : {PurchaseNo : PurchaseNo, id_doc_code : id_doc_code, nomorDokumen : nomorDokumen, tanggalDokumen : tanggalDokumen},
      success : function(response){
        console.log(response);
        if(response == "1"){
          Swal.fire("Data added succesfully",'','success');
        } else {
          Swal.fire("Adding Data Failed",'','error');
        }

        $('#PurchaseNo').val("");  
        $('#id_doc_code').val("");
        $('#nomorDokumen').val("");
        $('#tanggalDokumen').val("");        
        setInterval('location.reload()',1500);
      }
    });
  });
  /* ======================== <END> Add Document <END> ===================== */

  /* =========================== Delete masterdata system ========================= */
  $('#example2').on('click','.btn_delete', function(){
        //var system_id = $(this).attr('id');
        $('#sys_delete_modal').modal('show');
        // $('#btn_confirm_delete').on('click', function(){
        //   $.ajax({
        //     url : 'it/administrator/masterdata/system/system_controller.php',
        //     type : 'POST',
        //     data : {system_id_delete : system_id},
        //     success : function(response){
        //       $('#sys_delete_modal').modal('hide');
        //       if(response == "1"){
        //         Swal.fire("Data has been deleted",'','success');
        //       } else {
        //         Swal.fire("Data failed to delete",'','error');
        //       }
              
        //       setInterval('location.reload()',1500);
        //     }
        //   });
        // });
      });
      /* ======================== <END> Delete masterdata system <END> ===================== */
});
    
    </script>
    



