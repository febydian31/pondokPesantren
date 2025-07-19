@extends('layouts.frontend.app', ['title' => 'Halaman Tentang Kami'])

@section('content')
    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Panti Asuhan dan Pondok Pesantren Zuhriyah</h1>
                @if ($profile?->history)
                    <p>{!! implode(' ', json_decode($profile->history, true)) !!}</p>
                @else
                    <p class="text-center">Sejarah belum di isi</p>
                @endif
            </div>
        </div>
    </section>

    <section id="services" class="services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Visi & Misi</span></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card isi program-card">
                        <h3>Visi</h3>
                        <ul>
                            @foreach (json_decode($profile->vision ?? '[]', true) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card isi program-card">
                        <h3>Misi</h3>
                        <ul>
                            @foreach (json_decode($profile->mission ?? '[]', true) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="program services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Program</span></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                @forelse(json_decode($profile->programs ?? '[]', true) as $item)
                    <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card program-card">
                            <h5>{{ $item }}</h5>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-muted">Belum ada program</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="services" class="services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Struktur Organisasi</span></div>
        </div>
        <div class="container card struktur col-lg-6" data-aos="fade-up" data-aos-delay="100">
            @if ($profile->organizational_structure)
                <img src="{{ asset('storage/' . $profile->organizational_structure) }}"
                    style="width: 100%; max-width: 800px;" alt="Struktur Organisasi">
            @else
                <div class="text-center text-muted">Belum ada gambar</div>
            @endif
        </div>

    </section>
@endsection
