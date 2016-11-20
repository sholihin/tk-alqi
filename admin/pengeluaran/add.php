<?php
session_start();
include "../../config/koneksi.php";

	$nama_pengeluaran = $_POST['nama_pengeluaran'];
	$nominal = $_POST['nominal'];
	$keterangan = $_POST['keterangan'];
	$tanggal_pengeluaran = $_POST['tanggal_pengeluaran'];
	$user_id = $_SESSION['login_admin']['id_admin'];
	$sql = "INSERT INTO `pengeluaran` VALUES (NULL, '".$nama_pengeluaran."', '".$nominal."', '".$keterangan."', '".$tanggal_pengeluaran."', '".$user_id."')";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil ditambah..');window.location.href='../index.php?module=pengeluaran';</script>";
	}else{
		echo "<script>alert('data gagal ditambah..');window.location.href='../index.php?module=pengeluaran';</script>";
	}

?>
