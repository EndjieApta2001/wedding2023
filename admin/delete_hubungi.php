<?php
include('koneksi/koneksi.php');
// Cek nik
if (isset($_GET['id_hubungi'])) {
    $id_hubungi = $_GET['id_hubungi'];
// membaca nama file yang akan dihapus
$query   = "SELECT * FROM hubungi WHERE id_hubungi='$id_hubungi'";
$hasil   = mysql_query($query);
}
else {
    die ("Error. Tidak ada, Silakan cek kembali! ");    
}
//proses hapus data
    if (!empty($id_hubungi) && $id_hubungi != "") {
        $hapus = "DELETE FROM hubungi WHERE id_hubungi='$id_hubungi'";
        $sql = mysql_query ($hapus);
        if ($sql) {        
            ?>
                <script language="JavaScript">
                alert('Seluruh Data hubungi <?=$id_hubungi?> Berhasil dihapus!');
                document.location='index.php?page=lihat';
                </script>
            <?        
        } else {
            echo "<font color=red><center>Data hubungi gagal dihapus</center></font>";    
        }
    }
//Tutup koneksi engine MySQL
    mysql_close($Open);
?>