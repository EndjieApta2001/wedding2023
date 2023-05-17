<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Testimoni</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="testimoni.php">Testimoni</a></li>
              <li class="breadcrumb-item active">Tambah Testimoni</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Testimoni</h3>
        <div class="card-tools">
          <a href="testimoni.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
         <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data Paket wajib di isi</div>
         <?php }?>
      <?php }?>
      </div>
      
      <!-- form start -->
      <form class="form-horizontal" method="post" action="konfirmasi_tambah_testimoni.php">
           <div class="card-body">
              <div class="form-group row">
                <label for="nama_testimoni" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text"  name="nama_testimoni" class="form-control" id="nama_testimoni" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="paket_testimoni" class="col-sm-3 col-form-label">Paket</label>
                <div class="col-sm-7">
                  <input type="text"  name="paket_testimoni" class="form-control" id="paket_testimoni" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="deskripsi_testimoni" 
                class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                  <input type="text"  name="deskripsi_testimoni" class="form-control" id="deskripsi_testimoni" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="tanggal" 
                class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                  <input type="date"  name="tanggal" class="form-control" id="tanggal" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="foto" 
                class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-7">
                    <input type="file" class="custom-file-input" name="testimoni" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
               </div>
             </div>
           </div>
           <!-- /.card-body -->
           <div class="card-footer">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-info 
               float-right"><i class="fas fa-plus"></i> Submit</button>
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
