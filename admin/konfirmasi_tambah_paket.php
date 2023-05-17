<?php 
	include('koneksi/koneksi.php');
	$paket = $_POST['paket'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	if(empty($paket)){
		header("Location:tambah_paket.php?notif=tambahkosong");
	}else if(empty($paket)) {
        header("Location:tambah_paket.php?notif=tambahkosong");
    }else if(empty($deskripsi)) {
        header("Location:tambah_paket.php?notif=tambahkosong");
    }else if(empty($harga)) {
        header("Location:tambah_paket.php?notif=tambahkosong");
    }else{

		$sql = "INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi`, `harga`) VALUES (NULL, '$paket', '$deskripsi', '$harga');";
		mysqli_query($koneksi,$sql);
	header("Location:paket.php?notif=tambahberhasil");	
	}
	?>
