<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i>Pesanan Booking</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="jurusan.php">Booking</a></li>
              <li class="breadcrumb-item active">Tambah Booking</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Pesanan Booking</h3>
        <div class="card-tools">
          <a href="jurusan.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
         <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">
            Maaf data jurusan wajib di isi</div>
         <?php }?>
      <?php }?>
      </div>
      
      <!-- form start -->
      <form class="form-horizontal" method="post" action="konfirmasi_tambah_siswa.php">
           <div class="card-body">
              <div class="form-group row">
                <label for="kode" 
                class="col-sm-3 col-form-label">Kode</label>
                <?php
 
                // https://www.malasngoding.com
                // menghubungkan dengan koneksi database
                include 'koneksi/koneksi.php';
                 
                // mengambil data barang dengan kode paling besar
                $query = mysqli_query($koneksi, "SELECT max(nis) as kodeTerbesar FROM siswa");
                $data = mysqli_fetch_array($query);
                $kodeSiswa = $data['kodeTerbesar'];
                 
                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                // dan diubah ke integer dengan (int)
                $urutan = (int) substr($kodeSiswa, 3, 3);
                 
                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                $urutan++;
                 
                // membentuk kode barang baru
                // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                $huruf = "NIS";
                $kodeSiswa = $huruf . sprintf("%03s", $urutan);
                // echo $kodeSiswa;
                 
                ?>
                <div class="col-sm-4">
                  <input type="text"  name="nis" class="form-control" id="nis" value="<?php echo $kodeSiswa; ?>">
               </div>
             </div>
             <div class="form-group row">
                <label for="nama" 
                class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text"  name="nama" class="form-control" id="nama" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="nomor_aktif" 
                class="col-sm-3 col-form-label">Nomor Aktif</label>
                <div class="col-sm-7">
                  <input type="text"  name="nomor_aktif" class="form-control" id="nomor_aktif" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="paket" 
                class="col-sm-3 col-form-label">Paket</label>
                <div class="col-sm-7">
                  <input type="text"  name="Paket" class="form-control" id="paket" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="tanggal_booking" 
                class="col-sm-3 col-form-label">Tanggal_Booking</label>
                <div class="col-sm-7">
                  <input type="text"  name="tanggal_booking" class="form-control" id="tanggal_booking" value="">
               </div>
             </div>
             <div class="form-group row">
                <label for="tanggal_pesanan" 
                class="col-sm-3 col-form-label">Tanggal_Pesanan</label>
                <div class="col-sm-7">
                  <input type="text"  name="tanggal_pesanan" class="form-control" id="tanggal_pesanan" value="">
               </div>
             </div>
           </div>
           <!-- /.card-body -->
           <div class="card-footer">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-info 
               float-right"><i class="fas fa-plus"></i> Booking</button>
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
