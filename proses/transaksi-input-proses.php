<?php
include'../koneksi.php';

$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=$_POST['tgl_kembali'];
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbtransaksi
		VALUES('$id_transaksi', '$id_anggota', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=transaksi");
}
?>