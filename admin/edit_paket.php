<?php 
session_start();
include('koneksi/koneksi.php');
  if(isset($_GET['data'])){
  $id_paket = $_GET['data'];
  $_SESSION['id_paket']=$id_paket;
    
  $sql_pk = "SELECT `nama_paket`, `deskripsi`, `harga` FROM `paket` WHERE `id_paket`='$id_paket'";
  $query_pk = mysqli_query($koneksi,$sql_pk);
  while($data_pk = mysqli_fetch_row($query_pk)){
      $nama_paket       = $data_pk[0];
      $deskripsi        = $data_pk[0];
      $harga            = $data_pk[0];
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
            <h3><i class="fas fa-edit"></i> Edit Paket</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="hobi.php">Paket</a></li>
              <li class="breadcrumb-item active">Edit Paket</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Paket</h3>
        <div class="card-tools">
          <a href="paket.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data hobi wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>

      <!-- form start -->
      <form class="form-horizontal" action="konfirmasi_edit_paket.php" method="post">
          <div class="card-body">
          <div class="form-group row">
              <label for="nama_paket" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="<?php echo $nama_paket;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="harga" class="col-sm-3 col-form-label">Harga</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga;?>">
             </div>
           </div>
         <!-- /.card-body -->
         <div class="card-footer">
           <div class="col-sm-10">
             <button type="submit" class="btn btn-info float-right">
             <i class="fas fa-save"></i> Simpan</button>
           </div>  
         </div>
         <!-- /.card-footer -->
      </form>

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
