<?php 
include('koneksi/koneksi.php');
	if((isset($_GET['aksi']))&&(isset($_GET['data']))){
		 if($_GET['aksi']=='hapus'){
	      $id_laporan = $_GET['data'];
	      //get foto
	      $sql_lp = "SELECT `bukti_pembayaran` FROM `laporan` WHERE `kode`='$kode'";
	      $query_lp = mysqli_query($koneksi,$sql_lp);
	      $jumlah_lp = mysqli_num_rows($query_lp);
	    if($jumlah_lp>0){
	      while($data_lp = mysqli_fetch_row($query_lp)){
	        $status = $data_lp[0];
	        //menghapus foto dalam folder foto
	        unlink("bukti_pembayaran/$tanggal_diterima");
	      }
	    }
	    //hapus laporan
	    $sql_lp = "delete from `persiapan` where `kode` = '$kode'";
	    mysqli_query($koneksi,$sql_dh);
	    //hapus data pemesanan
	    $sql_p = "delete from `pemesanan` where `kode` = '$kode'";
	    mysqli_query($koneksi,$sql_ds);
	  }
	}
?>
<html>
<head>
  <title>Data Laporan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Data Laporan</h2>
			<h4>Wedding Yuvi'en</h4>
				<div class="data-tables datatable-dark">
					
            <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th width="5%">No</th>
                <th width="10%">Kode</th>
                <th width="10%">Nama</th>
                <th width="15%">Nomor Aktif</th>
                <th width="10%">Status Bayar</th>
                <th width="10%">Metode Bayar</th>
                <th width="10%">Total</th>
                <th width="15%">Tanggal diterima</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_lp = "SELECT `a`.`id_laporan`, `a`.`id_pemesanan`, `b`.`kode`, `b`.`nama`, `b`.`nomor`, `b`.`status_bayar`, `a`.`metode_bayar`, `b`.`uang_muka`, `b`.`tanggal_pesan` FROM `laporan` `a` INNER JOIN `pemesanan` `b` ON `a`.`id_laporan` = `b`.`id_pemesanan` ORDER BY `kode`;";
            $query_lp = mysqli_query($koneksi,$sql_lp);
            $no = 1;
            while($data_lp  = mysqli_fetch_row($query_lp)){
            $id_laporan           = $data_lp[0];
            $id_pemesanan         = $data_lp[1];
            $kode                 = $data_lp[2];
            $nama                 = $data_lp[3];
            $nomor                = $data_lp[4];
            $status_bayar         = $data_lp[5];
            $metode_bayar         = $data_lp[6];
            $uang_muka            = $data_lp[7];
            $tanggal_pesan        = $data_lp[8];
            ?>
            <tr>
            <td><?php echo $no;?></td>  
            <td><?php echo $kode;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $nomor;?></td>
            <td><span class="badge badge-primary"><?php echo $status_bayar;?></span></td>
            <td><?php echo $metode_bayar;?></td>
            <td><?php echo $uang_muka;?></td>
            <td><?php echo $tanggal_pesan;?></td>
            </tr>
            <?php $no++;}?>
            </table>
			</tbody>		
		</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>