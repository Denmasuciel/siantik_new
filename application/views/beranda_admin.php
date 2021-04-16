<div class="row">


    <div class="col-lg-6 col-xs-12">
          
      <div class="box">
        <div class="box-header">
              <h3 class="box-title">Waktu Pelayanan Racikan</h3>
            <button type="button" id="excel_racikan" onClick="racikan_excel()" class="btn btn-success pull-right"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp; To Excel</button>
            
            </div>
        <div class="box-body">
          <table id="racikan_harian" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>No Antrian</th>
               <th>Resep IN</th>
                <th>Obat Out</th>
                <th>Waktu Pelayanan(menit)</th>
              </tr>
            </thead>
            <tbody >
            </tbody>
          </table>
        </div>
      </div>

      <div class="box">
        <div class="box-header">
              <h3 class="box-title">Waktu Pelayanan Non Racikan</h3>
         <button type="button" id="excel_nonracikan" onClick="nonracikan_excel()" class="btn btn-success pull-right"><i class="fa fa-file-excel-o"></i>&nbsp;&nbsp; To Excel</button></div>
        <div class="box-body">
          <table id="nonracikan_harian" class="table table-bordered table-hover">
            <thead>
              <tr>
              <th>No</th>
                <th>No Antrian</th>
               <th>Resep IN</th>
                <th>Obat Out</th>
                <th>Waktu Pelayanan(menit)</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    
      

    </div>

<div class="col-lg-6 col-xs-12">
    <div class="box">
        <div class="box-header">
              <h3 class="box-title">Rata-rata pelayanan resep</h3>
            </div>

        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Loket</th>
                <th>Rata-rata ( menit )</th>
              </tr>
            </thead>
            <tbody id="showdata">
            </tbody>
          </table>
        </div>
      </div>

    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Antrian Racikan</span>
          <span class="info-box-number"><?php echo $antri_a; ?> &nbsp; pasien</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Antrian Non Racik</span>
          <span class="info-box-number"><?php echo $antri_b; ?> &nbsp; pasien</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>


  <div class="col-lg-6 col-xs-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <i class="fa fa-briefcase"></i>
        <h3 class="box-title">Statistik <small>Antrian Apotik</small></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <canvas id="data-posisi" style="height:250px"></canvas>
      </div>
    </div>
  </div>




</div>

<script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>backend/bower_components/chart.js/Chart.js"></script>
<script>
  $(document).ready(function() {  
    
  })
setTimeout(function(){
   window.location.reload(1);
}, 15000);
//Script chart bunder
var pieData = [

{
  value: <?php echo $antri_b;?>,
  color:"green",
  highlight: "#FF5A5E",
  label: "Non Racikan",
},
{
  value: <?php echo $antri_a;?>,
  color: "red",
  highlight: "#616774",
  label: "Racikan"
}

];

window.onload = function(){
  var ctx = document.getElementById("data-posisi").getContext("2d");
  window.myPie = new Chart(ctx).Pie(pieData);
};


// var save_method; //for save method string
// var table; 
var myApp = myApp || {}; 
$(document).ready(function(){ //DOCUMENT READY
  myApp.oTable =  $('#example2').dataTable( {   //Tabel antrian A
     "bProcessing"   : true,
    "scrollY"       :  350,
    "lengthChange": false,
    "searching"   : false,
    "scrollCollapse": true,
    "sAjaxSource"   : "<?php echo site_url('home/view_data');?>",
    "aoColumns": [
    { "mData": "loket" },
    { "mData": "rata" }
    ]
  } );

$('#racikan_harian').dataTable( {   //Tabel antrian A
     "bProcessing"   : true,
    "scrollY"       :  350,
    // "lengthChange": false,
    // "searching"   : false,
    "scrollCollapse": true,
    "sAjaxSource"   : "<?php echo site_url('home/view_data_harian_racikan');?>",
    "aoColumns": [
    { "mData": "no" },
    { "mData": "nomor_antrian" },
    { "mData": "jam_serahkan_tiket" },
    { "mData": "selesai" },
    { "mData": "menit" }
    ]
  } );

$('#nonracikan_harian').dataTable( {   //Tabel antrian A
     "bProcessing"   : true,
    "scrollY"       :  350,
    // "lengthChange": false,
    // "searching"   : false,
    "scrollCollapse": true,
    "sAjaxSource"   : "<?php echo site_url('home/view_data_harian_nonracikan');?>",
    "aoColumns": [
    { "mData": "no" },
    { "mData": "nomor_antrian" },
    { "mData": "jam_serahkan_tiket" },
    { "mData": "selesai" },
    { "mData": "menit" }
    ]
  } );


});//Akhir document ready
myApp.polling = setInterval('myApp.oTable.fnDraw(false)', 5000); 

    function racikan_excel(){
      window.open('<?php echo site_url('home/racikan_excel'); ?>' );
      }

    function nonracikan_excel(){
      window.open('<?php echo site_url('home/nonracikan_excel'); ?>' );
      }

</script>


