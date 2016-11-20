<?php
include "../../config/koneksi.php";

	$nama_siswa = $_POST['nama_siswa'];
	$kelompok_id = $_POST['kelompok_id'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$tahun_ajaran = $_POST['tahun_ajaran'];

	$sql = "INSERT INTO `siswa` VALUES (NULL, '".$kelompok_id."', '".$tahun_ajaran."', '".$nama_siswa."', '".$tempat_lahir."', '".$tanggal_lahir."')";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil ditambah..');window.location.href='../index.php?module=siswa';</script>";
	}else{
		echo "<script>alert('data gagal ditambah..');window.location.href='../index.php?module=siswa';</script>";
	}

?>
