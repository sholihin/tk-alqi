<?php
include "../../config/koneksi.php";

	$nama_program = $_POST['nama_program'];
	$nominal = $_POST['nominal'];
	$tahun_ajaran = $_POST['tahun_ajaran'];

	$sql = "INSERT INTO `program` VALUES (NULL, '".$nama_program."', '".$nominal."', '".$tahun_ajaran."')";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil ditambah..');window.location.href='../index.php?module=program';</script>";
	}else{
		echo "<script>alert('data gagal ditambah..');window.location.href='../index.php?module=program';</script>";
	}

?>
