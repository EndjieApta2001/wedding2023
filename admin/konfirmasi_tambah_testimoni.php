<?php 
session_start();
include('koneksi/koneksi.php');
if(isset($_SESSION['id_testimoni'])){
        $id_testimoni = $_SESSION['id_testimoni'];
        $nama_testimoni = $_POST['nama_testimoni'];
        $paket_testimoni = $_POST['paket_testimoni'];
        $deskripsi_testimoni = $_POST['deskripsi_testimoni'];
        $tanggal = $_POST['tanggal'];
        $foto = $_POST['foto'];
        //get foto 
        $sql_ts = "SELECT `foto` FROM `testimoni` WHERE `id_testimoni`='$id_testimoni'";
        $query_ts = mysqli_query($koneksi,$sql_ts);
        while($data_ts = mysqli_fetch_row($query_ts)){
        $foto = $data_ts[0];
        //echo $foto;
        }
        if(empty($nama_testimoni)){
        header("Location:tambah_testimoni.php?notif=editkosong&jenis=nama_testimoni");
        }else if(empty($paket_testimoni)){
        header("Location:tambah_testimoni.php?notif=editkosong&jenis=paket_testimoni");
        }else if(empty($deskripsi_testimoni)){
            header("Location:tambah_testimoni.php?notif=editkosong&jenis=deskripsi_testimoni");
        }else if(empty($tanggal)){
            header("Location:tambah_testimoni.php?notif=editkosong&jenis=tanggal");
        }else if(empty($foto)){
            header("Location:tambah_testimoni.php?notif=editkosong&jenis=foto");
        }else{
        $lokasi_file = $_FILES['testimoni']['tmp_name'];
        $nama_file = $_FILES['testimoni']['name'];
        $direktori = 'testimoni/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
        if(!empty($foto)){
        unlink("foto/$foto");
        }
        $sql = "INSERT INTO `testimoni` (`id_testimoni`, `nama_testimoni`, `paket_testimoni`, `deskripsi_testimoni`, `tanggal`, `foto`) VALUES (NULL, '$nama_testimoni', '$paket_testimoni', '$deskripsi_testimoni', '$tanggal', '$foto');";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        }
        header("Location:testimoni.php?notif=tambahberhasil");
        }
    }
?>