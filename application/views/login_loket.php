<!DOCTYPE HTML>
<html>
<head>
   <title>Login User</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <meta name="robots" content="noindex, nofollow">

   <link rel="icon" type="image/png" href="<?= base_url('as_back/img/logo-mini.png'); ?>" />

   <link rel="stylesheet" href="<?= base_url('as_back/css/normalize.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('as_back/css/bootstrap.min.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('as_back/css/font-awesome.min.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('as_back/css/_hx_login.css'); ?>" />
</head>
<body>

<div class="form-login col-md-3 col-sm-6">
   <div class="panel panel-default">
      <div class="panel-body">
         <div class="text-center">
            <img src="<?php echo base_url('as_back/img/logo.png'); ?>" style="width: 120px">
            <h1><i>SISTEM ANTRIAN APOTIK</i></h1>
            <p class="lead">RSUD WONOSARI</p>
            <hr>
            <h3><i class="fa fa-lock fa-fw"></i> Login User</h3>
            <form id="form_input" action="<?= site_url('login_loket/validasi'); ?>" method="post" onsubmit="$('#progress').show()">
               <div class="form-group">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-user fa-fw fa-lg"></i></span>
                     <input type="text" name="us" class="form-control" placeholder="Username" required>
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-key fa-fw fa-lg"></i></span>
                     <input type="password" name="pw" class="form-control" placeholder="Password" required>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary btn-lg">
                  <span id="progress" class="collapse"><i class="fa fa-refresh fa-spin fa-fw text-muted"></i></span>
                  LOGIN <i class="fa fa-arrow-right fa-fw"></i>
               </button>
            </form>
         </div>
      </div>
   </div>
</div>

<?= ($_hx_info = $this->session->flashdata('hx_info')) ? $_hx_info : ''; ?>
<script type="text/javascript" src="<?= base_url('as_back/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('as_back/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
   $(".form-login").center();
   $(window).resize(function() {
      $(".form-login").center();
   });
   setTimeout(function() {
      $('.alert').fadeOut('slow',function() {
         $('.alert').alert('close');
      });
   }, 10000);
});

/* CENTER ELEMENTS IN THE SCREEN */
jQuery.fn.center = function() {
   this.css("position", "absolute");
   this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
      $(window).scrollTop()) + "px");
   this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
      $(window).scrollLeft()) + "px");
   return this;
}
</script>
</body>
</html>