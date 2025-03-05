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
              <li class="breadcrumb-item active"><a class='h10'>IT Active menu - <b>Master Data>System</b></a></li>
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
                <h3 class="card-title">System Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-striped" cellspacing="0">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>System Name</th>
                      <th>System Purpose</th>
                      <th>System Location</th>
                      <th>Credentials</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                          $no = 1;
                          $sql = $koneksi->query("select * from it_masterdata_system order by id_system asc");
                          
                          while ($data= $sql->fetch_assoc()) {
                      ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['system_name']; ?></td>
                      <td><?php echo $data['system_purpose']; ?></td>
                      <td><?php echo $data['system_location']; ?></td>
                      <td><button class="btn btn-warning btn-sm btn_cred" id="<?php echo $data['system_credentials'];?>"><i class="fas fa-eye"></i>Show</button></td>      
                      <td>
                          <button class="btn btn-info btn-sm btn_edit" id="<?php echo $data['id_system']; ?>"><i class="fas fa-pencil-alt"></i>
                              Edit
                          </button>
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

	<div class="modal fade" id="sys_cred_modal" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Credentials</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="detail-credentials">
					<h2>Test</h2>
				</div>
				<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

  <!-- Modal Edit System -->
  <div class="modal fade" id="sys_edit_modal" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit System</h4>
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
                  <form id="edit_system_form" method="post">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                           <input type="hidden" class="form-control" id="system_id_edit">
                        </div>
                        <div class="form-group">
                           <label><h5>System Name</h5></label>
                           <input type="text" class="form-control" id="system_name_edit">
                        </div>
                        <div class="form-group">
                          <label><h5>System Purpose</h5></label>
                          <textarea class="form-control" rows="3"  id="system_purpose_edit"></textarea>
                        </div>
                        <div class="form-group">
                          <label><h5>System Location</h5></label>
                          <input type="text" class="form-control" id="system_location_edit">
                        </div>
                        <h4>Credentials</h4>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <label><h5>Username</h5></label>
                          <input type="text" class="form-control" id="system_username_edit">
                      </div>
                      <div class="col-md-6">
                          <label><h5>Password</h5></label>
                          <input type="text" class="form-control" id="system_password_edit">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
				</div>
				<div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="btn_system_update">Update</button>
				</div>
			</div>
		</div>
	</div>

  <script type="text/javascript">

    $(document).ready(function(){
      $('#example2').on('click','.btn_cred', function(){
        var cred_id = $(this).attr('id');
          // alert(cred_id);
          // $('#detail-credentials').append(cred_id)
          // $("#sys_cred_modal").modal('show');
          $.ajax({
            url : "it/administrator/masterdata/system/system_controller.php",
            type : "POST",
            data : {cred_id : cred_id},
            success : function(data){
              $("#detail-credentials").html(data);
              $("#sys_cred_modal").modal("show");
            }
          })
      });

      // Memunculkan modal Edit
      $('#example2').on('click','.btn_edit', function(){
        var edit_id = $(this).attr('id');
        $.ajax({
          url : "it/administrator/masterdata/system/system_controller.php",
          type : 'POST',
          data : {edit_sys_id : edit_id},
          dataType : 'json',
          success : function(response){
            console.log(response);
            $("#sys_edit_modal").modal("show");
            $('#system_id_edit').val(response.id_system);
            $('#system_name_edit').val(response.system_name);
            $('#system_purpose_edit').val(response.system_purpose);
            $('#system_location_edit').val(response.system_location);
            $('#system_username_edit').val(response.username);
            $('#system_password_edit').val(response.password);
          }
        });
        //Swal.fire(edit_id);
      });

      // Mengupdate masterdata system
      $('#example2').on('click','.btn_system_update', function(){
        var system_id = $('#system_id_edit').val();
        var system_name = $('#system_name_edit').val();
        var system_purpose = $('#system_purpose_edit').val();
        var system_location = $('#system_location_edit').val();
        var system_username = $('#system_username_edit').val();
        var system_password = $('#system_password_edit').val();

        $.ajax({
          url : 'it/administrator/masterdata/system/system_controller.php',
          type : 'POST',
          data : {system_id : system_id, system_name : system_name, system_purpose : system_purpose, system_location : system_location, system_username : system_username, system_password : system_password},
          success : function(response){

          }

        });

      });
    });
    

  </script>
	