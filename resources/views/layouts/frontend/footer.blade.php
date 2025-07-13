<footer id="footer" class="footer light-background">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 ">
                <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
                    <h5 class="sitename">Panti Asuhan dan Pondok Pesantren Zuhriyah.</h1>
                </a>
                <p>SK Menkumham RI No: AHU-0012559. AH.01.04 Tahun 2018 No.2 Tgl. 07 September 2018 NSP: 510034041047
                    IJOP No.24925/2022</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h2>Link</h2>
                <hr>
                <div class="donasi">
                    <ul>
                        <li><a href="/" class="active">Beranda</a></li>
                        <li><a href="/artikel">Profil</a></li>
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
                    <h2>Donasi</h2>
                    <hr>
                    <div class="donasi">
                        <p>
                            @foreach(json_decode($profile->donations ?? '[]', true) as $item)
                                <div class="d-flex align-items-start mb-2">
                                    <i class="bi bi-bank icon2 me-2"></i>
                                    <span>{{ $item }}</span>
                                </div>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
    <h2 class="text-white">Hubungi Kami</h2>
    <hr>
    <div class="donasi">

        @if (!empty($profile->location))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-geo-alt-fill icon2 me-2 text-white"></i>
                <a href="https://maps.app.goo.gl/6EyAMZnhFg4bN8x56" class="text-decoration-none text-white">
                    {{ $profile->location }}
                </a>
            </div>
        @endif

        @if (!empty($profile->wa))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-whatsapp icon2 me-2 text-white"></i>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile->wa) }}" class="text-decoration-none text-white">
                    {{ $profile->wa }}
                </a>
            </div>
        @endif

        @if (!empty($profile->email))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-envelope icon2 me-2 text-white"></i>
                <a href="mailto:{{ $profile->email }}" class="text-decoration-none text-white">
                    {{ $profile->email }}
                </a>
            </div>
        @endif

        @if (!empty($profile->ig))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-instagram icon2 me-2 text-white"></i>
                <a href="https://instagram.com/{{ ltrim($profile->ig, '@') }}" class="text-decoration-none text-white" target="_blank">
                    {{ $profile->ig }}
                </a>
            </div>
        @endif

        @if (!empty($profile->fb))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-facebook icon2 me-2 text-white"></i>
                <a href="https://facebook.com/{{ $profile->fb }}" class="text-decoration-none text-white" target="_blank">
                    {{ $profile->fb }}
                </a>
            </div>
        @endif

        @if (!empty($profile->tiktok))
            <div class="d-flex align-items-start mb-2">
                <i class="bi bi-tiktok icon2 me-2 text-white"></i>
                <a href="https://tiktok.com/@{{ ltrim($profile->tiktok, '@') }}" class="text-decoration-none text-white" target="_blank">
                    {{ $profile->tiktok }}
                </a>
            </div>
        @endif

    </div>
</div>


        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <div class="credits">
            Copyright &copy; Pondok Pesantren Zuhriyah {{ date('Y') }}
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>
