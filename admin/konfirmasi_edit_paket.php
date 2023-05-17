<?php 
 
include 'koneksi/koneksi.php';
$nama_paket = $_POST['nama_paket'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
 
mysql_query("UPDATE `paket` SET `nama_paket`='$nama_paket', `deskripsi`='$deskripsi', `harga`='$harga' WHERE `id_paket`='$id_paket'");
 
header("location:paket.php?pesan=update");
?>