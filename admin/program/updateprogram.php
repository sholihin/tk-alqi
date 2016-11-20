<?php
include "../../config/koneksi.php";

	$id = $_POST['id'];
	$nama_program = $_POST['nama_program'];
	$nominal = $_POST['nominal'];
	$tahun_ajaran = $_POST['tahun_ajaran'];

	$sql = "UPDATE `program` SET `nama_program` = '".$nama_program."', `nominal` = '".$nominal."', `tahun_ajaran` = '".$tahun_ajaran."' WHERE `program_id` = '".$id."'";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil dirubah..');window.location.href='../index.php?module=program';</script>";
	}else{
		echo "<script>alert('data gagal dirubah..');window.location.href='../index.php?module=program';</script>";
	}

?>
