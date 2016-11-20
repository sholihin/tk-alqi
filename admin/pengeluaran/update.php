<?php
include "../../config/koneksi.php";

	$id = $_POST['id'];
	$nama_pengeluaran = $_POST['nama_pengeluaran'];
	$nominal = $_POST['nominal'];
	$keterangan = $_POST['keterangan'];
	$tanggal_pengeluaran = $_POST['tanggal_pengeluaran'];

	$sql = "UPDATE `pengeluaran` SET `nama_pengeluaran` = '".$nama_pengeluaran."', `nominal` = '".$nominal."', `keterangan` = '".$keterangan."', `tanggal_pengeluaran` = '".$tanggal_pengeluaran."' WHERE `pengeluaran_id` = '".$id."'";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil dirubah..');window.location.href='../index.php?module=pengeluaran';</script>";
	}else{
		echo "<script>alert('data gagal dirubah..');window.location.href='../index.php?module=pengeluaran';</script>";
	}

?>
