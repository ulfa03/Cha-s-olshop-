<?php 
	
	include 'db.php';

	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_category WHERE category_id = '".$_GET['idk']."' ");
		redirect('Admin/data_kategori');
	}

	if(isset($_GET['idp'])){
		$produk = mysqli_query($conn, "SELECT product_image FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
		$p = mysqli_fetch_object($produk);

		unlink('./produk/'.$p->product_image);

		$delete = mysqli_query($conn, "DELETE FROM tb_product WHERE product_id = '".$_GET['idp']."' ");
		redirect('Admin/data_produk');
	}

?>