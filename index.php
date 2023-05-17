<?php include("koneksi/koneksi.php") ?>
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
   <body class="main-layout">
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
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              <div class="col-lg-8 col-md-9 ">
                                 <div class="build_box">
                                    <h1>Wedding <span class="orang"> Organizer</span></h1>
                                    <p>wedding organizer adalah suatu jasa khusus yang secara pribadi membantu calon pengantin dan keluarga dalam perencanaan dan supervisi pelaksanaan rangkaian acara pesta pernikahan sesuai dengan jadwal yang telah ditetapkan.</p>
                                    <a class="read_more quote_btn" href="booking.php" role="button">Booking</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </section>
      </header>
      <!-- end banner -->
      <!-- groomsmen -->
      <div class="groomsmen">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>REVIEW</h2>
                     <span>Foto yang Hasil</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="brid text_align_center">
                     <figure><img src="images/wisuda2.jpg" alt="#"/></figure>
                     <h3> Wisuda </h3>
                  </div>
               </div>
               <div class="col-md-4 margin_top70">
                  <div class="brid text_align_center">
                     <figure><img src="images/nikah.jpg" alt="#"/></figure>
                     <h3> Wedding </h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="brid text_align_center">
                     <figure><img src="images/adat.jpg" alt="#"/></figure>
                     <h3> Baju Adat </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- groomsmen -->
      <!-- blog -->
      <div class="blog">
         <div class="container ">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>TESTIMONI</h2>
                  </div>
               </div>
            </div>
      
            <div class="row">
               <div class="col-sm-12">
                  <div class="blog_bg margin_bottom30">
                     <div class="row d_flex">
                     <?php 
                        $sql_ts = "SELECT `id_testimoni`,`nama_testimoni`,`paket_testimoni`,`deskripsi_testimoni`, `tanggal`, `foto` FROM `testimoni` ";
                        $query_ts = mysqli_query($koneksi,$sql_ts);
                        while($data_ts       = mysqli_fetch_row($query_ts)){
                        $id_testimoni        = $data_ts[0];
                        $nama_testimoni      = $data_ts[1];
                        $paket_testimoni     = $data_ts[2];
                        $deskripsi_testimoni = $data_ts[3];
                        $tanggal             = $data_ts[4];
                        $foto                = $data_ts[5];
                        ?>
                        <div class="col-md-6">
                           <div class="blog_img">
                              <figure><img src="admin/testimoni/<?php echo $foto;?>" alt="#"/></figure>
                              <span><?php echo $tanggal;?></span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="marriage_text">
                              <span>Post by :<?php echo $nama_testimoni;?></span>
                              <h3><?php echo $paket_testimoni;?></h3>
                              <p><?php echo $deskripsi_testimoni;?></p>
                           </div>
                        </div>
                     </div>
                     <?php $no++;}?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="ru_bg">
                     <div class="row">
                        
                        <div class="col-md-20">
                           <ul class="lacation">
                              <li><i class="fa fa-map-marker" aria-hidden="true"></i> JL.PLAOSAN TIMUR, PANDAWANGI-BLIMBING KOTA MALANG </li>
                              <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 08800000111</li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i> yuvienwedding@gmail.com</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Kami Hubungi</h2>
                     </div>

                     <?php if(!empty($_GET['notif'])){?>
                        <?php if($_GET['notif']=="tambahkosong"){?>
                           <div class="alert alert-danger" role="alert">
                           mohon Maaf data wajib di isi</div>
                        <?php }?>
                     <?php }?>

                  </div>
                  <form id="request" class="main_form" method="post" action="konfirmasi_hubungi.php">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" id="nama" name="nama" value=""> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone number" type="type" id="nomor" name="nomor" value="">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name" id="message" name="message" value=""></textarea>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <button type="submit" class="send_btn btn-outline-primary">Send</button>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <ul class="social_icon">
                              <li><a href="whatsapp://send?text=Hello&phone=+6285334787247"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5581154239508!2d112.64928631425329!3d-7.941131394280002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629bd95609f9b%3A0x411bf7cb6cc2d836!2sJl.%20Plaosan%20Timur%2C%20Kec.%20Blimbing%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1678114223407!5m2!1sid!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
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