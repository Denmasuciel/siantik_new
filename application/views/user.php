<script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery-3.3.1.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>backend/bower_components/chart.js/Chart.js"></script> -->
<script>


// var save_method; //for save method string
// var table; 
var myApp = myApp || {}; 
$(document).ready(function(){ //DOCUMENT READY

$('#vw_user').dataTable( {   //Tabel antrian A
    "bProcessing"   : true,
    "scrollY"       :  350,
    "lengthChange": false,
    "searching"   : true,
    "ordering" : false,
    "scrollCollapse": true,
    "sAjaxSource"   : "<?php echo site_url('user/view_user');?>",
    "aoColumns": [
    { "mData": "no" },
    { "mData": "nama" },
    { "mData": "username" },
    { "mData": "password" },
    { "mData": "id_loket" },
    { "mData": "level" },
    { "mData": "aktif" }
    // ,
    // { "mData": "aksi" }
    ]
  } );

});//Akhir document ready

</script>


  <div class="row">
        
        <div class="col-md-12">
              <!-- /.row --> 
              <div class="box">
                <div class="box-body">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-user">
                <i class="fa fa-plus"></i>Tambah User
              </button>
            </div>
       <!--  <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div> -->
        <div class="box-body">
          <table id="vw_user" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Loket</th>
                <th>Level</th>
                <th>Aktif</th>
                <!-- <th>Aksi</th> -->
              </tr>
            </thead>
            <tbody id="showdata3">
            </tbody>
          </table>
        </div>
      </div>
        </div>
  </div>

<div class="modal fade" id="modal-user">
          <div class="modal-dialog">
            <div class="modal-content">         
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"><i class="fa fa-close"></i> Cancel</button>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>


   