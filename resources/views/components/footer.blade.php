
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