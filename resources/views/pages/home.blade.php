@extends('layouts.main')
@section('content')
  <main class="main">
      <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <!-- <img src="{{ asset('images/hero1.jpeg') }}" class="img" alt=""> -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="hero-content " data-aos="fade-up" data-aos-delay="200">
              <p>Selamat Datang di</p>
              <h2>Pondok Pesantren Zuhriyah</h2>
              <div class="hero-btns">
                <a href="/pendaftaran" class="btn btn-primary">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12   b-img">
            <div class="hero-image " data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset('images/gambar-3.jpg') }}" alt="Consulting Services" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

        <!-- artikel Section -->
    <section id="services" class="program services section">
      <!-- Section Title -->
      <div class="container section-title judul-artikel" data-aos="fade-up">
        <div><span>Pondok Pesantren Zuhriyah</span></div>
      </div>
        <!-- <div class="align-items-center">
          <div class="video-section" data-aos="zoom-out" data-aos-delay="200">
              <div class="container video-section">
                <div class="video-wrapper">
                  <video id="demo-video" preload="metadata" poster="https://via.placeholder.com/800x450?text=Video+Thumbnail" >
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm" />
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4" />
                      Your browser does not support the video tag.
                  </video>
                <div class="play-button" id="play-btn"></div>
              </div>
          </div>
        </div> -->
          
            <div class="container video-section" data-aos="zoom-out" data-aos-delay="200">
                <div class="video-wrapper">
                  <video id="demo-video" preload="metadata" poster="https://via.placeholder.com/800x450?text=Video+Thumbnail" >
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm" />
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4" />
                      Your browser does not support the video tag.
                  </video>
                <div class="play-button" id="play-btn"></div>
            </div>
    </section>
    <!-- /artikel Section -->

    <!-- vidio Section -->
    <!-- <section id="contact" class="vidio2">
       <div class="lol">
            <h3>Pondok Pesantren Zuhriyah</h3>
            <div class="container video-section">
                <div class="video-wrapper">
                  <video id="demo-video" preload="metadata" poster="https://via.placeholder.com/800x450?text=Video+Thumbnail" >
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm" />
                      <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4" />
                      Your browser does not support the video tag.
                  </video>
                <div class="play-button" id="play-btn"></div>
            </div>
        </div>
       </div>
      
    </section> -->
    <!-- /vidio Section -->

    <!-- sumber dana Section -->
    <section id="services" class=" sumber-dana services section">

      <!-- Section Title -->
      <div class="container section-title judul-artikel" data-aos="fade-up">
        <div><span>Sumber Dana</span></div>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card2"> 
              <div class="icon"><i class="bi bi-building" title="People"></i></div>
              <h3>Yayasan</h3>
              <p>Donasi dari keluarga yasan PAPP Zuhriyah</p>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card2"> 
              <div class="icon"><i class="bi bi-person-circle" title="People"></i></div>
              <h3>Santri</h3>
              <p>SPP dari santri regular tiap bulan dan usaha santri</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card2"> 
              <div class="icon"><i class="bi bi-person-raised-hand" title="People"></i></div>
              <h3>Donatur</h3>
              <p>Donatur insidental baik dari CSR, para dermawan, maupun lembaga filantropi</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /sumber dana Section -->

    <!-- profile Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="about-image">
              <img src="{{ asset('images/gambar-5.jpg') }}" alt="About Our Consulting Firm" class="img-fluid main-image">
              </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="about-content">
              <h2>Profil Singkat</h2>
              <p class="lead">Panti Asuhan dan pondok pesantren dengan sistem campuran salafiyah dan kholafiyah. Konsentrasi ilmu Qur’an dan Fiqih. Usaha Pesantren koperasi, agribisnis, homestay. Sarana pra sarana Ponpes Plus Madrasah. Bangunan fisik ada musholla, rumah kiai, pondok, dan madrasah pembelajaran sistem klasikal dan wetonan. Kurikulum telah dilengkapi mapel diniyah dan umum, ditambah keterampilan, olahraga, kesenian, berorganisasi, pendidikan dan sebagian telah melaksanakan program pengembangan masyarakat.</p>
              <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->

              <div class="row features-row">
                <div class="col-md-6">
                  <div class="feature-item">
                    <!-- <div class="icon">
                      <i class="bi bi-graph-up-arrow"></i>
                    </div> -->
                    <h2>30</h2>
                    <p>Pengurus Santri</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="feature-item">
                    <!-- <div class="icon">
                      <i class="bi bi-lightbulb"></i>
                    </div> -->
                    <H2>60</H2>
                    <p>Santri</p>
                  </div>
                </div>

              <!-- <div class="cta-button">
                <a href="#about" class="btn btn-primary">Learn More About Us</a>
              </div> -->
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /profile Section -->

    <!-- artikel Section -->
    <section id="services" class=" services section">
      <!-- Section Title -->
      <div class="container section-title judul-artikel" data-aos="fade-up">
        <div><span>Artikel</span></div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <img class="gambar" src="{{ asset('images/logo.png') }}" alt="">
              <span class="span">April 15, 2025</span>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, officiis?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
              <a href="service-details.html" class="read-more">Read More<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <img class="gambar" src="{{ asset('images/logo.png') }}" alt="">
              <span class="span">April 15, 2025</span>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, officiis?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
              <a href="service-details.html" class="read-more">Read More<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <img class="gambar" src="{{ asset('images/logo.png') }}" alt="">
              <span class="span">April 15, 2025</span>
              <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, officiis?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
              <a href="service-details.html" class="read-more">Read More<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
          <a href="/artikel" class="btn btn-primary">Lihat Semua Artikel</a>
        </div>
      </div>
    </section>
    <!-- /artikel Section -->
  </main>

@endsection
