<?php include './admin/koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Yuvi'en</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html">Yuvi'en</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="paket.php">Paket</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="admin/index.php">Admin</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Persiapan</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <div class="about">
         <div class="container ">
            <div class="card">
                <div class="card-body">
                  <div class="col-sm-10">
                     <?php if(!empty($_GET['notif'])){?>
                        <?php if($_GET['notif']=="tambahkosong"){?>
                           <div class="alert alert-danger" role="alert">
                           mohon Maaf data wajib di isi</div>
                        <?php }?>
                     <?php }?>
                     </div>
                    <form id="request" class="main_form" method="post" action="konfirmasi_persiapan.php">
                     <div class="form-group">
                           <label for="exampleFormControlSelect1">Nama Pemesanan</label>
                                 <select class="form-control" id="nama" name="nama">
                                 <option value="0">- Pilih Nama pesan -</option>
                                 <?php
                                 $sql_j = "select `id_pemesanan`, `nama` from `pemesanan` 
                                 order by `id_pemesanan`";
                                 $query_j = mysqli_query($koneksi,$sql_j);
                                 while($data_j = mysqli_fetch_row($query_j)){
                                 $id_pemesanan = $data_j[0];
                                 $nama = $data_j[1];
                                 ?>
                                 <option value="<?php echo $id_pemesanan;?>"
                                 <?php if(!empty($_SESSION['nama'])){
                                 if($id_pemesanan==$_SESSION['nama']){?> 
                                 selected="selected" <?php }}?>>
                                 <?php echo $nama;?><?php }?>
                              </select>
                           </div>
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Tempat</label>
                            <div>
                              <input type="radio" id="tempat" name="tempat" value="freeline"
                                    checked>
                              <label for="huey">freeline</label>
                           </div>
                           <div>
                              <input type="radio" id="tempat " name="tempat" value="salon_kecantikan "
                                    checked>
                              <label for="huey">salon kecantikan </label>
                           </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Kota</label>
                          <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Tanggal</label>
                          <input type="date" class="form-control" id="tanggal" name="tanggal" value="">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Jam</label>
                          <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <div>
                              <input type="radio" id="status" name="status" value="Proses"
                                    checked>
                              <label for="huey">Proses</label>
                           </div>
                          </div>
                          <button type="submit" class="btn btn-outline-primary">Booking</button>
                      </form>
                </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2023 All Rights Reserved. <a href="https://html.design/">Yuvi'en Wedding Malang</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>