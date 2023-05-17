<?php
    include('./admin/koneksi/koneksi.php');
    session_start();
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $paket = $_POST['paket'];
    $status_bayar = $_POST['status_bayar'];
    $uang_muka = $_POST['uang_muka'];
    
    $_SESSION['kode'] = $kode;
    $_SESSION['nama'] = $nama;
    $_SESSION['nomor'] = $nomor;
    $_SESSION['jenis_kelamin'] = $jenis_kelamin;
    $_SESSION['paket'] = $paket;
    $_SESSION['status_bayar'] = $status_bayar;
    $_SESSION['uang_muka'] = $uang_muka;
    if(empty($kode)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=kode");
    }else if(empty($nama)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=nama");
    }else if(empty($nomor)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=nomor");
    }else if(empty($jenis_kelamin)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=jenis_kelamin");
    }else if(empty($paket)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=paket");
    }else if(empty($status_bayar)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=status_bayar");
    }else if(empty($uang_muka)) {
        header("Location:pemesanan.php?notif=tambahKosong&jenis=uang_muka");
    }else {
        $sql = "INSERT INTO `pemesanan` (`kode`, `nama`, `nomor`, `id_paket`, `jenis_kelamin`, `status_bayar`, `uang_muka`) VALUES ('$kode', '$nama', '$nomor', '$paket', '$jenis_kelamin', '$status_bayar', '$uang_muka');";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['kode']);
    unset($_SESSION['nama']);
    unset($_SESSION['nomor']);
    unset($_SESSION['jenis_kelamin']);
    unset($_SESSION['paket']);
    unset($_SESSION['status_bayar']);
    unset($_SESSION['uang_muka']);
    header("Location:pembayaran.php?notif=tambahberhasil");
?>