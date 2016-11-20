<?php
include "../../config/koneksi.php";

	$id = $_POST['id'];
	$nama_kelompok = $_POST['nama_kelompok'];
	$tingkat = $_POST['tingkat'];

	$sql = "UPDATE `kelompok` SET `nama_kelompok` = '".$nama_kelompok."', `tingkat` = '".$tingkat."' WHERE `kelompok_id` = '".$id."'";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil dirubah..');window.location.href='../index.php?module=kelompok';</script>";
	}else{
		echo "<script>alert('data gagal dirubah..');window.location.href='../index.php?module=kelompok';</script>";
	}

?>
