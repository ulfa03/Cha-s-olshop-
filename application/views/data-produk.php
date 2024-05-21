<?php
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
			<h3>Data Produk</h3>
			<div class="box">
				<p><a href="tambah_produk">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="<?php echo base_url('Welcome/') ?>produk/<?php echo $row['product_image'] ?>" target="_blank"> <img src="<?php echo base_url('assets/') ?>produk/<?php echo $row['product_image'] ?>" width="50px" width="50px"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
							<td>
								<a href="edit_produk?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="hapus_produk?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
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