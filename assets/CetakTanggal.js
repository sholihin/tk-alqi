// JavaScript Document
// CetakTanggal.js
// Made oleh togie poborsky ^_^
// Built on Fedora Core 6 (Linux)
//
function cetakTanggal() {
	var sebutanHari = new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	var sebutanBulan = new Array("Januari","Februari","Maret","April","Mei","Juni",
								 "Juli","Agustus","September","Oktober","November","Desember");
	
	var tanggalan = new Date();
	var tanggal = tanggalan.getDate();
	var bulan = tanggalan.getMonth();
	var tahun = tanggalan.getFullYear();
	var hari = tanggalan.getDay();
	
	var tanggalLengkap = sebutanHari[hari] + ', ' + tanggal + ' ' + sebutanBulan[bulan] + ' ' + tahun;
		
	//alert(sebutanHari[hari] + ', ' + tanggal + ' ' + sebutanBulan[bulan] + ' ' + tahun);
	
	return tanggalLengkap;
}