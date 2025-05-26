<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pondok Pesantren Zuhriyah</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Consulting
  * Template URL: https://bootstrapmade.com/bootstrap-consulting-website-template/
  * Updated: May 01 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
 <script>
  function openWhatsApp() {
    const phoneNumber = '6281290112969'; // Ganti dengan nomor WA tujuan
    const message = encodeURIComponent('konfirmasi Sudah melakukan Pembayaran untuk Donasi Pondok Pesantren Zuhriyah.');
    const url = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(url, '_blank');
  }
</script>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
         <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
        <h5 class="sitename">Pondok Pesantren Zuhriyah</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/profile">Profile</a></li>
          <li><a href="/artikel">Artikel</a></li>
          <li><a href="/kegiatan">Kegiatan</a></li>
          <li><a href="/prestasi">Prestasi</a></li>
          <li><a href="/donatur">Donatur</a></li>
          <li><a href="/pendaftaran">Pendaftaran</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>


  @yield('content')


  
            </div>
        </div>
<footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 ">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
                <h5 class="sitename">Pondok Pesantren Zuhriyah.</h1>
            </a>
            <p>SK Menkumham RI No: AHU-0012559. AH.01.04 Tahun 2018 No.2 Tgl. 07 September 2018 NSP: 510034041047 IJOP No.24925/2022</p>

        </div>

        <div class="col-lg-3 col-md-6">
          <h2>Quick Links</h2><hr>
          <div class="donasi">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="/artikel">Profile</a></li>
                <li><a href="/artikel">Artikel</a></li>
                <li><a href="/kegiatan">Kegiatan</a></li>
                <li><a href="/prestasi">Prestasi</a></li>
                <li><a href="/donatur">Donatur</a></li>
                <li><a href="/pendaftaran">Pendaftaran</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="">
            <h2>Donasi</h2><hr>
            <div class="donasi">
                <p>
                <i class="bi bi-bank icon2"> </i> <strong>BRI</strong><br>
                <span>No. Rekening: 105601004767509 a/n Muhammad Adam Ilhami</span>
                </p>
                <p>
                <i class="bi bi-bank icon2"> </i> <strong>BPD DIY</strong><br>
                <span>No. Rekening: 005221039170 a/n Muhammad Adam Ilhami</span>
                </p>
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h2>Contact Us</h2><hr>
          <div class="donasi">
            <div class="d-flex">
                <i class="bi bi-geo-alt-fill icon2" ></i>
                <p>Rejodani I RT/RW 03/02 Sariharjo ngaglik Sleman Yogyakrta</p>
            </div>
            <div class="d-flex">
                <i class="bi bi-whatsapp icon2" ></i>
                <p>0811 1600 17 (Gus Adam) / 0812 2626 7274 (Ning)</p>
            </div>
            <div class="d-flex">
                <i class="bi bi-envelope icon2" ></i>
                <p>pp.zuhriyah@gmail.com</p>
            </div>
        </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- active nav menu  -->
   <script>
    // Mendapatkan semua link navbar
    const navbarLinks = document.querySelectorAll('.navmenu a');
    // Menambahkan kelas 'active' pada link yang sesuai dengan URL saat ini
    navbarLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });
  </script>
   <!-- end nav mneu -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- vidio JS Files -->
   <script>
  const video = document.getElementById('demo-video');
  const playBtn = document.getElementById('play-btn');
  playBtn.addEventListener('click', function () {
    if (video.paused) {
      video.play();
      playBtn.style.display = 'none';
    } else {
      video.pause();
      playBtn.style.display = 'flex';
    }
  });
  video.addEventListener('ended', function() {
    playBtn.style.display = 'flex';
  });
</script>
<!-- vidio end  -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }} "></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }} "></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }} "></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }} "></script>
  

</body>

</html>