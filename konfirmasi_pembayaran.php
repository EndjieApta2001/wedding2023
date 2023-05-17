<?php
    include('./admin/koneksi/koneksi.php');
    session_start();
    $nama                   = $_POST['nama'];
    $metode_bayar           = $_POST['metode_bayar'];
    
    $_SESSION['nama']               = $nama;
    $_SESSION['metode_bayar']       = $metode_bayar;
    if(empty($metode_bayar)) {
        header("Location:pembayaran.php?notif=tambahKosong&jenis=metode_bayar");
    }else {
        $sql = "INSERT INTO `laporan` (`id_pemesanan`, `metode_bayar`) VALUES ('$nama', '$metode_bayar');";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['nama']);
    unset($_SESSION['metode_bayar']);
    header("Location:persiapan.php");
?>