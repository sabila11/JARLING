<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
	<meta name="author" content="GeeksLabs">
	<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<link rel="shortcut icon" href="img/favicon.png">

	<title>Admin - WWS</title>
	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center">

		<div class="d-flex align-items-center justify-content-between">
			<a href="index.html" class="logo d-flex align-items-center">
				<img src="assets/img/logo.png" alt="">
				<span class="d-none d-lg-block">Jawa Barat Healing</span>
			</a>
			<i class="bi bi-list toggle-sidebar-btn"></i>
		</div><!-- End Logo -->

		<div class="search-bar">
			<form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url(); ?>index.php/cari/hasil_kota">
				<input type="text" name="nama_tempat" placeholder="Search" title="Enter search keyword">
				<button type="submit" title="Search"><i class="bi bi-search"></i></button>
			</form>
		</div><!-- End Search Bar -->

		<nav class="header-nav ms-auto">
			<ul class="d-flex align-items-center">

				<li class="nav-item d-block d-lg-none">
					<a class="nav-link nav-icon search-bar-toggle " href="#">
						<i class="bi bi-search"></i>
					</a>
				</li><!-- End Search Icon-->
			</ul>
		</nav><!-- End Icons Navigation -->

	</header><!-- End Header -->

	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar">

		<ul class="sidebar-nav" id="sidebar-nav">

			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url(); ?>index.php/member">
					<i class="fa-solid fa-home"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url(); ?>index.php/Member/rencana">
					<i class="fa-solid fa-star"></i>
					<span>Wisata Populer</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url(); ?>index.php/Member/rencana">
					<i class="fa-solid fa-calendar-days"></i>
					<span>Rencana Wisata</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url('index.php/logout/') ?>">
					<i class="fa-solid fa-right-from-bracket"></i>
					<span>Keluar</span>
				</a>
			</li>
			<!-- End Dashboard Nav -->
		</ul>

	</aside><!-- End Sidebar-->
	<!-- container section start -->
	<main id="main" class="main">
		<?php echo $contents; ?>
	</main>
	<!-- javascripts -->
	<script src="https://kit.fontawesome.com/20b017bbf2.js" crossorigin="anonymous"></script>
	<!-- Vendor JS Files -->
	<script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>
