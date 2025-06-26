@extends('layouts.frontend.app', ['title' => 'Halaman Beranda'])

@section('content')
    <section id="hero" class="hero section dark-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="hero-content " data-aos="fade-up" data-aos-delay="200">
                        <p>Selamat Datang di</p>
                        <h2>Panti Asuhan dan Pondok Pesantren Zuhriyah</h2>
                        <div class="hero-btns">
                            <a href="/pendaftaranPage" class="btn btn-primary">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12   b-img">
                    <div class="hero-image " data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('images/cover.jpg') }}" alt="Consulting Services" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="program services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Pondok Pesantren Zuhriyah</span></div>
        </div>
        <div class="container video-section" data-aos="zoom-out" data-aos-delay="200">
            <div class="video-wrapper">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/4PKBBJ6qv5w?si=9pJFFxflBY2-EW5z/VIDEO_ID?rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                </iframe>
            </div>
    </section>



    <section id="services" class="sumber-dana services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Sumber Dana</span></div>
        </div>

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

    <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
                    <div class="about-image">
                        <img src="{{ asset('images/about.jpg') }}" alt="About Our Consulting Firm"
                            class="img-fluid main-image">
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-content">
                        <h2>Profil Singkat</h2>
                        <p class="lead">Panti Asuhan dan pondok pesantren dengan sistem campuran salafiyah dan kholafiyah.
                            Konsentrasi ilmu Qur’an dan Fiqih. Usaha Pesantren koperasi, agribisnis, homestay. Sarana pra
                            sarana Ponpes Plus Madrasah. Bangunan fisik ada musholla, rumah kiai, pondok, dan madrasah
                            pembelajaran sistem klasikal dan wetonan. Kurikulum telah dilengkapi mapel diniyah dan umum,
                            ditambah keterampilan, olahraga, kesenian, berorganisasi, pendidikan dan sebagian telah
                            melaksanakan program pengembangan masyarakat.</p>
                        <div class="row features-row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <h2>30</h2>
                                    <p>Pengurus Santri</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-item">
                                    <H2>60</H2>
                                    <p>Santri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>
    <!-- /profile Section -->

    <section id="services" class="services section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul ">
                <h1>Artikel</h1>
            </div>
            <div class="table-responsive">
                <h4>Artikel belum tersedia</h4>
            </div>
        </div>
        {{-- @if ($allArtikel->isEmpty())
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Artikel</h1>
                </div>
                <div class="table-responsive">
                    <h4>Artikel belum tersedia</h4>
                </div>
            </div>
        @else
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Artikel</h1>
                </div>
                <div class="row gy-4">
                    @foreach ($allArtikel as $key => $r)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-card">
                                <img class="gambar" src="{{ asset('storage/' . $r->gambar) }}" alt="">
                                <span class="span">{{ $r->tanggal }}</span>
                                <h3>{{ $r->judul }}</h3>
                                <p>{{ $r->content }}</p>
                                <a href="/detailArtikel" class="read-more">Read More<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
                    <a href="/artikelPage" class="btn btn-primary">Lihat Semua Artikel</a>
                </div>
            </div>
        @endif --}}
    </section>
@endsection
