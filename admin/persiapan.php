<?php 
include('koneksi/koneksi.php');
	if((isset($_GET['aksi']))&&(isset($_GET['data']))){
		 if($_GET['aksi']=='hapus'){
	      $id_persiapan = $_GET['data'];
	      //get foto
	      $sql_pr = "SELECT `status` FROM `persiapan` WHERE `kode`='$kode'";
	      $query_pr = mysqli_query($koneksi,$sql_pr);
	      $jumlah_pr = mysqli_num_rows($query_pr);
	    if($jumlah_pr>0){
	      while($data_pr = mysqli_fetch_row($query_pr)){
	        $status = $data_pr[0];
	        //menghapus foto dalam folder foto
	        unlink("status/$status");
	      }
	    }
	    //hapus persiapan
	    $sql_pr = "delete from `persiapan` where `kode` = '$kode'";
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
            <h3><i class="fas fa-user-tie"></i> Data Persiapan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Persiapan</li>
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
          <a href="laporan_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i>PDF</a>
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
                <th width="10%">kode</th>
                <th width="10%">nama</th>
                <th width="15%">tempat</th>
                <th width="15%">alamat</th>
                <th width="10%">Kota</th>
                <th width="15%">tanggal Mulai</th>
                <th width="15%">jam</th>
                <th width="15%">status</th>
                <th width="30%"><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_pr = "SELECT `a`.`id_persiapan`, `a`.`id_pemesanan`, `b`.`kode`, `b`.`nama`, `a`.`tempat`, `a`.`alamat`, `a`.`kota`, `a`.`tanggal`, `a`.`waktu`, `a`.`status` FROM `persiapan` `a` INNER JOIN `pemesanan` `b` ON `a`.`id_persiapan` = `b`.`id_pemesanan` ORDER BY `kode`;";
            $query_pr = mysqli_query($koneksi,$sql_pr);
            $no = 1;
            while($data_pr  = mysqli_fetch_row($query_pr)){
            $id_persiapan  = $data_pr[0];
            $id_pemesanan   = $data_pr[1];
            $kode           = $data_pr[2];
            $nama           = $data_pr[3];
            $tempat         = $data_pr[4];
            $alamat         = $data_pr[5];
            $kota           = $data_pr[6];
            $tanggal        = $data_pr[7];
            $waktu          = $data_pr[8];
            $status         = $data_pr[9];
            ?>
            <tr>
            <td><?php echo $no;?></td>  
            <td><?php echo $kode;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $tempat;?></td>
            <td><?php echo $alamat;?></td>
            <td><?php echo $kota;?></td>
            <td><?php echo $tanggal;?></td>
            <td><?php echo $waktu;?></td>
            <td><span class="badge badge-primary"><?php echo $status;?></span></td>
            <td align="center">
            <a href="edit_persiapan.php?data=<?php echo $id_persiapan;?>"
            class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            <a href="javascript:if(confirm('Anda yakin ingin menghapus data
            <?php echo $persiapan; ?>?'))window.location.href =
            'kategoribuku.php?aksi=hapus&data=<?php echo
            $id_persiapaan;?>&notif=hapusberhasil'"
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
