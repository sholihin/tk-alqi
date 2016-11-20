<?php
include "../config/koneksi.php";

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE `invoice` SET `status` = '".$status."' WHERE `id_invoice` = '".$id."'";

$query = mysqli_query($koneksi, $sql);
if($query){
	if($status == 'ditolak'){
		$s = "SELECT * FROM `cart`  WHERE `id_header_transaction` = '".$_POST['id_header_transaction']."'";
		$q = mysqli_query($koneksi, $s);
		foreach($q as $row){
			$updatesql = "
				UPDATE `product` SET 
				`stock_product` = stock_product + '".$row['qty']."' 
				WHERE `product`.`id_product` = '".$row['id_produk']."'
			";
			mysqli_query($koneksi, $updatesql);
		}
	}elseif($status == 'selesai'){
		$s = "SELECT * FROM `cart`  WHERE `id_header_transaction` = '".$_POST['id_header_transaction']."'";
		$q = mysqli_query($koneksi, $s);
		foreach($q as $row){
			$updatesql = "
				UPDATE `cart` SET `status_pemesan` = 'buy' WHERE `id` = '".$row['id']."'
			";
			mysqli_query($koneksi, $updatesql);
		}
	}
	echo "<script>alert('data berhasil dirubah..');window.location.href='index.php?module=pemesanan';</script>";
}else{
	echo "<script>alert('data gagal dirubah..');window.location.href='index.php?module=pemesanan';</script>";
}
 
?>