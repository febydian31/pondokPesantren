<script>
  function openWhatsApp() {
    const phoneNumber = '6281290112969'; // Ganti dengan nomor WA tujuan
    const message = encodeURIComponent('konfirmasi Sudah melakukan Pembayaran untuk Donasi Pondok Pesantren Zuhriyah.');
    const url = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(url, '_blank');
  }
</script>
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
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }} "></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }} "></script>
  <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }} "></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }} "></script>

  <!-- Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }} "></script>