<?php
include "../../config/koneksi.php";

	$id = $_POST['id'];
	$kelompok_id = $_POST['kelompok_id'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$nama_siswa = $_POST['nama_siswa'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];

	$sql = "UPDATE `siswa` SET `kelompok_id` = '".$kelompok_id."', `tahun_ajaran` = '".$tahun_ajaran."', `nama_siswa` = '".$nama_siswa."', `tempat_lahir` = '".$tempat_lahir."', `tanggal_lahir` = '".$tanggal_lahir."' WHERE `siswa_id` = '".$id."'";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil dirubah..');window.location.href='../index.php?module=siswa';</script>";
	}else{
		echo "<script>alert('data gagal dirubah..');window.location.href='../index.php?module=siswa';</script>";
	}

?>
