<?php 
include('koneksi/koneksi.php');
	if((isset($_GET['aksi']))&&(isset($_GET['data']))){
		 if($_GET['aksi']=='hapus'){
	      $id_testimoni = $_GET['data'];
	      //get foto
	      $sql_ts = "SELECT `foto` FROM `testimoni` WHERE `nama_testimoni`='$nama_testimoni'";
	      $query_ts = mysqli_query($koneksi,$sql_ts);
	      $jumlah_ts = mysqli_num_rows($query_ts);
	    if($jumlah_ts>0){
	      while($data_ts = mysqli_fetch_row($query_ts)){
	        $foto = $data_ts[0];
	      }
	    }
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
            <h3><i class="fas fa-user-tie"></i> Data Testimoni</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Testimoni</li>
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
                <!-- <a href="edit_profil.php" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit kategori</a> -->
                <a href="tambah_testimoni.php" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-edit"></i> Tambah Testimoni</a>
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
                <th width="15%">nama</th>
                <th width="15%">paket</th>
                <th width="20%">deskripsi</th>
                <th width="15%">tanggal</th>
                <th width="20%">foto</th>
                <th width="30%"><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_ts = "SELECT `nama_testimoni`,`paket_testimoni`,`deskripsi_testimoni`,`tanggal`, `foto` FROM `testimoni` ORDER BY `nama_testimoni`";
            $query_ts = mysqli_query($koneksi,$sql_ts);
            $no = 1;
            while($data_ts = mysqli_fetch_row($query_ts)){
            $nama_testimoni         = $data_ts[0];
            $paket_testimoni        = $data_ts[1];
            $deskripsi_testimoni    = $data_ts[2];
            $tanggal                = $data_ts[3];
            $foto                   = $data_ts[4];
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $nama_testimoni;?></td>
            <td><?php echo $paket_testimoni;?></td>
            <td><?php echo $deskripsi_testimoni;?></td>
            <td><?php echo $tanggal;?></td>
            <td><img src="testimoni/<?php echo $foto;?>" alt=""></td>
            <td align="center">
            <a href="edit_testimoni.php?data=<?php echo $id_testimoni;?>"
            class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
            <a href="javascript:if(confirm('Anda yakin ingin menghapus data
            <?php echo $testimoni; ?>?'))window.location.href =
            'testimoni.php?aksi=hapus&data=<?php echo
            $id_testimoni;?>&notif=hapusberhasil'"
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
