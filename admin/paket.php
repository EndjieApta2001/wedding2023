<?php 
include('koneksi/koneksi.php');
	if((isset($_GET['aksi']))&&(isset($_GET['data']))){
		 if($_GET['aksi']=='hapus'){
	      $id_paket = $_GET['data'];
	      //get foto
	      $sql_pk = "SELECT `harga` FROM `paket` WHERE `nama_paket`='$nama_paket'";
	      $query_pk = mysqli_query($koneksi,$sql_pk);
	      $jumlah_pk = mysqli_num_rows($query_pk);
	    if($jumlah_pk>0){
	      while($data_pk = mysqli_fetch_row($query_pk)){
	        $harga = $data_pk[0];
	        //menghapus foto dalam folder foto
	        unlink("harga/$harga");
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
            <h3><i class="fas fa-user-tie"></i> Data Paket</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paket</li>
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
                  <a href="tambah_paket.php" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-edit"></i> Tambah Paket</a>
                </div>
              </div>

              <!-- /.card-header -->
     <div class="card-body">
     <div class="col-sm-12">
      <?php if(!empty($_GET['notif'])){?>
        <?php if($_GET['notif']=="tambahberhasil"){?>
              <div class="alert alert-success" role="alert">
              Data Berhasil Ditambahkan</div>
        <?php } else if($_GET['notif']=="editberhasil"){?>
              <div class="alert alert-success" role="alert">
              Data Berhasil Diubah</div>
        <?php } else if($_GET['notif']=="hapusberhasil"){?>
              <div class="alert alert-success" role="alert">
              Data Berhasil Dihapus</div>
            <?php }?>
          <?php }?>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Paket</th>
                <th width="30%">Deskripsi</th>
                <th width="30%">Harga</th>
                <th width="50%"><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_pk = "SELECT `nama_paket`,`deskripsi`,`harga` FROM `paket` ORDER BY `nama_paket`";
            $query_pk = mysqli_query($koneksi,$sql_pk);
            $no = 1;
            while($data_pk     = mysqli_fetch_row($query_pk)){
            $nama_paket        = $data_pk[0];
            $deskripsi          = $data_pk[1];
            $harga             = $data_pk[2];
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $nama_paket;?></td>
            <td><?php echo $deskripsi;?></td>
            <td><?php echo $harga;?></td>
            <td align="center">
            <a href="edit_paket.php" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit</a>
            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $paket; ?>?'))window.location.href ='paket.php?aksi=hapus&data=<?php echo $id_paket;?>&notif=hapusberhasil'"
            class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>Hapus</a>
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
