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
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Laporan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
          <a href="export.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>Export Data</a>
          </div>
        </div>

              <!-- /.card-header -->
     <div class="card-body">
     <div class="col-sm-12">
          <?php if(!empty($_GET['notif'])){ if($_GET['notif']=="editberhasil"){?>
            <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
            <?php }?>
          <?php }?>
        </div>

        <table class="table table-bordered">
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
                <th width="15%"><center>Aksi</center></th>
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
            <td align="center">
            <a href="edit_laporan.php?data=<?php echo $id_laporan;?>"
            class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            <a href="javascript:if(confirm('Anda yakin ingin menghapus data
            <?php echo $id_laporan; ?>?'))window.location.href =
            'laporan.php?aksi=hapus&data=<?php echo
            $id_laporan;?>&notif=hapusberhasil'"
            class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>
            Hapus</a>
            </td>
            </tr>
            <?php $no++;}?>
            </tbody>
            </table>
      </div>
<!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
