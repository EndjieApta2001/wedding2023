<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_testimoni'])){
        $id_testimoni           = $_SESSION['id_testimoni'];
        $nama_testimoni         = $_POST['nama_testimoni'];
        $paket_testimoni        = $_POST['paket_testimoni'];
        $deskripsi_testimoni    = $_POST['deskripsi_testimoni'];
        $tanggal                = $_POST['tanggal'];
        //get foto 
        $sql_tes = "SELECT `foto` FROM `testimoni` WHERE `id_testimoni`='$id_testimoni'";
        $query_tes = mysqli_query($koneksi,$sql_tes);
        while($data_tes = mysqli_fetch_row($query_tes)){
        $foto = $data_tes[0];
        //echo $foto;
        }
        if(empty($nama_testimoni)){
        header("Location:edit_testimoni.php?notif=editkosong&jenis=nama_testimoni");
        }else if(empty($paket_testimoni)){
        header("Location:edit_testimoni.php?notif=editkosong&jenis=paket_testimoni");
        }else if(empty($deskripsi_testimoni)){
        header("Location:edit_testimoni.php?notif=editkosong&jenis=deskripsi_testimoni");
        }else if(empty($tanggal)){
        header("Location:edit_testimoni.php?notif=editkosong&jenis=tanggal");
        }else{
        $lokasi_file = $_FILES['testimoni']['tmp_name'];
        $nama_file = $_FILES['testimoni']['name'];
        $direktori = 'testimoni/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($testimoni)){
        unlink("testimoni/$testimoni");
        }
        $sql = "update `testimoni` set `nama_testimoni`='$nama_testimoni', `paket_testimoni`='$paket_testimoni', `deskripsi_testimoni`='$deskripsi_testimoni', `tanggal`='$tanggal', `testimoni`='$nama_file' 
        where `id_testimoni`='$id_testimoni'";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        }else{
        $sql = "update `testimoni` set `nama_testimoni`='$nama_testimoni', `paket_testimoni`='$paket_testimoni', `deskripsi_testimoni`='$deskripsi_testimoni', `tanggal`='$tanggal' 
        where `id_testimoni`='$id_testimoni'";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        }
        header("Location:testimoni.php?notif=editberhasil");
        }
    }
?>