<?php 
include('koneksi/koneksi.php');
if(isset($_GET['hapus'])){
  $id_hubungi = $_GET['hapus'];
  if(!empty($id_hubungi)){
      $sql="DELETE FROM hubungi WHERE id_hubungi='$id_hubungi'";
        
      if($mysqli->query($sql) === TRUE) { // Jika gagal meng-hapus data tampilkan pesan dibawah 'Perintah SQL Salah'
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $mysqli->error, E_USER_ERROR);
      } else { // Jika berhasil alihkan ke halaman tampil.php
        header('location: hubungi.php');
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
            <h3><i class="fas fa-user-tie"></i> Data Hubungi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hubungi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            

              <!-- /.card-header -->
     <div class="card-body">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="5%">No</th>
                <th width="10%">Nama</th>
                <th width="10%">Nomor aktif</th>
                <th width="20%">Message</th>
                <th width="10%">tanggal</th>
                <th width="10%"><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT `id_hubungi`, `nama`,`nomor`,`message`,`tanggal` FROM `hubungi` ORDER BY `nama`";
            $query = mysqli_query($koneksi,$sql);
            $no = 1;
            while($data = mysqli_fetch_row($query)){
            $id_hubungi        = $data[0];
            $nama              = $data[1];
            $nomor             = $data[2];
            $message           = $data[3];
            $tanggal           = $data[4];
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $nomor;?></td>
            <td><?php echo $message;?></td>
            <td><?php echo $tanggal;?></td>
            <td align="center">
            <a href=hubungi.php?hapus=$data[id_hubungi] class="btn btn-xs btn-warning">Hapus</a>
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
