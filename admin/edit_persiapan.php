<?php 
session_start();
include('koneksi/koneksi.php');
  if(isset($_GET['data'])){
  $id_persiapan = $_GET['data'];
  $_SESSION['id_persiapan']=$id_persiapan;
    
  $sql_pr = "SELECT `tempat`, `alamat`, `kota`, `tanggal`, `waktu`, `status` FROM `persiapan` WHERE `id_persiapan`='$id_persiapan'";
  $query_pr = mysqli_query($koneksi,$sql_pr);
  while($data_pr = mysqli_fetch_row($query_pr)){
      $tempat       = $data_pr[0];
      $alamat       = $data_pr[1];
      $kota         = $data_pr[2];
      $tanggal      = $data_pr[3];
      $waktu        = $data_pr[4];
      $status       = $data_pr[5];
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
            <h3><i class="fas fa-edit"></i> Edit persiapan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="hobi.php">persiapan</a></li>
              <li class="breadcrumb-item active">Edit persiapan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit persiapan</h3>
        <div class="card-tools">
          <a href="persiapan.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="konfirmasi_edit_persiapan.php" method="post">
          <div class="card-body">
          <div class="form-group row">
              <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $tempat;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>">
             </div>
           </div>
            <div class="form-group row">
              <label for="kota" class="col-sm-3 col-form-label">Kota</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="kota" name="kota" value="<?php echo $kota;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $tanggal;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="waktu" class="col-sm-3 col-form-label">Jam</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $waktu;?>">
             </div>
           </div>
           <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-7">
              <select class="form-control" id="status" name="status">
                <option value="PROSES">PROSES</option>
                <option value="SELESAI">SELESAI</option>
                <option value="BATALKAN">BATALKAN</option>
              </select>
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
