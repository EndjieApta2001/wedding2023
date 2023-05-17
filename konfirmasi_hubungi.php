<?php
    include('./admin/koneksi/koneksi.php');
    session_start();
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $message = $_POST['message'];

    $_SESSION['nama'] = $nama;
    $_SESSION['nomor'] = $nomor;
    $_SESSION['message'] = $message;
    if(empty($nama)) {
        header("Location:index.php?notif=tambahKosong&jenis=nama");
    }else if(empty($nomor)) {
        header("Location:index.php?notif=tambahKosong&jenis=nomor");
    }else if(empty($message)) {
        header("Location:index.php?notif=tambahKosong&jenis=message");
    }else {
        $sql = "INSERT INTO `hubungi` (`nama`,`nomor`,`message`) VALUES ('$nama','$nomor','$message')";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['nama']);
    unset($_SESSION['nomor']);
    unset($_SESSION['message']);
    header("Location:index.php");
?>