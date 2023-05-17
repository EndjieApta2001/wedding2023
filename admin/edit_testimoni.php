<?php 
session_start();
include('koneksi/koneksi.php');
  if(isset($_GET['data'])){
    $id_testimoni = $_GET['data'];
    $_SESSION['id_testimoni']=$id_testimoni;
    
    //get testimoni
    $sql_tes = "SELECT `nama_testimoni`,`paket_testimoni`,`deskripsi_testimoni`,`tanggal`, `foto` FROM `testimoni` where `id_testimoni`='$id_testimoni'";
    //echo $sql;
    $query_tes = mysqli_query($koneksi, $sql_tes);
    while($data_tes = mysqli_fetch_row($query_tes)){
      $nama_testimoni       = $data_tes[0];
      $paket_testimoni      = $data_tes[1];
      $deskripsi_testimoni  = $data_tes[2];
      $tanggal              = $data_tes[3];
      $foto                 = $data_tes[4];
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Testimoni</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="testimoni.php">Testimoni</a></li>
              <li class="breadcrumb-item active">Edit Testimoni</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Testimoni</h3>
        <div class="card-tools">
          <a href="testimoni.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
        <?php }?>
      </div>
      <form class="form-horizontal" method="post" action="konfirmasi_edit_testimoni.php" enctype="multipart/form-data">
        <div class="card-body">          
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info">
            <i class="fas fa-user-circle"></i> <u>Testimoni</u></span></label>
          </div>
          <div class="form-group row">
            <label for="nama_testimoni" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama_testimoni" id="nama_testimoni" value="<?php echo $nama_testimoni?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="paket_testimoni" class="col-sm-3 col-form-label">Paket</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="paket_testimoni" id="paket_testimoni" value="<?php echo $paket_testimoni?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_testimoni" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="deskripsi_testimoni" id="deskripsi_testimoni" value="<?php echo $deskripsi_testimoni?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-7">
              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
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
