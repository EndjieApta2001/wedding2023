<?php
    include('./admin/koneksi/koneksi.php');
    session_start();
    $nama       = $_POST['nama'];
    $tempat     = $_POST['tempat'];
    $alamat     = $_POST['alamat'];
    $kota       = $_POST['kota'];
    $tanggal    = $_POST['tanggal'];
    $jam        = $_POST['jam'];
    $status     = $_POST['status'];
    
    $_SESSION['nama'] = $nama;
    $_SESSION['tempat'] = $tempat;
    $_SESSION['alamat'] = $alamat;
    $_SESSION['kota'] = $kota;
    $_SESSION['tanggal'] = $tanggal;
    $_SESSION['jam'] = $jam;
    $_SESSION['status'] = $status;
    if(empty($tempat)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=kode");
    }else if(empty($alamat)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=nama");
    }else if(empty($kota)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=nama");
    }else if(empty($tanggal)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=nomor");
    }else if(empty($jam)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=jenis_kelamin");
    }else if(empty($status)) {
        header("Location:persiapan.php?notif=tambahKosong&jenis=paket");
    }else {
        $sql = "INSERT INTO `persiapan` (`id_pemesanan`, `tempat`, `alamat`, `kota`, `tanggal`, `waktu`, `status`) VALUES ('$nama', '$tempat', '$alamat', '$kota', '$tanggal', '$jam', '$status');";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['nama']);
    unset($_SESSION['tempat']);
    unset($_SESSION['alamat']);
    unset($_SESSION['kota']);
    unset($_SESSION['tanggal']);
    unset($_SESSION['jam']);
    unset($_SESSION['status']);
    header("Location:index.php");
?>