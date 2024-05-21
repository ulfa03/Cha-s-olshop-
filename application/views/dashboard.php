<?php
	if($this->session->set_userdata('status_login', false)){
		redirect('Admin/index');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chaolshop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
		<a class="navbar-brand" href="index">
      	<img src="<?php echo base_url('assets/') ?>img/logo1.png" alt="" width="80" height="80"><h1>Chaolshop</h1></a>
			<a href="dashboard"></a>
			<ul>
				<h4>
				<li><a href="dashboard">Dashboard</a></li>
				<li><a href="profil">Profil</a></li>
				<li><a href="data_kategori">Data Kategori</a></li>
				<li><a href="data_produk">Data Produk</a></li>
				<li><a href="keluar">Keluar</a></li></h4>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Chaolshop</h4>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Chaolshop.</small>
		</div>
	</footer>
</body>
</html>