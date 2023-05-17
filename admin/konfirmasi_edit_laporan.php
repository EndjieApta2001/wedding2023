<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_laporan'])){
        $id_laporan       = $_SESSION['id_laporan'];
        $metode_bayar             = $_POST['metode_bayar'];
        
        $sql = "UPDATE `laporan` SET `metode_bayar`='$metode_bayar' WHERE `id_laporan`='$id_laporan'";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        header("Location:laporan.php?notif=editberhasil");
    }
?>