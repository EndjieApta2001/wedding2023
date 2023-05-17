<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3><i class="fas fa-user-lock"></i> Ubah Password</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="hobi.php">Ubah Password</a></li>
              <li class="breadcrumb-item active">Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Ubah Password</h3>
        <div class="card-tools">
          <a href="persiapan.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data Password harus isi</div>
          <?php }?>
        <?php }?>
      </div>
      

      <!-- form start -->
      <form class="form-horizontal" action="konfirmasi_edit_persiapan.php" method="post">
      <?php
        $password = md5('password'); // hasil dari password yang tersimpan di table database
        if(isset($_POST["admin"])){
          if($_POST["pass_lama"] == '' || $_POST["pass_baru"] == '' || $_POST["konfirmasi"] == ''){
          echo '<h4 class=error>Input Form tidak boleh ada yang kosong..!</h4>';
          }
          else if(isset($_POST["pass_lama"]) && md5($_POST["pass_lama"]) != $password){
            echo '<h4 class=error>password lama tidak sesuai..!</h4>';
          }else{
          echo '<h4 class=sukses>password ok..!</h4>';	
          }
        }
        ?>
          <div class="card-body">
          <h6>
            <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan password baru Anda untuk mengubah password.</i>
          </h6><br>
          <div class="form-group row">
            <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="pass_lama" value="<?php echo $password; ?>">
              <!--<span class="text-danger">Mohon maaf, password lama wajib diisi.</span>-->
            </div>
          </div>
          <div class="form-group row">
            <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="pass_baru" value="">
              <!--<span class="text-danger">Mohon maaf, password baru wajib diisi.</span>-->
            </div>
          </div>
          <div class="form-group row">
            <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="konfirmasi" value="">
              <span class="text-danger">Mohon maaf, konfirmasi password baru wajib diisi.</span>
            </div>
          </div>
        </div>
         <!-- /.card-body -->
         <div class="card-footer">
           <div class="col-sm-10">
             <button type="submit" class="btn btn-info float-right" value="Ubah Password" name="admin">
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