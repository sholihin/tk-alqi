<?php
include "../../config/koneksi.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM `program` WHERE `program_id` = '".$id."'";

	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil dihapus..');window.location.href='../index.php?module=program';</script>";
	}else{
		echo "<script>alert('data gagal dihapus..');window.location.href='../index.php?module=program';</script>";
	}

?>
