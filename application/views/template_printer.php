<?php $uri = $this->uri->segment(1); ?>

<?php
   //Initialisasi nilai untuk nomor loket
   //Pada kasus nyata nomor loket dimabil pada saat login  
   //sesuai dengan data pada tabel admin
   $session = $this->session->sess_user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title><?= strip_tags(ucwords($_judul)); ?></title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <meta name="robots" content="noindex, nofollow">

   <link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>" />

   <!-- load Styles -->
   <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/normalize.css'); ?>" /> -->
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/bootstrap.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/font-awesome.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/awesome-bootstrap-checkbox.css'); ?>">
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/datepicker3.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/bootstrap-timepicker.min.css'); ?>" />
   <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/summernote.css'); ?>" /> -->
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/_front.css'); ?>" />
   <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/deny.css'); ?>" /> -->
   <link type="text/css" rel="stylesheet" href="<?= base_url('media/css/dataTables.bootstrap.css'); ?>" />

   <!-- load JavaScript -->
   <script type="text/javascript" src="<?= base_url('as_back/js/jquery-2.1.3.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('media/js/jquery.dataTables.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('media/js/dataTables.bootstrap.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/dataTables.colReorder.min.js'); ?>"></script>
   <script type="text/javascript" >

</script>
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/style.css'); ?>" />
</head>
<body>
        <audio id="suarabel" src="<?= base_url(); ?>Airport_Bell.mp3"></audio>
      <audio id="suarabelnomorurut" src="<?= base_url(); ?>rekaman/nomor-urut.wav"  ></audio> 
      <audio id="suarabelsuarabelloket" src="<?= base_url(); ?>rekaman/loket.wav"  ></audio> 
       
      <audio id="belas" src="<?= base_url(); ?>rekaman/belas.wav"  ></audio> 
      <audio id="sebelas" src="<?= base_url(); ?>rekaman/sebelas.wav"  ></audio> 
        <audio id="puluh" src="<?= base_url(); ?>rekaman/puluh.wav"  ></audio> 
        <audio id="sepuluh" src="<?= base_url(); ?>rekaman/sepuluh.wav"  ></audio> 
        <audio id="ratus" src="<?= base_url(); ?>rekaman/ratus.wav"  ></audio> 
        <audio id="seratus" src="<?= base_url(); ?>rekaman/seratus.wav"  ></audio> 
        <audio id="suarabelloket1" src="<?= base_url(); ?>rekaman/<?php echo $session['id_loket'];?>.wav"  ></audio> 
             
       
      <?php       
         $tcounter = $this->session->userdata('loket_a_aktif');
         $panjang=strlen($tcounter);
         $antrian=$tcounter;
         for($i=0;$i<$panjang;$i++){
      ?>
            <audio id="suarabel<?php echo $i; ?>" src="<?= base_url(); ?>rekaman/<?php echo substr($tcounter,$i,1); ?>.wav" ></audio>                
        <?php
         }
      ?>
      
      <?php       
         $tcounter_b = $this->session->userdata('loket_b_aktif');
         $panjang_b=strlen($tcounter_b);
         $antrian_b=$tcounter_b;
         for($i=0;$i<$panjang_b;$i++){
      ?>
            <audio id="suarabel<?php echo $i; ?>" src="<?= base_url(); ?>rekaman/<?php echo substr($tcounter_b,$i,1); ?>.wav" ></audio>                 
        <?php
         }
      ?>
      
      
      
      
      
<div class="container" id="container">

<!-- header -->
   <header>
      <nav class="navbar navbar-inverse hidden-print">
         <div class="navbar-header">
           <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button> -->
             <span class="navbar-brand">
              <a href="<?=base_url()?>">
               <img src="<?= base_url('as_back/img/logo.png') ?>" style="height: 40px" class="pull-left" ></a>
               <b>RSUD WONOSARI</b><br>
               <small><b> Sistem Antrian TPP</b></small>
            </span>
         </div>

      </nav>
   </header>

   <!-- konten/isi -->
   <div class="konten">
      <?= $_konten; ?>
   </div>
   
    <footer>
      <span>@team TI RSUD Wonosari 2019</span>
         
   </footer>

</div>

<?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>

<!-- Javascript -->
<script type="text/javascript">
   $(document).ready(function(){
      var height = $(window).height();
      $('#container').attr('style','min-height:'+height+'px');
      $(window).resize(function() {
         var height = $(window).height();
         $('#container').attr('style','min-height:'+height+'px');
      });
   });
</script>

</body>
</html>