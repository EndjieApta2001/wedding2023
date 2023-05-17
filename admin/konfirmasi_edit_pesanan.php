<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_pemesanan'])){
        $id_pemesanan   = $_SESSION['id_pemesanan'];
        $kode           = $_POST['kode'];
        $nama           = $_POST['nama'];
        $nomor          = $_POST['nomor'];
        $id_paket       = $_POST['id_paket'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $status_bayar   = $_POST['status_bayar'];
        $uang_muka      = $_POST['uang_muka'];
        
        $sql = "UPDATE `pemesanan` SET `kode`='$kode', `nama`='$nama', `nomor`='$nomor', `id_paket`='$id_paket', `jenis_kelamin`='$jenis_kelamin', `status_bayar`='$status_bayar'
        , `uang_muka`='$uang_muka' WHERE `id_pemesanan`='$id_pemesanan'";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        header("Location:pesanan.php?notif=editberhasil");
    }
?>