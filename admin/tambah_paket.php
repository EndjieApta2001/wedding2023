<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Paket</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="paket.php">Paket</a></li>
              <li class="breadcrumb-item active">Tambah Paket</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Paket</h3>
        <div class="card-tools">
          <a href="paket.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" method="post" action="konfirmasi_tambah_paket.php">
           <div class="card-body">
              <div class="form-group row">
                <label for="paket" 
                class="col-sm-3 col-form-label">Paket</label>
                <div class="col-sm-7">
                  <input type="text"  name="paket" class="form-control" id="paket" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="deskripsi" 
                class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                  <input type="text"  name="deskripsi" class="form-control" id="deskrpsi" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="harga" 
                class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-7">
                  <input type="text"  name="harga" class="form-control" id="harga" value="">
               </div>
             </div>
           </div>
           <!-- /.card-body -->
           <div class="card-footer">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-info 
               float-right"><i class="fas fa-plus"></i> Paket</button>
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
