<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_persiapan'])){
        $id_persiapan       = $_SESSION['id_persiapan'];
        $tempat             = $_POST['tempat'];
        $alamat             = $_POST['alamat'];
        $kota               = $_POST['kota'];
        $tanggal            = $_POST['tanggal'];
        $waktu              = $_POST['waktu'];
        $status             = $_POST['status'];
        
        $sql = "UPDATE `persiapan` SET `tempat`='$tempat', `alamat`='$alamat', `kota`='$kota', `tanggal`='$tanggal', `waktu`='$waktu', `status`='$status'
        WHERE `id_persiapan`='$id_persiapan'";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        header("Location:persiapan.php?notif=editberhasil");
    }
?>