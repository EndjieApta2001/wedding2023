<?php 
include('koneksi/koneksi.php');
	if((isset($_GET['aksi']))&&(isset($_GET['data']))){
		 if($_GET['aksi']=='hapus'){
	      $id_pemesanan = $_GET['data'];
	      //get foto
	      $sql_pm = "SELECT `uang_muka` FROM `pemesanan` WHERE `kode`='$kode'";
	      $query_pm = mysqli_query($koneksi,$sql_pm);
	      $jumlah_pm = mysqli_num_rows($query_pm);
	    if($jumlah_pm>0){
	      while($data_pm = mysqli_fetch_row($query_pm)){
	        $uang_muka = $data_pm[0];
	      }
	    }
	    //hapus persiapan
	    $sql_pr = "delete from `persiapan` where `kode` = '$kode'";
	    mysqli_query($koneksi,$sql_dh);
	    //hapus data pemesanan
	    $sql_pm = "delete from `pemesanan` where `kode` = '$kode'";
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
            <h3><i class="fas fa-user-tie"></i> Data Pesanan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="card">
      <div class="card-header">
      <form method="get" action="kategoribuku.php">
        <div class="row">
          <div class="col-md-4 bottom-10">
            <input type="text" class="form-control" id="kata_kunci"
              name="katakunci">
            </div>
          <div class="col-md-5 bottom-10">
            <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i> Search</button>
          </div>
        </div><!-- .row -->
      </form>
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
                <th width="10%">kode</th>
                <th width="10%">nama</th>
                <th width="15%">nomor aktif</th>
                <th width="15%">jenis_kelamin</th>
                <th width="10%">paket</th>
                <th width="15%">tanggal pesan</th>
                
                <th width="30%"><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_pm = "SELECT `a`.`id_pemesanan`, `a`.`id_paket`, `a`.`kode`, `a`.`nama`, `a`.`nomor`, `a`.`jenis_kelamin`, `b`.`nama_paket`, `a`.`tanggal_pesan` FROM `pemesanan` `a` INNER JOIN `paket` `b` ON `a`.`id_pemesanan` = `b`.`id_paket` ORDER BY `kode`;";
            $query_pm = mysqli_query($koneksi,$sql_pm);
            $no = 1;
            while($data_pm = mysqli_fetch_row($query_pm)){
            $id_pemesanan       = $data_pm[0];
            $id_paket           = $data_pm[1];
            $kode               = $data_pm[2];
            $nama               = $data_pm[3];
            $nomor              = $data_pm[4];
            $jenis_kelamin      = $data_pm[5];
            $nama_paket         = $data_pm[6];
            $tanggal_pesan      = $data_pm[7];
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $kode;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $nomor;?></td>
            <td><?php echo $jenis_kelamin;?></td>
            <td><?php echo $nama_paket;?></td>
            <td><?php echo $tanggal_pesan;?></td>
            <td align="center">
            <a href="edit_pesanan.php?data=<?php echo $id_pemesanan;?>"
            class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            <a href="javascript:if(confirm('Anda yakin ingin menghapus data
            <?php echo $pemesanan; ?>?'))window.location.href =
            'kategoribuku.php?aksi=hapus&data=<?php echo
            $id_pemesanan;?>&notif=hapusberhasil'"
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
