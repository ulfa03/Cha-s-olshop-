<<?php
	if($this->session->set_userdata('status_login', false)){
		redirect('Admin/index');
	}
	include 'db.php';
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
			<h3>Data Kategori</h3>
			<div class="box">
				<p><a href="tambah_kategori">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							if(mysqli_num_rows($kategori) > 0){
							while($row = mysqli_fetch_array($kategori)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td>
								<a href="edit_kategori?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="hapus_kategori?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
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