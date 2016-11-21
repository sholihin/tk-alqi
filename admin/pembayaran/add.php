<?php
include "../../config/koneksi.php";
session_start();
	$siswa_id = $_POST['siswa_id'];
	$program_id = $_POST['program_id'];
	$tempat_lahir = $_POST['tempat_lahir'];

	// hitung semua tagihan -> $nominal_anggaran
	$q = mysqli_query($koneksi, "select sum(nominal) as nominal_anggaran from program");
	$d = mysqli_fetch_object($q);
	$nominal_anggaran = $d->nominal_anggaran;

	// hitung semua yg di bayar -> $saldo_awal
	$a = mysqli_query($koneksi, "select sum(saldo_awal) as total_saldo from pembayaran where siswa_id = '".$siswa_id."'");
	$b = mysqli_fetch_object($a);
	$saldo_awal = $d->nominal_anggaran - $b->total_saldo;

	// tanggal_pembayaran hari ini
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_pembayaran = date('Y-m-d');

	$user_id = $_SESSION['login_admin']['id_admin'];

	$sql = "INSERT INTO `pembayaran` VALUES (NULL, '".$program_id."', '".$siswa_id."', '".$saldo_awal."', '".$nominal_anggaran."', '".$tanggal_pembayaran."', '".$user_id."')";
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>alert('data berhasil ditambah..');window.location.href='../index.php?module=pembayaran';</script>";
	}else{
		echo "<script>alert('data gagal ditambah..');window.location.href='../index.php?module=pembayaran';</script>";
	}

?>
