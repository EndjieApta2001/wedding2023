<?php 
session_start();
include('koneksi/koneksi.php');
  if(isset($_GET['data'])){
  $id_laporan = $_GET['data'];
  $_SESSION['id_laporan']=$id_laporan;
    
  $sql_lp = "SELECT `metode_bayar` FROM `laporan` WHERE `id_laporan`='$id_laporan'";
  $query_lp = mysqli_query($koneksi,$sql_lp);
  while($data_lp = mysqli_fetch_row($query_lp)){
      $metode_bayar       = $data_lp[0];
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
      <form class="form-horizontal" action="konfirmasi_edit_laporan.php" method="post">
          <div class="card-body">
          <div class="form-group row">
            <label for="metode_bayar" class="col-sm-3 col-form-label">Metode Pembayaran</label>
            <div class="col-sm-7">
              <select class="form-control" id="metode_bayar" name="metode_bayar">
                <option value="TUNAI">TUNAI</option>
                <option value="TRANSFER">TRANSFER</option>
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
