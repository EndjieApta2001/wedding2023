<?php
    include('koneksi/koneksi.php');
    session_start();
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['level'] = $level;
    if(empty($nama)) {
        header("Location:tambah_user.php?notif=tambahKosong&jenis=nama");
    }else if(empty($email)) {
        header("Location:tambah_user.php?notif=tambahKosong&jenis=email");
    }else if(empty($username)) {
        header("Location:tambah_user.php?notif=tambahKosong&jenis=username");
    }else if(empty($password)) {
        header("Location:tambah_user.php?notif=tambahKosong&jenis=password");
    }else {
        $sql = "insert into `admin` (`nama`, `email`, `username`, `password`, `level`) 
        values ('$nama', '$email', '$username', MD5('$password'), '$level')";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['id_admin']);
    header("Location:user.php?notif=tambahberhasil");
?>