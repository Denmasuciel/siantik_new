<?php $uri = $this->uri->segment(2); $uri3 = $this->uri->segment(3); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title><?= strip_tags(ucwords($_judul)); ?></title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <meta name="robots" content="noindex, nofollow">

   <link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>" />

   <!-- Styles -->
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/normalize.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/bootstrap.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/animate.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/font-awesome.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/summernote.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/datepicker3.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/bootstrap-timepicker.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/fileinput.min.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/jquery.printarea.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/magnific-popup.css'); ?>" />
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/select2/select2.min.css'); ?>" />

   <!-- Custom Styles by hendra -->
   <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/assets/css/style.css'); ?>"> -->
   <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/css/_hx_back.css'); ?>" />

  <!--  <link type="text/css" rel="stylesheet" href="<?= base_url('as_back/assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'); ?>">
 -->
   <script type="text/javascript" src="<?= base_url('as_back/js/jquery-2.1.3.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/bootstrap.min.js'); ?>"></script>
      <script type="text/javascript" src="<?= base_url('as_back/js/highcharts.js'); ?>"></script>
	    <script type="text/javascript" src="<?= base_url('as_back/js/exporting.js'); ?>"></script>



</head>
<body id="top">

   <div id="wrapper">

      <!-- Menu Samping -->
      <nav class="navbar-default navbar-static-side" role="navigation">
         <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
               <li class="nav-header">
                  <div class="profile-element">
                     <img alt="image" src="<?= base_url('as_back/img/logo.png'); ?>" style="margin-bottom: 10px" />
                     <span class="text-abu" style="display: block">SISTEM ANTRIAN LOKET</span>
                     <h2>RSUD WONOSARI</h2>
                  </div>
                  <div class="logo-element">
                     <img alt="image" src="<?= base_url('as_back/img/logo-mini.png'); ?>" />
                  </div>
               </li>
			   
               <li class="<?= ($uri=='home') ? 'active' : ''; ?>">
                  <a href="<?= site_url('admin/home') ?>"><i class="fa fa-dashboard fa-fw fa-lg"></i> <span class="nav-label">Dashboard</span></a>
               </li>
			   
			    <li class="<?= ($uri=='config_printer' || $uri=='config_video' || $uri=='config_pengumuman') ? 'active' : ''; ?>">
                  <a href="index.html"><i class="fa fa-cog fa-fw fa-lg"></i> <span class="nav-label">Config</span></a>
						<ul class="nav nav-second-level collapse">
                            <li class="<?= ($uri=='config_printer') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/config_printer');?>">Printer</a></li>
                          <li class="<?= ($uri=='config_video') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/config_video');?>">Video</a></li>
							 <li class="<?= ($uri=='config_pengumuman') ? 'active' : ''; ?>"><a href="<?php echo base_url('admin/config_pengumuman');?>">Pengumuman</a></li>
                        </ul>
			   </li>
			   
               <li class="<?= ($uri=='user') ? 'active' : ''; ?>">
                  <a href="<?= site_url('admin/user') ?>"><i class="fa fa-user fa-fw fa-lg"></i> <span class="nav-label">User</span></a>
               </li>
			   
			   
			    <?php $level = $this->session->sess_user['level'];
			    if ($level == 'Adm') {?>
			  
				
				<?php }elseif($level == 'SU'){?>
			   
			  
			   <?php } ?>
			  
              
			   
			   
				
            </ul>

        </div>
    </nav>

      <!-- Konten Halaman -->
      <div id="page-wrapper" >

         <!-- Menu Atas -->
         <div class="row border-bottom">
            <nav class="navbar navbar-static-top" style="margin-bottom: 0">
               <div class="navbar-header">
                  <a class="navbar-minimalize minimalize-styl-2" href="#"><i class="fa fa-bars"></i> </a>
               </div>
               <ul class="nav navbar-top-links navbar-right">
                  <li class="icon-profil">
                     <a href="#" class="dropdown-toggle tipb" title="PROFIL" data-toggle="dropdown"><i class="fa fa-user fa-2x"></i></a>
                     <div class="dropdown-menu profil-user pull-right">
                        <div class="text-center">
                           <h4><?= $this->us['nama']; ?></h4>
                           <img src="<?= base_url('foto/'.$this->us['foto']); ?>">
                           <small>Level User : <? if($this->us['level']=='SU'){
													echo ucwords('SUPER ADMIN'); 
												 }else{
													echo ucwords('Admin'); 
												 }
											   ?></small><br>
                           <small>Login Terakhir : <?= ($this->us['tgl_login']=='00-00-0000 00:00:00') ? '-' : $this->us['tgl_login']; ?></small>
                        </div>
                        <hr>
                        <a href="<?= site_url('admin/login/form') ?>" class="btn-aksi"><i class="fa fa-pencil fa-fw text-warning"></i> Edit Profil</a>
                        <a href="<?= site_url('admin/login/logout'); ?>" class="pull-right"><i class="fa fa-power-off fa-fw text-danger"></i> Logout</a>
                     </div>
                  </li>
                  <li class="icon-profil">
                     <a href="<?= site_url('admin/login/logout'); ?>" class="tipb" title="LOGOUT"><i class="fa fa-power-off fa-2x"></i></a>
                  </li>
               </ul>

            </nav>
         </div>

         <!-- Konten Halaman -->
         <?= $_konten; ?>

         <!-- Footer -->
         <div class="footer">
            &copy; <?= date('Y'); ?> Sistem Antrian Loket <b> RSUD Wonosari</b> | {memory_usage} {elapsed_time}s<br>
            <small>Created By <a href="http://technophoriajogja.com" target="_blank">Technophoria Jogja</a></small>
         </div>

      </div>

   </div>

   <a href="#top" class="ke-atas"><i class="fa fa-angle-up"></i></a>

   <div id="modal-layout" class="modal" data-backdrop="static"></div>

   <div id="load-animasi" class="animasi-backdrop" style="display: none">
      <div class="animation-besar">
         <div class="bar bar1"></div><div class="bar bar2"></div><div class="bar bar3"></div><div class="bar bar4"></div><div class="bar bar5"></div>
         <p><small>Mohon tunggu...</small></p>
      </div>
   </div>

   <?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>

   <!-- Javascripts -->
   <script type="text/javascript" src="<?= base_url('as_back/assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/assets/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/assets/js/inspinia.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/assets/js/plugins/pace/pace.min.js'); ?>"></script>

   <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-datepicker.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-datepicker.id.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/dtpck/bootstrap-timepicker.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/valid/validation.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/valid/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/valid/id_ID.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/select2/select2.full.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/alphanumeric.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/autoNumeric.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/summernote.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/fileinput.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/jquery.printarea.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/jquery.magnific-popup.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/_form.js'); ?>"></script>
   <script type="text/javascript" src="<?= base_url('as_back/js/_script.js'); ?>"></script>


</body>
</html>