<?php 
session_start();
include('koneksi/koneksi.php');
  if(isset($_GET['data'])){
  $id_pemesanan = $_GET['data'];
  $_SESSION['id_pemesanan']=$id_pemesanan;
    
  $sql_pm = "SELECT `kode`, `nama`, `nomor`, `jenis_kelamin`, `id_paket`, `status_bayar`, `uang_muka` FROM `pemesanan` WHERE `id_pemesanan`='$id_pemesanan'";
  $query_pm = mysqli_query($koneksi,$sql_pm);
  while($data_pm = mysqli_fetch_row($query_pm)){
      $kode             = $data_pm[0];
      $nama             = $data_pm[1];
      $nomor            = $data_pm[2];
      $jenis_kelamin    = $data_pm[3];
      $id_paket         = $data_pm[4];
      $status_bayar     = $data_pm[5];
      $uang_muka        = $data_pm[6];
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
            <h3><i class="fas fa-edit"></i> Edit Pemesanan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="hobi.php">Pemesanan</a></li>
              <li class="breadcrumb-item active">Edit Pemesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Pemesanan</h3>
        <div class="card-tools">
          <a href="pemesanan.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="konfirmasi_edit_pesanan.php" method="post">
          <div class="card-body">
          <div class="form-group row">
              <label for="kode" class="col-sm-3 col-form-label">Kode</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $kode;?>">
             </div>
           </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $nomor;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>">
             </div>
           </div>
           <div class="form-group row">
              <label for="id_paket" class="col-sm-3 col-form-label">Paket</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="id_paket" name="id_paket" value="<?php echo $id_paket;?>">
             </div>
           </div>
           <div class="form-group row">
            <label for="status_bayar" class="col-sm-3 col-form-label">Status Bayar</label>
            <div class="col-sm-7">
              <select class="form-control" id="status_bayar" name="status_bayar">
                <option value="LUNAS">LUNAS</option>
                <option value="DP">DP</option>
              </select>
            </div>
          </div>
           <div class="form-group row">
              <label for="uang_muka" class="col-sm-3 col-form-label">Uang Muka</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="uang_muka" name="uang_muka" value="<?php echo $uang_muka;?>">
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
