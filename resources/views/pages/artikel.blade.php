@extends('layouts.main')
@section('content')

    <section id="services" class="services section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="judul ">
          <h1>Artikel</h1>
        </div>
        <div class="row gy-4">
          <a href="{{ route('artikel.create') }}" method="GET"></a>
          @foreach ($allArtikel as $key => $r)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <img class="gambar" src="{{ asset('storage/' . $r->gambar) }}" alt="">
              <span class="span">{{$r->tanggal}}</span>
              <h3>{{$r->judul}}</h3>
              <p>{{$r->content}}</p>
              <a href="/detailArtikel" class="read-more">Read More<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <!-- /Services Section -->

@endsection