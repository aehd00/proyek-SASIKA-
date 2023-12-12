<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SASIKA</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/landing/css/bootstrap.css'); ?>" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="<?php echo base_url('assets/landing/css/css-circular-prog-bar.css'); ?>">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/landing/css/style.css" rel="stylesheet'); ?>" />
  <!-- responsive style -->
  <link href="<?php echo base_url('assets/landing/css/responsive.css" rel="stylesheet'); ?>" />




  <link rel="stylesheet" href="<?php echo base_url('assets/landing/css/css-circular-prog-bar.css'); ?>">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-box {
      border: 1px solid #ddd;
      padding: 20px;
      margin-bottom: 20px;
      text-align: center;
      /* Untuk menempatkan tombol dalam posisi relatif */
    }

    .product-img {
      width: 100%;
      max-height: 500px;
      object-fit: cover;
    }

    .nama-produk {
      margin-top: 10px;
    }

    .harga {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    .add-cart {
      display: block;
      margin-top: 10px;
      font-size: 24px;
    }

    .btn-checkout {
      position: center;
      bottom: 10px;
      right: 10px;
      border-radius: 50px;
      /* Tombol rounded */
      padding: 10px 20px;
      background-color: darkblue;
      /* Warna hijau (sesuaikan dengan warna tema Anda) */
      color: #fff;
      border: none;
    }
  </style>


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Selamat Datang di Website
          </h3>
          <br>
          <h1>
            sasika
          </h1>
          <br>
          <!-- <h4>Visi</h4>
          <p>
            Cerdas, Ceria, Berakhlak Mulia
          </p> -->
          <div class="hero_btn-continer">
            <a href="<?php echo site_url('main/login'); ?>" class="call_to-btn btn_white-border">
              <span>
                Login
              </span>
              <img src="<?php echo base_url('assets/landing/images/right-arrow.png'); ?>" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="<?php echo base_url('assets/landing/images/hero.png'); ?>" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Tentang Kami
      </h2>
      </br>
      <p class="text-center">
      <h3>Visi</h3>
      Membentuk anak yang cerdas, baik dan terampil berakhlak mulia, sholeh/sholihah sehingga terwujud anak yang kreatif dan mandiri.
      </p>
      <p class="text-center">
      <h3>Misi</h3>
      <ul>
        <li>Melaksanakan pembelajaran aktif, kreatif, efektif dan inovatif.</li>
        <li>Mendidik anak secara optimal sesuai dengan kemampuan anak.</li>
        <li>Menyiapkan anak didik ke jenjang pendidikan dasar dengan ketercapaian Kompetensi Dasar sesuai tahapan perkembangan anak.</li>
      </ul>
      </p>

      <!--       <div class="d-flex justify-content-center mt-5">
        <a href="" class="call_to-btn  ">

          <span>
            Read More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div> -->
    </div>
  </section>


  <!-- about section -->

  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Ekstrakurikuler
      </h2>
      <!-- <p class="text-center">
        Ipsum available, but the majority h
      </p> -->
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img src="<?= base_url('assets/landing/images/menari.jpg') ?>">
            <div class="card-body">
              <h5 class="card-title">Menari</h5>
            </div>
          </div>
          <div class="card">
            <img src="<?= base_url('assets/landing/images/marching band.jpg') ?>">
            <div class="card-body">
              <h5 class="card-title">Marching Band</h5>
            </div>

          </div>
          <div class="card">
            <img src="<?= base_url('assets/landing/images/angklungg.jpg') ?>">
            <div class="card-body">
              <h5 class="card-title">Kesenian</h5>

            </div>

          </div>
          <div class="card">
            <img src="<?= base_url('assets/landing/images/reater.jpeg') ?>">
            <div class="card-body">
              <h5 class="card-title">Teater</h5>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- teacher section -->

  <!-- vehicle section -->
  <section class="vehicle_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Fasilitas
      </h2>
      <p class="text-center">
        Fasilitas memadai untuk menunjang Kegiatan Belajar Mengajar
      </p>
      <div class="layout_padding-top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="vehicle_img-box ">
                <img src="<?= base_url('assets/landing/images/fasilitas/permainan.jpg') ?>" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="<?= base_url('assets/landing/images/fasilitas/ruangkelas.jpg') ?>" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="<?= base_url('assets/landing/images/fasilitas/taman.jpg') ?>" alt="" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- vehicle section -->
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="main-heading">
        Buku Pembelajaran
      </h2>
      <p class="text-center">
        Buku materi pembelajaran dapat dibeli disini
      </p>
      <section class="client_section layout_padding2">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="product-box">
                <img src="<?= base_url('assets/foto_buku/huruf.jpg') ?>" alt="" class="product-img">
                <h4 class="nama-produk">Ayo Mengenal Huruf</h4>
                <span class="harga">Rp 15000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
                <!-- Tambahkan link ke halaman checkout dengan parameter -->
                <button type="button" class="btn btn-checkout" onclick="redirectToCheckout()">Checkout</button>

              </div>
            </div>
            <div class="col-md-4">
              <div class="product-box">
                <img src="<?= base_url('assets/foto_buku/membacamenulis.jpg') ?>" alt="" class="product-img">
                <h4 class="nama-produk">Membaca dan Menulis</h4>
                <span class="harga">Rp 15000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
                <button type="button" class="btn btn-checkout" onclick="redirectToCheckout()">Checkout</button>
              </div>
            </div>
            <div class="col-md-4">
              <div class="product-box">
                <img src="<?= base_url('assets/foto_buku/berhitung.jpg') ?>" alt="" class="product-img">
                <h4 class="nama-produk">Aku Pandai Berhitung</h4>
                <span class="harga">Rp 15000</span>
                <i class="bx bx-shopping-bag add-cart"></i>
                <button type="button" class="btn btn-checkout" onclick="redirectToCheckout()">Checkout</button>
              </div>
            </div>
          </div>
        </div>

      </section>

  </section>




  <!-- client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom">
    <div class="container">

      <h2 class="main-heading">
        Contact Us

      </h2>
      <p class="text-center">
        Anda bisa menghubungi kami disini

      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form action="<?php echo site_url('main/send') ?>" method="post" enctype="multipart/form-data">
                  <div>
                    <input type="text" name="cp_namamurid" class="form-control" placeholder="Nama Murid">
                  </div>
                  <div>
                    <select id="heard" name="cp_kelas" class="form-control" required="required">
                      <option value="">-- Kelas --</option>
                      <option value="TK A">TK A</option>
                      <option value="TK B">TK B</option>
                    </select>
                  </div></br>
                  <div>
                    <select id="heard" name="cp_jenkel" class="form-control" required="required">
                      <option value="">-- Jenis Kelamin --</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div>
                    <input type="text" name="cp_namaortu" class="form-control" placeholder="Nama Ortu" required="required">
                  </div>
                  <div>
                    <input type="text" name="cp_kontak" class="form-control" placeholder="Kontak" required="required">
                  </div>
                  <div>
                    <input type="email" name="cp_email" class="form-control" placeholder="Email" required="required">
                  </div>
                  <div>
                    <input type="datetime-local" name="cp_tanggal" class="form-control" placeholder="Tanggal" required="required">
                  </div>
                  <div>
                    <input type="text" name="cp_pesan" class="form-control" placeholder="Pesan/Keterangan" class="input_message" required="required">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="call_to-btn">
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- end contact section -->

  <!-- admission section -->
  <!--   <section class="admission_section ">
    <div class="container-fluid position-relative">
      <div class="row h-100">
        <div id="map" class="h-100 w-100 ">
        </div>
        <div class="container">
          <div class="admission_container position-absolute">
            <div class="admission_img-box">
              <img src="images/kidss.jpg" alt="">
            </div>
            <div class="admission_detail">
              <h3>
                Apply for Admission
              </h3>
              <p class="mt-3 mb-4">
                There are many variations of passages of Lorem Ipsum available, but the majority h
              </p>
              <div class="">
                <a href="" class="admission_btn btn_on-hover">
                  Read More
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->






  <!-- admission section -->


  <!-- landing section -->
  <!--   <section class="landing_section layout_padding">
    <div class="container">
      <h2 class="main-heading">
        Free Multipurpose Responsive

      </h2>
      <h2 class="main-heading number_heading">
        Landing Page 2019

      </h2>
      <p class="landing_detail text-center">
        There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of
        passages of Lorem Ipsum available, but the majority h

      </p>
    </div>
  </section> -->

  <!-- end landing section -->




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2023 SASIKA
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="<?php echo base_url('assets/landing/js/jquery-3.4.1.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/landing/js/bootstrap.js'); ?>"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">

  </script>
  <!-- end google map js -->
  <script>
    function redirectToCheckout() {
      // Set session dan arahkan ke halaman checkout
      sessionStorage.setItem('productName', 'Ayo Mengenal Huruf');
      window.location.href = 'checkout.php';
    }
  </script>

</body>

</html>