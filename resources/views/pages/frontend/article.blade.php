@extends('layouts.frontend.app', ['title' => 'Halaman Artikel'])

@section('content')
    <section id="services" class="services programs section">
        <a href="" method="GET"></a>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="judul ">
                <h1>Artikel</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <h4>Artikel Belum Tersedia</h4>
                </table>
            </div>
        </div>
        {{-- @if ($articles->isEmpty())
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Artikel</h1>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <h4>Artikel Belum Tersedia</h4>
                    </table>
                </div>
            </div>
        @else
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="judul ">
                    <h1>Artikel</h1>
                </div>
                <div class="row gy-4">
                    @foreach ($articles as $key => $r)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-card">
                                <img class="gambar" src="{{ asset('storage/' . $r->image) }}" alt="">
                                <span class="span">{{ $r->date }}</span>
                                <h3>{{ $r->title }}</h3>
                                <p>{{ $r->content }}</p>
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
        @endif --}}
    </section>
@endsection
