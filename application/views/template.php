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
   <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/awesome-bootstrap-checkbox.css'); ?>"> -->
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
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/style.css'); ?>" />
</head>

<body>
   <audio id="suarabel" src="<?= base_url(); ?>rekaman/Airport_Bell.mp3"></audio>
   <audio id="suarabelnomorurut" src="<?= base_url(); ?>rekaman/nomor-urut.wav"></audio>
   <audio id="suarabelsuarabelloket" src="<?= base_url(); ?>rekaman/loket.wav"></audio>
   <audio id="suara_a" src="<?= base_url(); ?>rekaman/a.wav"></audio>
   <audio id="suara_b" src="<?= base_url(); ?>rekaman/b.wav"></audio>

   <audio id="belas" src="<?= base_url(); ?>rekaman/belas.wav"></audio>
   <audio id="sebelas" src="<?= base_url(); ?>rekaman/sebelas.wav"></audio>
   <audio id="puluh" src="<?= base_url(); ?>rekaman/puluh.wav"></audio>
   <audio id="sepuluh" src="<?= base_url(); ?>rekaman/sepuluh.wav"></audio>
   <audio id="ratus" src="<?= base_url(); ?>rekaman/ratus.wav"></audio>
   <audio id="seratus" src="<?= base_url(); ?>rekaman/seratus.wav"></audio>
   <audio id="suarabelloket1" src="<?= base_url(); ?>rekaman/<?php echo $session['id_loket']; ?>.wav"></audio>


   <?php
   $tcounter = $this->session->userdata('loket_a_aktif');
   $panjang = strlen($tcounter);
   $antrian = $tcounter;
   for ($i = 0; $i < $panjang; $i++) {
   ?>
      <audio id="suarabel<?php echo $i; ?>" src="<?= base_url(); ?>rekaman/<?php echo substr($tcounter, $i, 1); ?>.wav"></audio>
   <?php
   }
   ?>

   <?php
   $tcounter_b = $this->session->userdata('loket_b_aktif');
   $panjang_b = strlen($tcounter_b);
   $antrian_b = $tcounter_b;
   for ($i = 0; $i < $panjang_b; $i++) {
   ?>
      <audio id="b_suarabel<?php echo $i; ?>" src="<?= base_url(); ?>rekaman/<?php echo substr($tcounter_b, $i, 1); ?>.wav"></audio>
   <?php
   }
   ?>





   <div class="container" id="container">

      <!-- header -->
      <header>
         <nav class="navbar navbar-inverse hidden-print">
            <div class="navbar-header">
               <span class="navbar-brand">
                  <a href="<?= base_url() ?>" target="_blank">
                     <img src="<?= base_url('as_back/img/logo.png') ?>" style="height: 40px" class="pull-left"></a>
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
         <span>@team TI RSUD 2019</span>

      </footer>

   </div>

   <?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>

   <!-- Javascript -->
   <script type="text/javascript">
      $(document).ready(function() {
         var height = $(window).height();
         $('#container').attr('style', 'min-height:' + height + 'px');
         $(window).resize(function() {
            var height = $(window).height();
            $('#container').attr('style', 'min-height:' + height + 'px');
         });
      });
   </script>

</body>

</html>

<script type="text/javascript">
   function mulai() {
      //MAINKAN SUARA BEL PADA SAAT AWAL
      document.getElementById('suarabel').pause();
      document.getElementById('suarabel').currentTime = 0;
      document.getElementById('suarabel').play();
      //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT    
      totalwaktu = document.getElementById('suarabel').duration * 700;
      //MAINKAN SUARA NOMOR URUT    
      setTimeout(function() {
         document.getElementById('suarabelnomorurut').pause();
         document.getElementById('suarabelnomorurut').currentTime = 0;
         document.getElementById('suarabelnomorurut').play();
         // document.getElementById('suara_a').play();
      }, totalwaktu);
      totalwaktu = totalwaktu + 1300;

      setTimeout(function() {
         document.getElementById('suara_a').pause();
         document.getElementById('suara_a').currentTime = 0;
         document.getElementById('suara_a').play();
      }, totalwaktu);
      totalwaktu = totalwaktu + 700;

      <?php
      //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
      if ($antrian < 10) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);

         totalwaktu = totalwaktu + 1200;
      <?php
      } elseif ($antrian == 10) {
         //JIKA 10 MAKA MAIKAN SUARA SEPULUH
      ?>
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 11) {
         //JIKA 11 MAKA MAIKAN SUARA SEBELAS
      ?>
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian < 20) {
         //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
      ?>
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 20 || $antrian == 30 || $antrian == 40 || $antrian == 50 || $antrian == 60 || $antrian == 70 || $antrian == 80 || $antrian == 90) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian < 100) {
         //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian == 100) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian < 110) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 110) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 120 || $antrian == 130 || $antrian == 140 || $antrian == 150 || $antrian == 160 || $antrian == 170 || $antrian == 180 || $antrian == 190) {
      ?>

         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 111) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian < 120) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian < 200) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian == 200 || $antrian == 300 || $antrian == 400 || $antrian == 500) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian == 211 || $antrian == 311 || $antrian == 411) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif (($antrian > 200 && $antrian < 210) || ($antrian > 300 && $antrian < 310) || ($antrian > 400 && $antrian < 410)) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;


      <?php
      } elseif ($antrian == 210 || $antrian == 310 || $antrian == 410) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif (($antrian > 210 && $antrian < 220) || ($antrian > 310 && $antrian < 320) || ($antrian > 410 && $antrian < 420)) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian == 220 || $antrian == 230 || $antrian == 240 || $antrian == 250 || $antrian == 260 || $antrian == 270 || $antrian == 280 || $antrian == 290 || $antrian == 320 || $antrian == 340 || $antrian == 350 || $antrian == 360 || $antrian == 370 || $antrian == 380 || $antrian == 390) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian < 500) {
      ?>
         setTimeout(function() {
            document.getElementById('suarabel0').pause();
            document.getElementById('suarabel0').currentTime = 0;
            document.getElementById('suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel1').pause();
            document.getElementById('suarabel1').currentTime = 0;
            document.getElementById('suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('suarabel2').pause();
            document.getElementById('suarabel2').currentTime = 0;
            document.getElementById('suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php

      } else {
         //JIKA LEBIH DARI 100 
         //Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
         //Selebihnya akan langsung disebutkan angkanya saja 
         //tanpa kata "RATUS", "PULUH", maupun "BELAS"
      ?>

         <?php
         for ($i = 0; $i < $panjang; $i++) {
         ?>

            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
               document.getElementById('suarabel<?php echo $i; ?>').pause();
               document.getElementById('suarabel<?php echo $i; ?>').currentTime = 0;
               document.getElementById('suarabel<?php echo $i; ?>').play();
            }, totalwaktu);
      <?php
         }
      }
      ?>


      totalwaktu = totalwaktu + 600;
      setTimeout(function() {
         document.getElementById('suarabelsuarabelloket').pause();
         document.getElementById('suarabelsuarabelloket').currentTime = 0;
         document.getElementById('suarabelsuarabelloket').play();
      }, totalwaktu);

      totalwaktu = totalwaktu + 900;
      setTimeout(function() {
         document.getElementById('suarabelloket1').pause();
         document.getElementById('suarabelloket1').currentTime = 0;
         document.getElementById('suarabelloket1').play();
      }, totalwaktu);
   }


   function mulai_b() {
      //MAINKAN SUARA BEL PADA SAAT AWAL
      document.getElementById('suarabel').pause();
      document.getElementById('suarabel').currentTime = 0;
      document.getElementById('suarabel').play();
      //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT      
      totalwaktu = document.getElementById('suarabel').duration * 700;
      //MAINKAN SUARA NOMOR URUT      
      setTimeout(function() {
         document.getElementById('suarabelnomorurut').pause();
         document.getElementById('suarabelnomorurut').currentTime = 0;
         document.getElementById('suarabelnomorurut').play();
      }, totalwaktu);
      totalwaktu = totalwaktu + 1300;

      setTimeout(function() {
         document.getElementById('suara_b').pause();
         document.getElementById('suara_b').currentTime = 0;
         document.getElementById('suara_b').play();
      }, totalwaktu);
      totalwaktu = totalwaktu + 700;

      <?php
      //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
      if ($antrian_b < 10) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);

         totalwaktu = totalwaktu + 1200;
      <?php
      } elseif ($antrian_b == 10) {
         //JIKA 10 MAKA MAIKAN SUARA SEPULUH
      ?>
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 11) {
         //JIKA 11 MAKA MAIKAN SUARA SEBELAS
      ?>
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b < 20) {
         //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 20 || $antrian_b == 30 || $antrian_b == 40 || $antrian_b == 50 || $antrian_b == 60 || $antrian_b == 70 || $antrian_b == 80 || $antrian_b == 90) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b < 100) {
         //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian_b == 100) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian_b < 110) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 110) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 120 || $antrian_b == 130 || $antrian_b == 140 || $antrian_b == 150 || $antrian_b == 160 || $antrian_b == 170 || $antrian_b == 180 || $antrian_b == 190) {
      ?>

         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 111) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b < 120) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b < 200) {
      ?>
         setTimeout(function() {
            document.getElementById('seratus').pause();
            document.getElementById('seratus').currentTime = 0;
            document.getElementById('seratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian_b == 200 || $antrian_b == 300 || $antrian_b == 400 || $antrian_b == 500) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
      <?php
      } elseif ($antrian_b == 211 || $antrian_b == 311 || $antrian_b == 411) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sebelas').pause();
            document.getElementById('sebelas').currentTime = 0;
            document.getElementById('sebelas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif (($antrian_b > 200 && $antrian_b < 210) || ($antrian_b > 300 && $antrian_b < 310) || ($antrian_b > 400 && $antrian_b < 410)) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;


      <?php
      } elseif ($antrian_b == 210 || $antrian_b == 310 || $antrian_b == 410) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('sepuluh').pause();
            document.getElementById('sepuluh').currentTime = 0;
            document.getElementById('sepuluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif (($antrian_b > 210 && $antrian_b < 220) || ($antrian_b > 310 && $antrian_b < 320) || ($antrian_b > 410 && $antrian_b < 420)) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

         setTimeout(function() {
            document.getElementById('belas').pause();
            document.getElementById('belas').currentTime = 0;
            document.getElementById('belas').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian_b == 220 || $antrian_b == 230 || $antrian_b == 240 || $antrian_b == 250 || $antrian_b == 260 || $antrian_b == 270 || $antrian_b == 280 || $antrian_b == 290 || $antrian_b == 320 || $antrian_b == 340 || $antrian_b == 350 || $antrian_b == 360 || $antrian_b == 370 || $antrian_b == 380 || $antrian_b == 390) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php
      } elseif ($antrian_b < 500) {
      ?>
         setTimeout(function() {
            document.getElementById('b_suarabel0').pause();
            document.getElementById('b_suarabel0').currentTime = 0;
            document.getElementById('b_suarabel0').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 800;
         setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime = 0;
            document.getElementById('ratus').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 800;
         setTimeout(function() {
            document.getElementById('b_suarabel1').pause();
            document.getElementById('b_suarabel1').currentTime = 0;
            document.getElementById('b_suarabel1').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 800;

         setTimeout(function() {
            document.getElementById('puluh').pause();
            document.getElementById('puluh').currentTime = 0;
            document.getElementById('puluh').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 800;
         setTimeout(function() {
            document.getElementById('b_suarabel2').pause();
            document.getElementById('b_suarabel2').currentTime = 0;
            document.getElementById('b_suarabel2').play();
         }, totalwaktu);
         totalwaktu = totalwaktu + 1000;

      <?php

      } else {
         //JIKA LEBIH DARI 100 
         //Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
         //Selebihnya akan langsung disebutkan angkanya saja 
         //tanpa kata "RATUS", "PULUH", maupun "BELAS"
      ?>

         <?php
         for ($i = 0; $i < $panjang; $i++) {
         ?>

            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
               document.getElementById('suarabel<?php echo $i; ?>').pause();
               document.getElementById('suarabel<?php echo $i; ?>').currentTime = 0;
               document.getElementById('suarabel<?php echo $i; ?>').play();
            }, totalwaktu);
      <?php
         }
      }
      ?>


      totalwaktu = totalwaktu + 600;
      setTimeout(function() {
         document.getElementById('suarabelsuarabelloket').pause();
         document.getElementById('suarabelsuarabelloket').currentTime = 0;
         document.getElementById('suarabelsuarabelloket').play();
      }, totalwaktu);

      totalwaktu = totalwaktu + 900;
      setTimeout(function() {
         document.getElementById('suarabelloket1').pause();
         document.getElementById('suarabelloket1').currentTime = 0;
         document.getElementById('suarabelloket1').play();
      }, totalwaktu);
   }
</script>