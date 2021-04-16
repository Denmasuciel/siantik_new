
<script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery-3.3.1.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>backend/bower_components/chart.js/Chart.js"></script> -->
<script>
  $(document).ready(function() {  
    
  })
// setTimeout(function(){
//    window.location.reload(1);
// }, 15000);
//Script chart bunder


// var save_method; //for save method string
// var table; 
var myApp = myApp || {}; 
$(document).ready(function(){ //DOCUMENT READY


$('#pengumuman').dataTable( {   //Tabel antrian A
    "bProcessing"   : true,
    "scrollY"       :  350,
    "lengthChange": false,
    "searching"   : true,
    "ordering" : false,
    "scrollCollapse": true,
    "sAjaxSource"   : "<?php echo site_url('pengumuman/view_pengumuman');?>",
    "aoColumns": [
    { "mData": "no" },
    { "mData": "judul" },
    { "mData": "konten" },
    { "mData": "status" }
    ]
  } );


});//Akhir document ready

</script>

<div class="row">
  <div class="box-body">

              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-pengumuman">
                <i class="fa fa-plus"></i> Tambah Pengumuman
              </button>
           </div>
</div>


  <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
              <!-- /.row --> 
              <div class="box">
        <div class="box-header">
              <h3 class="box-title">Pengumuman</h3>
            </div>
        <div class="box-body">
          <table id="pengumuman" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Status</th>
                <!-- <th>Aksi</th> -->
              </tr>
            </thead>
            <tbody id="showdata2">
            </tbody>
          </table>
        </div>
      </div>
        </div>
  </div>
      


<div class="modal fade" id="modal-pengumuman">
          <div class="modal-dialog">
            <div class="modal-content">         
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="judul">
                  </div>
                </div>

                <div class="form-group">
                  <label for="konten" class="col-sm-2 control-label">Konten</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="konten" placeholder="konten">
                  </div>
                </div>

               
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"><i class="fa fa-close"></i> Batal</button>
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
