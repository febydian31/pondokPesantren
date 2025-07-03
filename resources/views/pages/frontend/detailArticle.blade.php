@extends('layouts.frontend.app', ['title' => 'Halaman Detail Artikel'])

@section('content')
<section class="top-detail">
    <div class="detail-judul">
        <div class="judul container">
            <h1>Detail Artikel</h1>
            <h3>{{ $artikel->title }}</h3>
        </div>
    </div>
</section>

<section class="isi_detail">
    <div class="container">
        <div class="images">
            <img class="gambar" src="{{ asset('storage/' . $artikel->image) }}" alt="">
            <div class="detail">
                <span class="span">{{ $artikel->date }}</span>
                <h3>{{ $artikel->title }}</h3>
                <p>{!! $artikel->content !!}</p>      
            </div>

        </div>
    </div>
</section>
<!-- Services Section -->
    <section id="services" class=" services section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
        </div>
    </section>
    <!-- /Services Section -->

@endsection