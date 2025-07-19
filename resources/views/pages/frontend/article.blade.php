@extends('layouts.frontend.app', ['title' => 'Halaman Artikel'])

@section('content')
    <section id="services" class="services programs section">
        @if ($articles->isEmpty())
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
                            <a href="{{ route('detail.article', $r->slug) }}">
                                <div class="service-card">
                                    <img class="gambar" src="{{ asset('storage/' . $r->image) }}" alt="">
                                    <span
                                        class="span text-black">{{ \Carbon\Carbon::parse($r->date)->translatedFormat('d F Y') }}</span>
                                    <h3>{{ $r->title }}</h3>
                                    <td class="text-black">{!! \Illuminate\Support\Str::words(strip_tags($r->content), 25, '...') !!}</td>
                                    <a href="{{ route('detail.article', $r->slug) }}" class="read-more">Selengkapnya</a>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $articles->links() }}
                    </ul>
                </nav>
            </div>
        @endif
    </section>
@endsection
