<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Admin</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="<?php echo base_url('index.php/login/do_login/');?>" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        
        <?php if($gagallogin = $this->session->flashdata('gagallogin')){?>
          <div class="alert alert-danger">
              <?php echo $gagallogin;?>
          </div>
        <?php } ?>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="Submit" value="Login" class="btn btn-primary btn-lg btn-block">
        <br>
        <!-- BELUM MEMILIKI AKUN-->
        <P>Belum memiliki akun?<a href="<?php echo base_url();?>index.php/Registrasi">Klik disini</a></P>    
      </div>
    </form>
  </div>


</body>

</html>
