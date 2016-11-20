<?php
include "../../config/koneksi.php";

	$nama_kelompok = $_POST['nama_kelompok'];
	$tingkat = $_POST['tingkat'];

	$sql = "INSERT INTO `kelompok` VALUES (NULL, '".$nama_kelompok."', '".$tingkat."')";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil ditambah..');window.location.href='../index.php?module=kelompok';</script>";
	}else{
		echo "<script>alert('data gagal ditambah..');window.location.href='../index.php?module=kelompok';</script>";
	}

?>
